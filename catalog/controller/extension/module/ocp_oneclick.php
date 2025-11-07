<?php
/**
 * @package     OpenCart\One Click Checkout
 * @author      OCProfi <ocprofi@gmail.com>
 * @copyright   Copyright © 2018, OCProfi.com
 * @license http://ocprofi.com/eula/
 */

class ControllerExtensionModuleOCPOneclick extends Controller {

    public function index() {
        $this->load->model('catalog/product');
        $this->load->model('catalog/information');
        $this->load->model('tool/image');

        if (isset($this->request->request['product_id'])) {
            $product_id = (int) $this->request->request['product_id'];
        } else {
            die();
        }

        $data = array();
        $data = array_merge($data, $this->language->load('extension/module/ocp_oneclick'), $this->config->get('ocp_oneclick_localisation'), $this->config->get('ocp_oneclick_settings'));

        $localisation = $this->config->get('ocp_oneclick_localisation');
        $settings = $this->config->get('ocp_oneclick_settings');

        $data['fields'] = $this->config->get('ocp_oneclick_fields');

        $product_info = $this->model_catalog_product->getProduct($product_id);

        $data['product_id'] = $product_id;
        $data['name'] = $product_info['name'];
        $data['manufacturer'] = $product_info['manufacturer'];
        $data['manufacturers'] = $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $product_info['manufacturer_id']);
        $data['model'] = $product_info['model'];
        $data['quantity'] = $product_info['quantity'];
        $data['ean'] = $product_info['ean'];
        $data['jan'] = $product_info['jan'];
        $data['isbn'] = $product_info['isbn'];
        $data['mpn'] = $product_info['mpn'];
        $data['location'] = $product_info['location'];
        $data['reward'] = $product_info['reward'];
        $data['points'] = $product_info['points'];
        $data['description'] = html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8');
        $data['attribute_groups'] = $this->model_catalog_product->getProductAttributes($product_id);
        if ($product_info['quantity'] <= 0) {
            $data['stock'] = $product_info['stock_status'];
        } elseif ($this->config->get('config_stock_display')) {
            $data['stock'] = $product_info['quantity'];
        } else {
            $data['stock'] = $this->language->get('text_instock');
        }


        $language_code = $this->session->data['language'];
        $data['lang_code'] = $language_code;

        if ($settings['agree']) {
            $information = $this->model_catalog_information->getInformation($settings['agree']);
            if ($information) {
                if($settings['agree_type']) {
                    $data['agree'] = !empty($localisation[$language_code]['agree_text']) ? sprintf(html_entity_decode($localisation[$language_code]['agree_text'], ENT_QUOTES, 'UTF-8'), $this->url->link('information/information', 'information_id=' . $information['information_id']), $information['title']) : sprintf($this->language->get('text_require_information'), $this->url->link('information/information', 'information_id=' . $information['information_id']), $information['title']);
                }else {
                    $data['agree'] = !empty($localisation[$language_code]['agree_text_btn']) ? sprintf(html_entity_decode($localisation[$language_code]['agree_text_btn'], ENT_QUOTES, 'UTF-8'), $this->url->link('information/information', 'information_id=' . $information['information_id']), $information['title']) : sprintf($this->language->get('text_require_information'), $this->url->link('information/information', 'information_id=' . $information['information_id']), $information['title']);
                }
            }
        }

        if (isset($localisation[$language_code])) {
            foreach ($localisation[$language_code] as $key => $text) {
                $data[$key] = $localisation[$language_code][$key];
            }
        }

        $data['thumb'] = $product_info['image'] ? $this->model_tool_image->resize($product_info['image'], $settings['main_image_width'], $settings['main_image_height']) : $this->model_tool_image->resize("no_image.png", $settings['main_image_width'], $settings['main_image_height']);

        $data['images'] = array();
        $images_array = $this->model_catalog_product->getProductImages($product_id);
        $images_new_array = array_splice($images_array, 0, $settings['count_sub_images'], true);

        $data['images'][] = array(
            'popup' => ( $product_info['image']) ? $this->model_tool_image->resize($product_info['image'], $settings['main_image_width'], $settings['main_image_height']) : $this->model_tool_image->resize("no_image.png", $settings['main_image_width'], $settings['main_image_height']),
            'thumb' => ( $product_info['image']) ? $this->model_tool_image->resize($product_info['image'], $settings['sub_images_width'], $settings['sub_images_height']) : $this->model_tool_image->resize("no_image.png", $settings['sub_images_width'], $settings['sub_images_height'])
        );

        foreach ($images_new_array as $sub_image) {
            $data['images'][] = array(
                'popup' => ( $sub_image['image']) ? $this->model_tool_image->resize($sub_image['image'], $settings['main_image_width'], $settings['main_image_height']) : $this->model_tool_image->resize("no_image.png", $settings['main_image_width'], $settings['main_image_height']),
                'thumb' => ( $sub_image['image']) ? $this->model_tool_image->resize($sub_image['image'], $settings['sub_images_width'], $settings['sub_images_height']) : $this->model_tool_image->resize("no_image.png", $settings['sub_images_width'], $settings['sub_images_height'])
            );
        }

