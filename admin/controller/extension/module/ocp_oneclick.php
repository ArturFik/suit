<?php
/**
 * @package     OpenCart\One Click Checkout
 * @author      OCProfi <ocprofi@gmail.com>
 * @copyright   Copyright © 2018, OCProfi.com
 * @license http://ocprofi.com/eula/
 */

class ControllerExtensionModuleOCPOneclick extends Controller {
    private $error = array();

    public function index() {
        $this->load->model('setting/store');
        $this->load->model('setting/setting');
        $this->load->model('localisation/language');
        $this->load->model('localisation/order_status');
        $this->load->model('catalog/option');
        $this->load->model('catalog/information');
        $this->load->model('customer/customer_group');
        
        $data = array();
        $data = array_merge($data, $this->language->load('extension/module/ocp_oneclick'));
        
        $this->document->setTitle($this->language->get('heading_name'));

        $this->document->addScript('view/javascript/ocp_oneclick/jquery.minicolors.min.js');
        $this->document->addStyle('view/stylesheet/ocp_oneclick/stylesheet.css');
        $this->document->addStyle('view/stylesheet/ocp_oneclick/jquery.minicolors.css');        

        if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->validate()) {
            $this->session->data['success'] = $this->language->get('text_success');
            $this->model_setting_setting->editSetting('ocp_oneclick', $this->request->post);
            $this->response->redirect($this->url->link('extension/module/ocp_oneclick', 'user_token=' . $this->session->data['user_token'], 'SSL'));
        }