        $data['min_height'] = $data['main_image_height'];
        if($data['images']) {
            $data['min_height'] = $data['main_image_height'] + ($data['sub_images_height'] * floor((count($data['images'])) / 5));
        }

        if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
            $data['price'] = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
        } else {
            $data['price'] = false;
        }

        if($product_info['special']) {
            $data['special'] = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
        } else {
            $data['special'] = false;
        }

        if ($this->config->get('config_tax')) {
            $data['tax'] = $this->currency->format(($product_info['special'] ? $product_info['special'] : $product_info['price']), $this->session->data['currency']);
        } else {
            $data['tax'] = false;
        }

        $data['options'] = array();

        foreach ((array) $this->model_catalog_product->getProductOptions($product_id) as $option) {
            if(isset($data['product_options_allowed']) && in_array($option['option_id'], $data['product_options_allowed'])){
                if ($option['type'] == 'select' || $option['type'] == 'radio' || $option['type'] == 'checkbox' || $option['type'] == 'image') {
                    $option_value_data = array();

                    foreach ($option['product_option_value'] as $option_value) {
                        if (!$option_value['subtract'] || ( $option_value['quantity'] > 0 )) {
                            if (( ( $this->config->get('config_customer_price') && $this->customer->isLogged() ) || !$this->config->get('config_customer_price') ) && (float) $option_value['price']) {
                                $price = $this->currency->format($this->tax->calculate($option_value['price'], $product_info['tax_class_id'], $this->config->get('config_tax') ? 'P' : false ), $this->session->data['currency']);
                            } else {
                                $price = false;
                            }

                            $option_image_width = !empty($settings['option_images_width']) ? $settings['option_images_width'] : 50;
                            $option_image_height = !empty($settings['option_images_height']) ? $settings['option_images_height'] : 50;

                            $option_value_data[] = array(
                                'product_option_value_id' => $option_value['product_option_value_id'],
                                'option_value_id' => $option_value['option_value_id'],
                                'name' => $option_value['name'],
                                'image' => $this->model_tool_image->resize($option_value['image'], $option_image_width, $option_image_height),
                                'price' => $price,
                                'price_prefix' => $option_value['price_prefix']
                            );
                        }
                    }

                    $data['options'][] = array(
                        'product_option_id' => $option['product_option_id'],
                        'option_id' => $option['option_id'],
                        'name' => $option['name'],
                        'type' => $option['type'],
                        'product_option_value' => $option_value_data,
                        'required' => $option['required']
                    );
                } elseif ($option['type'] == 'text' || $option['type'] == 'textarea' || $option['type'] == 'date' || $option['type'] == 'datetime' || $option['type'] == 'time'
                ) {
                    $data['options'][] = array(
                        'product_option_id' => $option['product_option_id'],
                        'option_id' => $option['option_id'],
                        'name' => $option['name'],
                        'type' => $option['type'],
                        'value' => $option['value'],
                        'required' => $option['required']
                    );
                }
            }
        }

        $data['discounts'] = array();

        foreach ($this->model_catalog_product->getProductDiscounts($product_id) as $discount) {
            $data['discounts'][] = array(
                'quantity' => $discount['quantity'],
                'price' => $this->currency->format($this->tax->calculate($discount['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency'])
            );
        }

        if (isset($this->request->request['option'])) {
            $option = $this->request->request['option'];
        } else {
            $option = array();
        }

        if (isset($this->request->request['quantity'])) {
            $quantity = (int) $this->request->request['quantity'];
        } else {
            $quantity = 1;
        }

        $this->cart->clear();

        $this->cart->add($product_id, $quantity, $option);

        $this->response->setOutput($this->load->view('extension/module/ocp_oneclick', $data));
        
    }

    public function confirm() {
        $json = array();
        $data = array();

        $this->load->model('catalog/product');
        $this->load->model('catalog/information');
        $this->load->model('setting/extension');
        $this->load->model('account/customer');
        $this->load->model('checkout/order');
        $this->load->model('checkout/marketing');
        $this->load->model('tool/image');

        if (isset($this->request->request['product_id'])) {
            $product_id = (int) $this->request->request['product_id'];
        } else {
            die();
        }

        if (isset($this->request->request['option'])) {
            $option = $this->request->request['option'];
        } else {
            $option = array();
        }

        if (isset($this->request->request['quantity'])) {
            $quantity = (int) $this->request->request['quantity'];
        } else {
            $quantity = 1;
        }

        $data = array_merge($data, $this->language->load('extension/module/ocp_oneclick'), $this->config->get('ocp_oneclick_localisation'), $this->config->get('ocp_oneclick_settings'));

        $localisation = $this->config->get('ocp_oneclick_localisation');
        $settings = $this->config->get('ocp_oneclick_settings');
        $fields = $this->config->get('ocp_oneclick_fields');
        $product_options = $this->model_catalog_product->getProductOptions($product_id);
        $language_code = $this->session->data['language'];
        $customer_info = ($this->customer->isLogged()) ? $this->model_account_customer->getCustomer($this->customer->getId()) : FALSE;


        if ($fields['firstname']['status'] && $fields['firstname']['required'] && (!isset($this->request->request['firstname']) || empty($this->request->request['firstname']))) {
            $json['error']['firstname'] = $this->language->get('error_firstname');
        }
        if ($fields['lastname']['status'] && $fields['lastname']['required'] && (!isset($this->request->request['lastname']) || empty($this->request->request['lastname']))) {
            $json['error']['lastname'] = $this->language->get('error_lastname');
        }
        if ($fields['telephone']['status'] && $fields['telephone']['required'] && (!isset($this->request->request['telephone']) || empty($this->request->request['telephone']))) {
            $json['error']['telephone'] = $this->language->get('error_telephone');
        }
        if ($fields['email']['status'] && $fields['email']['required'] && (!isset($this->request->post['email']) || utf8_strlen($this->request->post['email']) > 96 || !preg_match('/^[^\@]+@.*\.[a-z]{2,6}$/i', $this->request->post['email']))) {
            $json['error']['email'] = $this->language->get('error_email');
        }
        if ($fields['address_1']['status'] && $fields['address_1']['required'] && (!isset($this->request->request['address_1']) || empty($this->request->request['address_1']))) {
            $json['error']['address_1'] = $this->language->get('error_address_1');
        }
        if ($fields['comment']['status'] && $fields['comment']['required'] && (!isset($this->request->request['comment']) || empty($this->request->request['comment']))) {
            $json['error']['comment'] = $this->language->get('error_comment');
        }

        if ($settings['agree'] && !isset($this->request->request['agree'])) {
            $information = $this->model_catalog_information->getInformation($settings['agree']);
            if ($information) {
                $json['error']['agree'] = sprintf($this->language->get('error_agree'), $information['title']);
            }
        }

        if(isset($settings['product_options_allowed'])){
            foreach ($product_options as $product_option) {
                if (in_array($product_option['option_id'], $settings['product_options_allowed'])) {
                    if ($product_option['required'] && empty($option[$product_option['product_option_id']])) {
                        $json['error']['option'][$product_option['product_option_id']] = sprintf($this->language->get('error_option'), $product_option['name']);
                    }
                }
            }
        }
        $order_data = array();

        if (!isset($json['error'])) {

            if (!empty($this->request->server['HTTP_X_FORWARDED_FOR'])) {
                $forwarded_ip = $this->request->server['HTTP_X_FORWARDED_FOR'];
            } elseif (!empty($this->request->server['HTTP_CLIENT_IP'])) {
                $forwarded_ip = $this->request->server['HTTP_CLIENT_IP'];
            } else {
                $forwarded_ip = '';
            }

            $user_agent = isset($this->request->server['HTTP_USER_AGENT']) ? $this->request->server['HTTP_USER_AGENT'] : '';
            $accept_language = isset($this->request->server['HTTP_ACCEPT_LANGUAGE']) ? $this->request->server['HTTP_ACCEPT_LANGUAGE'] : '';

            /*if (isset($this->request->cookie['tracking'])) {
                $affiliate_info = $this->model_account_customer->getAffiliateByCode($this->request->cookie['tracking']);
                $tracking = $this->request->cookie['tracking'];
                $subtotal = $this->cart->getSubTotal();

                if ($affiliate_info) {
                    $affiliate_id = $affiliate_info['affiliate_id'];
                    $commission = ($subtotal / 100 ) * $affiliate_info['commission'];
                } else {
                    $affiliate_id = 0;
                    $commission = 0;
                }

                $marketing_info = $this->model_checkout_marketing->getMarketingByCode($this->request->cookie['tracking']);

                if ($marketing_info) {
                    $marketing_id = $marketing_info['marketing_id'];
                } else {
                    $marketing_id = 0;
                }
            } else {*/
                $affiliate_id = 0;
                $commission = 0;
                $marketing_id = 0;
                $tracking = '';
            /*}*/

            $this->cart->clear();
            
            $this->cart->add($product_id, $quantity, $option);
            $product_to_order = array();

            foreach ($this->cart->getProducts() as $product) {
                $option_data = array();

                foreach ($product['option'] as $option) {
                    $option_data[] = array(
                        'product_option_id' => $option['product_option_id'],
                        'product_option_value_id' => $option['product_option_value_id'],
                        'option_id' => $option['option_id'],
                        'option_value_id' => $option['option_value_id'],
                        'name' => $option['name'],
                        'value' => $option['value'],
                        'type' => $option['type']
                    );
                }

                $product_to_order[] = array(
                    'product_id' => $product['product_id'],
                    'name' => $product['name'],
                    'model' => $product['model'],
                    'option' => $option_data,
                    'download' => $product['download'],
                    'quantity' => $product['quantity'],
                    'subtract' => $product['subtract'],
                    'price' => $product['price'],
                    'total' => $product['total'],
                    'tax' => $this->tax->getTax($product['price'], $product['tax_class_id']),
                    'reward' => $product['reward']
                );
            }

            // Totals
            $totals = array();
            $taxes = $this->cart->getTaxes();
            $total = 0;

            // Because __call can not keep var references so we put them into an array. 			
            $total_data = array(
                    'totals' => &$totals,
                    'taxes'  => &$taxes,
                    'total'  => &$total
            );

            // Display prices
            if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                    $sort_order = array();

                    $results = $this->model_setting_extension->getExtensions('total');

                    foreach ($results as $key => $value) {
                            $sort_order[$key] = $this->config->get('total_' . $value['code'] . '_sort_order');
                    }

                    array_multisort($sort_order, SORT_ASC, $results);

                    foreach ($results as $result) {
                            if ($this->config->get('total_' . $result['code'] . '_status')) {
                                    $this->load->model('extension/total/' . $result['code']);

                                    // We have to put the totals in an array so that they pass by reference.
                                    $this->{'model_extension_total_' . $result['code']}->getTotal($total_data);
                            }
                    }

                    $sort_order = array();

                    foreach ($totals as $key => $value) {
                            $sort_order[$key] = $value['sort_order'];
                    }

                    array_multisort($sort_order, SORT_ASC, $totals);
            }
            
            $currency_id = $this->currency->getId($this->session->data['currency']);
            $currency_code = $this->session->data['currency'];
            $currency_value = $this->currency->getValue($this->session->data['currency']);

            $order_data = array(
                'invoice_prefix' => (string) $this->config->get('config_invoice_prefix'),
                'store_id' => $store_id = (int) $this->config->get('config_store_id'),
                'store_name' => (string) $this->config->get('config_name'),
                'store_url' => $store_id ? (string) $this->config->get('config_url') : HTTP_SERVER,
                'customer_id' => $this->customer->isLogged() ? $this->customer->getId() : 0,
                'customer_group_id' => $this->customer->isLogged() ? $this->customer->getGroupId() : $this->config->get('config_customer_group_id'),
                'firstname' => '',
                'lastname' => '',
                'email' => '',
                'telephone' => '',
                'fax' => '',
                'shipping_city' => '',
                'shipping_postcode' => '',
                'shipping_country' => '',
                'shipping_country_id' => '',
                'shipping_zone_id' => '',
                'shipping_zone' => '',
                'shipping_address_format' => '',
                'shipping_firstname' => '',
                'shipping_lastname' => '',
                'shipping_company' => '',
                'shipping_address_1' => '',
                'shipping_address_2' => '',
                'shipping_code' => '',
                'shipping_method' => '',
                'payment_city' => '',
                'payment_postcode' => '',
                'payment_country' => '',
                'payment_country_id' => '',
                'payment_zone' => '',
                'payment_zone_id' => '',
                'payment_address_format' => '',
                'payment_firstname' => '',
                'payment_lastname' => '',
                'payment_company' => '',
                'payment_address_1' => '',
                'payment_address_2' => '',
                'payment_company_id' => '',
                'payment_tax_id' => '',
                'payment_code' => 'cod',
                'payment_method' => '',
                'forwarded_ip' => $forwarded_ip,
                'user_agent' => $user_agent,
                'accept_language' => $accept_language,
                'vouchers' => array(),
                'comment' => '',
                'total' => $total,
                'reward' => '',
                'affiliate_id' => $affiliate_id,
                'tracking' => $tracking,
                'commission' => $commission,
                'marketing_id' => $marketing_id,
                'language_id' => $this->config->get('config_language_id'),
                'currency_id' => $currency_id,
                'currency_code' => $currency_code,
                'currency_value' => $currency_value,
                'ip' => $this->request->server['REMOTE_ADDR'],
                'products' => $product_to_order,
                'totals' => $totals
            );

            if (isset($this->request->request['firstname'])) {
                $order_data['shipping_firstname'] = $this->request->request['firstname'];
                $order_data['payment_firstname'] = $this->request->request['firstname'];
                $order_data['firstname'] = $this->request->request['firstname'];
            }

            if (isset($this->request->request['lastname'])) {
                $order_data['shipping_lastname'] = $this->request->request['lastname'];
                $order_data['payment_lastname'] = $this->request->request['lastname'];
                $order_data['lastname'] = $this->request->request['lastname'];
            }

            if (isset($this->request->request['email'])) {
                $order_data['email'] = $this->request->request['email'];
            }

            if (isset($this->request->request['telephone'])) {
                $order_data['telephone'] = $this->request->request['telephone'];
            }

            $this->session->data['order_id'] = $this->model_checkout_order->addOrder($order_data);

            $order_id = $this->session->data['order_id'];

            $this->db->query("UPDATE `" . DB_PREFIX . "order` SET order_status_id = '" . (int) $settings['order_status_id'] . "', date_modified = NOW() WHERE order_id = '" . $order_id . "'");

            $this->cart->clear();

            $code_find = array(
                '{firstname}',
                '{lastname}',
                '{email}',
                '{total}',
                '{address_1}',
                '{telephone}',
                '{order_id}',
                '{comment}'
            );

            $code_replace = array(
                isset($this->request->request['firstname']) ? $this->request->request['firstname'] : '',
                isset($this->request->request['lastname']) ? $this->request->request['lastname'] : '',
                isset($this->request->request['email']) ? $this->request->request['email'] : '',
                $this->currency->format($total, $this->session->data['currency']),
                isset($this->request->request['address_1']) ? $this->request->request['address_1'] : '',
                isset($this->request->request['telephone']) ? $this->request->request['telephone'] : '',
                $order_id,
                isset($this->request->request['comment']) ? $this->request->request['comment'] : ''
            );

            if (isset($localisation[$language_code])) {
                $json['success'] = html_entity_decode(str_ireplace($code_find, $code_replace, $localisation[$language_code]['success_text']), ENT_QUOTES, 'UTF-8');
            }

            $this->send_email($order_id, $settings['order_status_id']);
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function update() {

        if (isset($this->request->request['product_id']) && isset($this->request->request['quantity'])) {

            $this->load->model('catalog/product');

            $option_price = 0;
            $product_id = (int) $this->request->request['product_id'];
            $quantity = (int) $this->request->request['quantity'];
            $product_info = (array) $this->model_catalog_product->getProduct($product_id);
            $product_options = (array) $this->model_catalog_product->getProductOptions($product_id);
            $shipping_data = isset($this->session->data['shipping_method']) ? $this->session->data['shipping_method'] : '';

            if (isset($shipping_data) && isset($this->request->request['shipping_method']) && !empty($this->request->request['shipping_method'])) {
                $shipping_cost = $shipping_data['cost'];
            } else {
                $shipping_cost = 0;
            }

            if (!empty($this->request->request['option'])) {
                $option = $this->request->request['option'];
            } else {
                $option = array();
            }

            foreach ($product_options as $product_option) {

                if (is_array($product_option['product_option_value'])) {
                    foreach ($product_option['product_option_value'] as $option_value) {
                        if (isset($option[$product_option['product_option_id']])) {
                            if (( $option[$product_option['product_option_id']] == $option_value['product_option_value_id'] ) || ( ( is_array($option[$product_option['product_option_id']]) ) && ( in_array($option_value['product_option_value_id'], $option[$product_option['product_option_id']]) ) )) {
                                if ($option_value['price_prefix'] == '+') {
                                    $option_price += $option_value['price'];
                                } elseif ($option_value['price_prefix'] == '-') {
                                    $option_price -= $option_value['price'];
                                } elseif ($option_value['price_prefix'] == '*') {
                                    $option_price *= $option_value['price'];
                                } elseif ($option_value['price_prefix'] == '/') {
                                    $option_price /= $option_value['price'];
                                } elseif ($option_value['price_prefix'] == '%') {
                                    $option_price %= $option_value['price'];
                                }
                            }
                        }
                    }
                }
            }

            $json = array();
            $special = $this->tax->calculate($this->calculateDiscount($product_id, $quantity), $product_info['tax_class_id'], $this->config->get('config_tax')) + $this->tax->calculate($shipping_cost + ( $option_price ), $product_info['tax_class_id'], $this->config->get('config_tax'));
            $price = $this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')) + $this->tax->calculate($shipping_cost + ($option_price), $product_info['tax_class_id'], $this->config->get('config_tax'));

            if ($special < $price) {
                $json['special'] = $this->currency->format($special, $this->session->data['currency']);
            }

            $json['price'] = $this->currency->format($price, $this->session->data['currency']);

            $json['tax'] = $this->currency->format(( $this->calculateDiscount($product_id, $quantity) + $option_price ) * $quantity, $this->session->data['currency']);

            $json['total'] = $this->currency->format(( $this->tax->calculate($this->calculateDiscount($product_id, $quantity), $product_info['tax_class_id'], $this->config->get('config_tax')) * $quantity ) + $this->tax->calculate($shipping_cost + ( $option_price * $quantity ), $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);

            $this->response->addHeader('Content-Type: application/json');
            $this->response->setOutput(json_encode($json));
        }
    }

    private function calculateDiscount($product_id, $quantity) {

        $this->load->model('catalog/product');

        $settings = (array) $this->config->get('ocp_oneclick_settings');

        $customer_group_id = ($this->customer->isLogged()) ? (int) $this->customer->getGroupId() : (int) $this->config->get('config_customer_group_id');

        $product_info = (array) $this->model_catalog_product->getProduct($product_id);

        $price = $product_info['price'];

        $product_discount_query = $this->db->query("SELECT price FROM " . DB_PREFIX . "product_discount WHERE product_id = '" . (int) $product_id . "' AND customer_group_id = '" . (int) $customer_group_id . "' AND quantity <= '" . (int) $quantity . "' AND ((date_start = '0000-00-00' OR date_start < NOW()) AND (date_end = '0000-00-00' OR date_end > NOW())) ORDER BY quantity DESC, priority ASC, price ASC LIMIT 1");
        if ($product_discount_query->num_rows) {
            $price = $product_discount_query->row['price'];
        }


        $product_special_query = $this->db->query("SELECT price FROM " . DB_PREFIX . "product_special WHERE product_id = '" . (int) $product_id . "' AND customer_group_id = '" . (int) $customer_group_id . "' AND ((date_start = '0000-00-00' OR date_start < NOW()) AND (date_end = '0000-00-00' OR date_end > NOW())) ORDER BY priority ASC, price ASC LIMIT 1");

        if ($product_special_query->num_rows && $product_special_query->row['price'] < $price) {
            $price = $product_special_query->row['price'];
        }

        return $price;
    }

    private function send_email($order_id, $order_status_id) {
        $this->load->model('checkout/order');
        $order_info = $this->model_checkout_order->getOrder($order_id);

        // Check for any downloadable products
        $download_status = false;

        $order_product_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_product WHERE order_id = '" . (int) $order_id . "'");

        foreach ($order_product_query->rows as $order_product) {
            // Check if there are any linked downloads
            $product_download_query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "product_to_download` WHERE product_id = '" . (int) $order_product['product_id'] . "'");

            if ($product_download_query->row['total']) {
                $download_status = true;
            }
        }

        // Load the language for any mails that might be required to be sent out
        $language = new Language($order_info['language_code']);
        $language->load($order_info['language_code']);
        $language->load('mail/order_add');

        $order_status_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_status WHERE order_status_id = '" . (int) $order_status_id . "' AND language_id = '" . (int) $order_info['language_id'] . "'");

        if ($order_status_query->num_rows) {
            $order_status = $order_status_query->row['name'];
        } else {
            $order_status = '';
        }

        $subject = sprintf($language->get('text_new_subject'), $order_info['store_name'], $order_id);

        // HTML Mail
        $data = array();

        $data['title'] = sprintf($language->get('text_new_subject'), html_entity_decode($order_info['store_name'], ENT_QUOTES, 'UTF-8'), $order_id);

        $data['text_greeting'] = sprintf($language->get('text_new_greeting'), html_entity_decode($order_info['store_name'], ENT_QUOTES, 'UTF-8'));
        $data['text_link'] = $language->get('text_new_link');
        $data['text_download'] = $language->get('text_new_download');
        $data['text_order_detail'] = $language->get('text_new_order_detail');
        $data['text_instruction'] = $language->get('text_new_instruction');
        $data['text_order_id'] = $language->get('text_new_order_id');
        $data['text_date_added'] = $language->get('text_new_date_added');
        $data['text_payment_method'] = $language->get('text_new_payment_method');
        $data['text_shipping_method'] = $language->get('text_new_shipping_method');
        $data['text_email'] = $language->get('text_new_email');
        $data['text_telephone'] = $language->get('text_new_telephone');
        $data['text_ip'] = $language->get('text_new_ip');
        $data['text_order_status'] = $language->get('text_new_order_status');
        $data['text_payment_address'] = $language->get('text_new_payment_address');
        $data['text_shipping_address'] = $language->get('text_new_shipping_address');
        $data['text_product'] = $language->get('text_new_product');
        $data['text_model'] = $language->get('text_new_model');
        $data['text_quantity'] = $language->get('text_new_quantity');
        $data['text_price'] = $language->get('text_new_price');
        $data['text_total'] = $language->get('text_new_total');
        $data['text_footer'] = $language->get('text_new_footer');

        $data['logo'] = $this->config->get('config_url') . 'image/' . $this->config->get('config_logo');
        $data['store_name'] = $order_info['store_name'];
        $data['store_url'] = $order_info['store_url'];
        $data['customer_id'] = $order_info['customer_id'];
        $data['link'] = $order_info['store_url'] . 'index.php?route=account/order/info&order_id=' . $order_id;

        if ($download_status) {
            $data['download'] = $order_info['store_url'] . 'index.php?route=account/download';
        } else {
            $data['download'] = '';
        }

        $data['order_id'] = $order_id;
        $data['date_added'] = date($language->get('date_format_short'), strtotime($order_info['date_added']));
        $data['payment_method'] = $order_info['payment_method'];
        $data['shipping_method'] = $order_info['shipping_method'];
        $data['email'] = $order_info['email'];
        $data['telephone'] = $order_info['telephone'];
        $data['ip'] = $order_info['ip'];
        $data['order_status'] = $order_status;
        $data['comment'] = '';

        if ($order_info['payment_address_format']) {
            $format = $order_info['payment_address_format'];
        } else {
            $format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
        }

        $find = array(
            '{firstname}',
            '{lastname}',
            '{company}',
            '{address_1}',
            '{address_2}',
            '{city}',
            '{postcode}',
            '{zone}',
            '{zone_code}',
            '{country}'
        );

        $replace = array(
            'firstname' => $order_info['payment_firstname'],
            'lastname' => $order_info['payment_lastname'],
            'company' => $order_info['payment_company'],
            'address_1' => $order_info['payment_address_1'],
            'address_2' => $order_info['payment_address_2'],
            'city' => $order_info['payment_city'],
            'postcode' => $order_info['payment_postcode'],
            'zone' => $order_info['payment_zone'],
            'zone_code' => $order_info['payment_zone_code'],
            'country' => $order_info['payment_country']
        );

        $data['payment_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

        if ($order_info['shipping_address_format']) {
            $format = $order_info['shipping_address_format'];
        } else {
            $format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
        }

        $find = array(
            '{firstname}',
            '{lastname}',
            '{company}',
            '{address_1}',
            '{address_2}',
            '{city}',
            '{postcode}',
            '{zone}',
            '{zone_code}',
            '{country}'
        );

        $replace = array(
            'firstname' => $order_info['shipping_firstname'],
            'lastname' => $order_info['shipping_lastname'],
            'company' => $order_info['shipping_company'],
            'address_1' => $order_info['shipping_address_1'],
            'address_2' => $order_info['shipping_address_2'],
            'city' => $order_info['shipping_city'],
            'postcode' => $order_info['shipping_postcode'],
            'zone' => $order_info['shipping_zone'],
            'zone_code' => $order_info['shipping_zone_code'],
            'country' => $order_info['shipping_country']
        );

        $data['shipping_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

        $this->load->model('tool/upload');

        // Products
        $data['products'] = array();

        foreach ($order_product_query->rows as $product) {
            $option_data = array();

            $order_option_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_option WHERE order_id = '" . (int) $order_id . "' AND order_product_id = '" . (int) $product['order_product_id'] . "'");

            foreach ($order_option_query->rows as $option) {
                if ($option['type'] != 'file') {
                    $value = $option['value'];
                } else {
                    $upload_info = $this->model_tool_upload->getUploadByCode($option['value']);

                    if ($upload_info) {
                        $value = $upload_info['name'];
                    } else {
                        $value = '';
                    }
                }

                $option_data[] = array(
                    'name' => $option['name'],
                    'value' => (utf8_strlen($value) > 20 ? utf8_substr($value, 0, 20) . '..' : $value)
                );
            }

            $data['products'][] = array(
                'name' => $product['name'],
                'model' => $product['model'],
                'option' => $option_data,
                'quantity' => $product['quantity'],
                'price' => $this->currency->format($product['price'] + ($this->config->get('config_tax') ? $product['tax'] : 0), $order_info['currency_code'], $order_info['currency_value']),
                'total' => $this->currency->format($product['total'] + ($this->config->get('config_tax') ? ($product['tax'] * $product['quantity']) : 0), $order_info['currency_code'], $order_info['currency_value'])
            );
        }

        // Vouchers
        $data['vouchers'] = array();

        $order_voucher_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_voucher WHERE order_id = '" . (int) $order_id . "'");

        foreach ($order_voucher_query->rows as $voucher) {
            $data['vouchers'][] = array(
                'description' => $voucher['description'],
                'amount' => $this->currency->format($voucher['amount'], $order_info['currency_code'], $order_info['currency_value']),
            );
        }

        // Order Totals
        $order_total_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "order_total` WHERE order_id = '" . (int) $order_id . "' ORDER BY sort_order ASC");

        foreach ($order_total_query->rows as $total) {
            $data['totals'][] = array(
                'title' => $total['title'],
                'text' => $this->currency->format($total['value'], $order_info['currency_code'], $order_info['currency_value']),
            );
        }

        $html = $this->load->view('mail/order_add', $data);
        
        // Text Mail
        $text = sprintf($language->get('text_new_greeting'), html_entity_decode($order_info['store_name'], ENT_QUOTES, 'UTF-8')) . "\n\n";
        $text .= $language->get('text_new_order_id') . ' ' . $order_id . "\n";
        $text .= $language->get('text_new_date_added') . ' ' . date($language->get('date_format_short'), strtotime($order_info['date_added'])) . "\n";
        $text .= $language->get('text_new_order_status') . ' ' . $order_status . "\n\n";

        // Products
        $text .= $language->get('text_new_products') . "\n";

        foreach ($order_product_query->rows as $product) {
            $text .= $product['quantity'] . 'x ' . $product['name'] . ' (' . $product['model'] . ') ' . html_entity_decode($this->currency->format($product['total'] + ($this->config->get('config_tax') ? ($product['tax'] * $product['quantity']) : 0), $order_info['currency_code'], $order_info['currency_value']), ENT_NOQUOTES, 'UTF-8') . "\n";

            $order_option_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_option WHERE order_id = '" . (int) $order_id . "' AND order_product_id = '" . $product['order_product_id'] . "'");

            foreach ($order_option_query->rows as $option) {
                if ($option['type'] != 'file') {
                    $value = $option['value'];
                } else {
                    $upload_info = $this->model_tool_upload->getUploadByCode($option['value']);

                    if ($upload_info) {
                        $value = $upload_info['name'];
                    } else {
                        $value = '';
                    }
                }

                $text .= chr(9) . '-' . $option['name'] . ' ' . (utf8_strlen($value) > 20 ? utf8_substr($value, 0, 20) . '..' : $value) . "\n";
            }
        }

        foreach ($order_voucher_query->rows as $voucher) {
            $text .= '1x ' . $voucher['description'] . ' ' . $this->currency->format($voucher['amount'], $order_info['currency_code'], $order_info['currency_value']);
        }

        $text .= "\n";

        $text .= $language->get('text_new_order_total') . "\n";

        foreach ($order_total_query->rows as $total) {
            $text .= $total['title'] . ': ' . html_entity_decode($this->currency->format($total['value'], $order_info['currency_code'], $order_info['currency_value']), ENT_NOQUOTES, 'UTF-8') . "\n";
        }

        $text .= "\n";

        if ($order_info['customer_id']) {
            $text .= $language->get('text_new_link') . "\n";
            $text .= $order_info['store_url'] . 'index.php?route=account/order/info&order_id=' . $order_id . "\n\n";
        }

        if ($download_status) {
            $text .= $language->get('text_new_download') . "\n";
            $text .= $order_info['store_url'] . 'index.php?route=account/download' . "\n\n";
        }

        // Comment
        if ($order_info['comment']) {
            $text .= $language->get('text_new_comment') . "\n\n";
            $text .= $order_info['comment'] . "\n\n";
        }

        $text .= $language->get('text_new_footer') . "\n\n";

        if(!empty($order_info['email'])){
            $mail = new Mail();
            $mail->protocol = $this->config->get('config_mail_protocol');
            $mail->parameter = $this->config->get('config_mail_parameter');
            $mail->smtp_hostname = $this->config->get('config_mail_smtp_host');
            $mail->smtp_username = $this->config->get('config_mail_smtp_username');
            $mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
            $mail->smtp_port = $this->config->get('config_mail_smtp_port');
            $mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

            $mail->setTo($order_info['email']);
            $mail->setFrom($this->config->get('config_email'));
            $mail->setSender($order_info['store_name']);
            $mail->setSubject($subject);
            $mail->setHtml($html);
            $mail->setText($text);
            $mail->send();
        }

        // Admin Alert Mail
        if ($this->config->get('config_order_mail') || ($this->config->get('config_mail_alert') && in_array('order', (array)$this->config->get('config_mail_alert')))) {
            $subject = sprintf($language->get('text_new_subject'), html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'), $order_id);

            // HTML Mail
            $data['text_greeting'] = $language->get('text_new_received');

            if ($order_info['comment']) {
                $data['comment'] = $order_info['comment'];
            } else {
                $data['comment'] = '';
            }

            $data['text_download'] = '';

            $data['text_footer'] = '';

            $data['text_link'] = '';
            $data['link'] = '';
            $data['download'] = '';

            
            $html = $this->load->view('mail/order_add', $data);

            // Text
            $text = $language->get('text_new_received') . "\n\n";
            $text .= $language->get('text_new_order_id') . ' ' . $order_id . "\n";
            $text .= $language->get('text_new_date_added') . ' ' . date($language->get('date_format_short'), strtotime($order_info['date_added'])) . "\n";
            $text .= $language->get('text_new_order_status') . ' ' . $order_status . "\n\n";
            $text .= $language->get('text_new_products') . "\n";

            foreach ($order_product_query->rows as $product) {
                $text .= $product['quantity'] . 'x ' . $product['name'] . ' (' . $product['model'] . ') ' . html_entity_decode($this->currency->format($product['total'] + ($this->config->get('config_tax') ? ($product['tax'] * $product['quantity']) : 0), $order_info['currency_code'], $order_info['currency_value']), ENT_NOQUOTES, 'UTF-8') . "\n";

                $order_option_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_option WHERE order_id = '" . (int) $order_id . "' AND order_product_id = '" . $product['order_product_id'] . "'");

                foreach ($order_option_query->rows as $option) {
                    if ($option['type'] != 'file') {
                        $value = $option['value'];
                    } else {
                        $value = utf8_substr($option['value'], 0, utf8_strrpos($option['value'], '.'));
                    }

                    $text .= chr(9) . '-' . $option['name'] . ' ' . (utf8_strlen($value) > 20 ? utf8_substr($value, 0, 20) . '..' : $value) . "\n";
                }
            }

            foreach ($order_voucher_query->rows as $voucher) {
                $text .= '1x ' . $voucher['description'] . ' ' . $this->currency->format($voucher['amount'], $order_info['currency_code'], $order_info['currency_value']);
            }

            $text .= "\n";

            $text .= $language->get('text_new_order_total') . "\n";

            foreach ($order_total_query->rows as $total) {
                $text .= $total['title'] . ': ' . html_entity_decode($this->currency->format($total['value'], $order_info['currency_code'], $order_info['currency_value']), ENT_NOQUOTES, 'UTF-8') . "\n";
            }

            $text .= "\n";

            if ($order_info['comment']) {
                $text .= $language->get('text_new_comment') . "\n\n";
                $text .= $order_info['comment'] . "\n\n";
            }

            $mail = new Mail();
            $mail->protocol = $this->config->get('config_mail_protocol');
            $mail->parameter = $this->config->get('config_mail_parameter');
            $mail->smtp_hostname = $this->config->get('config_mail_smtp_host');
            $mail->smtp_username = $this->config->get('config_mail_smtp_username');
            $mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
            $mail->smtp_port = $this->config->get('config_mail_smtp_port');
            $mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

            $mail->setTo($this->config->get('config_email'));
            $mail->setFrom($this->config->get('config_email'));
            $mail->setReplyTo($order_info['email']);
            $mail->setSender($order_info['store_name']);
            $mail->setSubject($subject);
            $mail->setHtml($html);
            $mail->setText($text);
            $mail->send();

            // Send to additional alert emails
            if (version_compare(preg_replace("/[^\d.]/","",VERSION), '2.3.0.0', '<')) {
                $emails = explode(',', $this->config->get('config_mail_alert'));
            }else{
                $emails = explode(',', $this->config->get('config_mail_alert_email'));
            }

            foreach ($emails as $email) {
                if ($email && preg_match('/^[^\@]+@.*.[a-z]{2,15}$/i', $email)) {
                    $mail->setTo($email);
                    $mail->send();
                }
            }
        }
    }

}

?>