        $data['error_warning'] = isset($this->error['warning']) ? $this->error['warning'] : '';
        $data['error_product_element'] = isset($this->error['product_element']) ? $this->error['product_element'] : '';
        $data['error_main_image_width'] = isset($this->error['main_image_width']) ? $this->error['main_image_width'] : '';
        $data['error_main_image_height'] = isset($this->error['main_image_height']) ? $this->error['main_image_height'] : '';
        $data['error_count_sub_images'] = isset($this->error['count_sub_images']) ? $this->error['count_sub_images'] : '';
        $data['error_sub_images_width'] = isset($this->error['sub_images_width']) ? $this->error['sub_images_width'] : '';
        $data['error_sub_images_height'] = isset($this->error['sub_images_height']) ? $this->error['sub_images_height'] : '';


        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];

            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        $data['breadcrumbs'] = array();
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home', 'user_token=' . $this->session->data['user_token'], 'SSL'),
            'separator' => false
        );
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_module'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true),
            'separator' => ' :: '
        );
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_name'),
            'href' => $this->url->link('extendion/module/ocp_oneclick', 'user_token=' . $this->session->data['user_token'], true),
            'separator' => ' :: '
        );

        $data['action'] = $this->url->link('extension/module/ocp_oneclick', 'user_token=' . $this->session->data['user_token'], 'SSL');
        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        $data['localisation'] = isset($this->request->post['ocp_oneclick_localisation']) ? $this->request->post['ocp_oneclick_localisation'] : $this->config->get('ocp_oneclick_localisation');
        $data['fields'] = isset($this->request->post['ocp_oneclick_fields']) ? $this->request->post['ocp_oneclick_fields'] : $this->config->get('ocp_oneclick_fields');
        $data['settings'] = isset($this->request->post['ocp_oneclick_settings']) ? $this->request->post['ocp_oneclick_settings'] : $this->config->get('ocp_oneclick_settings');
        $data['list_btns'] = isset($this->request->post['ocp_oneclick_list_btns']) ? $this->request->post['ocp_oneclick_list_btns'] : $this->config->get('ocp_oneclick_list_btns');
        if(!is_array($data['list_btns'])){
            $data['list_btns'] = array();
        }

        $fields_list = array('firstname', 'lastname', 'telephone', 'email', 'address_1', 'comment');
        $data['fields_list'] = array();
        foreach($fields_list as $field){
            $data['fields_list'][$field] = array(
                'title' => $data['entry_' . $field . '_field'],
            );
        }

        $data['informations'] = array();

        foreach ($this->model_catalog_information->getInformations() as $info) {
            $data['informations'][] = array(
                'information_id' => $info['information_id'],
                'name'      => $info['title']
            );
        }

        $data['order_statuses'] = array();

        foreach ($this->model_localisation_order_status->getOrderStatuses() as $status) {
            $data['order_statuses'][] = array(
                'status_id' => $status['order_status_id'],
                'name'      => $status['name']
            );
        }


        $data['product_options'] = array();

        foreach($this->model_catalog_option->getOptions() as $product_option){
            if($product_option['type'] !== 'file') {
                $data['product_options'][] = array(
                    'option_id'  => $product_option['option_id'],
                    'name'       => $product_option['name']
                );
            }
        }

        $data['customer_groups'] = array();

        if (version_compare(preg_replace("/[^\d.]/","",VERSION), '2.1.0.0', '>=')) {
            $customer_groups = $this->model_customer_customer_group->getCustomerGroups();
        }else{
            $customer_groups = $this->model_sale_customer_group->getCustomerGroups();
        }

        foreach($customer_groups as $customer_group){
            $data['customer_groups'][] = array(
                'customer_group_id'  => $customer_group['customer_group_id'],
                'name'       => $customer_group['name']
            );
        }

        $data['stores'] = array();

        foreach($this->model_setting_store->getStores() as $store){
            $data['stores'][] = array(
                'store_id'  => $store['store_id'],
                'name'       => $store['name']
            );
        }

        $data['languages'] = array();
        $languages = $this->model_localisation_language->getLanguages();
        foreach($languages as $language){
            $data['languages'][] = array(
                'language_id' => $language['language_id'],
                'code' => $language['code'],
                'name' => $language['name'],
                'image' => 'language/'.$language['code'].'/'.$language['code'].'.png',
            );
        }

        $data['row'] = count($data['list_btns']) + 1;

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/ocp_oneclick', $data));
    }

    public function install() {
        $this->load->model('setting/setting');
        $this->load->model('setting/extension');
        $this->load->model('user/user_group');


        $this->model_user_user_group->addPermission($this->user->getId(), 'access', 'extension/module/ocp_oneclick');
        $this->model_user_user_group->addPermission($this->user->getId(), 'modify', 'extension/module/ocp_oneclick');

        $this->model_setting_setting->editSetting('ocp_oneclick', array(
            'ocp_oneclick_settings' => array(
                'status' => 1,
                'show_in_cat' => 1,
                'list_selector' => 'cart.add',
                'show_in_prod' => 1,
                'show_description' => 1,
                'show_images' => 1,
                'show_qty' => 1,
                'show_options' => 1,
                'stock_checkout' => 1,
                'telephone_mask' => '',
                'agree' => 0,
                'agree_type' => 0,
                'product_element' => '#button-cart',
                'product_position' => 1,
                'product_btn_block_class' => 'ocpoc-product-btn',
                'product_btn_block_css' => '',
                'product_btn_class' => 'btn btn-primary btn-block btn-lg prod-btn-ocpoc',
                'product_btn_css' => '',
                'wrapper_bg' => '#000000',
                'wrapper_opacity' => '0.8',
                'head_footer_bg' => '#eeeeee',
                'form_bg' => '#ffffff',
                'checkout_button_bg' => '#5bb75b',
                'checkout_button_bg_hover' => '#449d44',
                'checkout_button_color' => '#ffffff',
                'close_button_bg' => '#da4f49',
                'close_button_bg_hover' => '#c9302c',
                'close_button_color' => '#ffffff',
                'heading_font_color' => '#000000',
                'body_font_color' => '#000000',
                'main_image_width' => '280',
                'main_image_height' => '280',
                'count_sub_images' => '4',
                'sub_images_width' => '40',
                'sub_images_height' => '40',
                'order_status_id' => '2',
                'product_options_allowed' => array(),
                'show_field_title' => 0,
                'window_design' => 0,
                'btn_in_footer' => 0,
            ),
            'ocp_oneclick_fields' => array(
                'firstname' => array(
                    'status' => 1,
                    'required' => 1
                ),

                'ru' => array(
                    'firstname_title' => 'Имя, Фамилия',
                    'firstname_placeholder' => 'Имя, Фамилия',
                    'lastname_title' => 'Фамилия',
                    'lastname_placeholder' => 'Фамилия',
                    'telephone_title' => 'Телефон',
                    'telephone_placeholder' => 'Телефон',
                    'email_title' => 'E-mail',
                    'email_placeholder' => 'E-mail',
                    'address_1_title' => 'Адрес',
                    'address_1_placeholder' => 'Адрес',
                    'comment_title' => 'Комментарий',
                    'comment_placeholder' => 'Комментарий'
                ),

                'ru-ru' => array(
                    'firstname_title' => 'Имя, Фамилия',
                    'firstname_placeholder' => 'Имя, Фамилия',
                    'lastname_title' => 'Фамилия',
                    'lastname_placeholder' => 'Фамилия',
                    'telephone_title' => 'Телефон',
                    'telephone_placeholder' => 'Телефон',
                    'email_title' => 'E-mail',
                    'email_placeholder' => 'E-mail',
                    'address_1_title' => 'Адрес',
                    'address_1_placeholder' => 'Адрес',
                    'comment_title' => 'Комментарий',
                    'comment_placeholder' => 'Комментарий'
                ),

                'en' => array(
                    'firstname_title' => 'Firstname',
                    'firstname_placeholder' => 'Firstname',
                    'lastname_title' => 'Lastname',
                    'lastname_placeholder' => 'Lastname',
                    'telephone_title' => 'Telephone',
                    'telephone_placeholder' => 'Telephone',
                    'email_title' => 'E-mail',
                    'email_placeholder' => 'E-mail',
                    'address_1_title' => 'Address',
                    'address_1_placeholder' => 'Address',
                    'comment_title' => 'Comment',
                    'comment_placeholder' => 'Comment'
                ),

                'en-gb' => array(
                    'firstname_title' => 'Firstname',
                    'firstname_placeholder' => 'Firstname',
                    'lastname_title' => 'Lastname',
                    'lastname_placeholder' => 'Lastname',
                    'telephone_title' => 'Telephone',
                    'telephone_placeholder' => 'Telephone',
                    'email_title' => 'E-mail',
                    'email_placeholder' => 'E-mail',
                    'address_1_title' => 'Address',
                    'address_1_placeholder' => 'Address',
                    'comment_title' => 'Comment',
                    'comment_placeholder' => 'Comment'
                ),

                'lastname' => array(
                    'status' => 0,
                    'required' => 0
                ),

                'telephone' => array(
                    'status' => 1,
                    'required' => 1
                ),

                'email' => array(
                    'status' => 1,
                    'required' => 0
                ),

                'address_1' => array(
                    'status' => 0,
                    'required' => 0
                ),

                'comment' => array(
                    'status' => 0,
                    'required' => 0
                )
            ),
            'ocp_oneclick_list_btns' => array(
                0 => array(
                    'list_btn_name' => 'Кнопка в категориях',
                    'list_product_block' => '.product-thumb',
                    'list_element' => '.button-group',
                    'list_position' => 1,
                    'list_btn_block_class' => 'btn-ocpoc-wrap',
                    'list_btn_block_css' => '',
                    'list_btn_class' => 'btn-ocpoc',
                    'list_btn_css' => '',
                ),
            ),
            'ocp_oneclick_localisation' => array(
                'ru' => array(
                    'heading' => 'Быстрый заказ',
                    'oc_button_text' => 'Купить в 1 клик',
                    'order_button_text' => 'Оформить заказ',
                    'order_button_text_loading' => 'Обработка данных...',
                    'close_button_text' => 'Закрыть',
                    'description_show_text' => 'описание →',
                    'no_in_stock_text' => 'нет в наличии',
                    'description_hide_text' => 'скрыть описание ↑',
                    'price_title' => 'цена',
                    'qty_title' => 'количество',
                    'total_title' => 'сумма',
                    'options_title' => 'Доступные варианты',
                    'form_title' => 'Заполните Ваши данные ↓',
                    'agree_text' => 'Я прочитал и согласен с <a href=\'%s\' target=\'_blank\'>%s</a>',
                    'agree_text_btn' => 'Нажимая на кнопку, вы соглашаетесь на обработку персональных данных в соответствии c: <a href=\'%s\' target=\'_blank\'>%s</a>',
                    'success_text' => 'Ваш номер заказа №{order_id}',
                ),
                'ru-ru' => array(
                    'heading' => 'Быстрый заказ',
                    'oc_button_text' => 'Купить в 1 клик',
                    'order_button_text' => 'Оформить заказ',
                    'order_button_text_loading' => 'Обработка данных...',
                    'close_button_text' => 'Закрыть',
                    'description_show_text' => 'описание →',
                    'no_in_stock_text' => 'нет в наличии',
                    'description_hide_text' => 'скрыть описание ↑',
                    'price_title' => 'цена',
                    'qty_title' => 'количество',
                    'total_title' => 'сумма',
                    'options_title' => 'Доступные варианты',
                    'form_title' => 'Заполните Ваши данные ↓',
                    'agree_text' => 'Я прочитал и согласен с <a href=\'%s\' target=\'_blank\'>%s</a>',
                    'agree_text_btn' => 'Нажимая на кнопку, вы соглашаетесь на обработку персональных данных в соответствии c: <a href=\'%s\' target=\'_blank\'>%s</a>',
                    'success_text' => 'Ваш номер заказа №{order_id}',
                ),
                'en' => array(
                    'heading' => 'Fast order',
                    'oc_button_text' => 'Buy on 1 click',
                    'order_button_text' => 'Order',
                    'order_button_text_loading' => 'Loading...',
                    'close_button_text' => 'Close',
                    'description_show_text' => 'description →',
                    'no_in_stock_text' => 'not in stock',
                    'description_hide_text' => 'hide description ↑',
                    'price_title' => 'price',
                    'qty_title' => 'qty.',
                    'total_title' => 'total',
                    'options_title' => 'Variants',
                    'form_title' => 'Fill this form ↓',
                    'agree_text' => 'I will read and agree with <a href=\'%s\'>%s</a>',
                    'agree_text_btn' => 'By clicking on the button, you agree to the processing of personal data in accordance with: <a href=\'%s\' target=\'_blank\'>%s</a>',
                    'success_text' => 'Your order number is #{order_id}',
                ),
                'en-gb' => array(
                    'heading' => 'Fast order',
                    'oc_button_text' => 'Buy on 1 click',
                    'order_button_text' => 'Order',
                    'order_button_text_loading' => 'Loading...',
                    'close_button_text' => 'Close',
                    'description_show_text' => 'description →',
                    'no_in_stock_text' => 'not in stock',
                    'description_hide_text' => 'hide description ↑',
                    'price_title' => 'price',
                    'qty_title' => 'qty.',
                    'total_title' => 'total',
                    'options_title' => 'Variants',
                    'form_title' => 'Fill this form ↓',
                    'agree_text' => 'I will read and agree with <a href=\'%s\'>%s</a>',
                    'agree_text_btn' => 'By clicking on the button, you agree to the processing of personal data in accordance with: <a href=\'%s\' target=\'_blank\'>%s</a>',
                    'success_text' => 'Your order number is #{order_id}',
                )
            )
        ));

        if (!in_array('ocp_oneclick', $this->model_setting_extension->getInstalled('module'))) {
            $this->model_setting_extension->install('module', 'ocp_oneclick');
        }

        $lang = $this->language->load('extension/module/ocp_oneclick');

        $this->session->data['success'] = $lang['text_success_install'];
    }

    public function uninstall() {
        $this->load->model('setting/setting');
        $this->load->model('setting/extension');

        $this->model_setting_extension->uninstall('module', 'ocp_oneclick');
        $this->model_setting_setting->deleteSetting('ocp_oneclick');
    }

    private function validate() {
        $this->load->model('localisation/language');

        $text_form = $this->language->load('extension/module/ocp_oneclick');

        if (!$this->user->hasPermission('modify', 'extension/module/ocp_oneclick')) {
            $this->error['warning'] = $text_form['error_permission'];
        }

        if(empty($this->request->post['ocp_oneclick_settings']['main_image_width'])){
            $this->error['main_image_width'] = $this->language->get('error_main_image_width');
        }
        if(empty($this->request->post['ocp_oneclick_settings']['main_image_height'])){
            $this->error['main_image_height'] = $this->language->get('error_main_image_height');
        }
        if(empty($this->request->post['ocp_oneclick_settings']['count_sub_images'])){
            $this->error['count_sub_images'] = $this->language->get('error_count_sub_images');
        }
        if(empty($this->request->post['ocp_oneclick_settings']['sub_images_width'])){
            $this->error['sub_images_width'] = $this->language->get('error_sub_images_width');
        }
        if(empty($this->request->post['ocp_oneclick_settings']['sub_images_height'])){
            $this->error['sub_images_height'] = $this->language->get('error_sub_images_height');
        }
        if(!isset($this->error['warning']) && $this->error){
            $this->error['warning'] = $this->language->get('error_check_fields_list');
        }

        return (!$this->error) ? true : false;
    }

}

?>