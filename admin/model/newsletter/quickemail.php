<?php
require(DIR_SYSTEM . 'library/cinewsletter_sendgrid/sendgrid-php.php');

class ModelNewsletterQuickemail extends Model {
	public function SendQuickEmail($data = array()) {
		if($this->config->get('cimailsetting_api')) {
			$cimailsetting_api = $this->config->get('cimailsetting_api');
		} else {
			$cimailsetting_api = '';
		}

		$this->load->model('newsletter/citemplate');

		$this->load->model('marketing/coupon');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');


		$subscribers = $this->getSubscribers($data);
		foreach($subscribers as $subscriber_info) {

			$citemplate_info = $this->model_newsletter_citemplate->getCitemplatefull($data['citemplate_id']);
			if($citemplate_info) {
				$coupon_info = $this->model_marketing_coupon->getCoupon($citemplate_info['coupon_id']);

				$this->load->model('setting/setting');
				$store_info = $this->model_setting_setting->getSetting('config', $subscriber_info['store_id']);

				if(!isset($store_info['config_url'])) {
					$store_info['config_url'] = HTTP_CATALOG;
				}

				if(!isset($store_info['config_ssl'])) {
					$store_info['config_ssl'] = HTTPS_CATALOG;
				}

				$catalogurl = new Url($store_info['config_url'], $store_info['config_ssl']);
				$catalog_url = $this->request->server['HTTPS'] ? $store_info['config_ssl'] : $store_info['config_url'];
				if (is_file(DIR_IMAGE . $store_info['config_logo'])) {
					$logo = $catalog_url . 'image/' . $store_info['config_logo'];
				} else {
					$logo = '';
				}

				$home_href = $catalog_url;

				$citemplate_products = $this->model_newsletter_citemplate->getCitemplateProducts($citemplate_info['citemplate_id']);

				$html_data['products'] = array();

				$width = (!empty($citemplate_info['image_width'])) ? $citemplate_info['image_width'] : 200;
				$height = (!empty($citemplate_info['image_height'])) ? $citemplate_info['image_height'] : 200;
				$html_data['display_price'] = (!empty($citemplate_info['display_price'])) ? $citemplate_info['display_price'] : '';

				foreach($citemplate_products as $product_id) {
					$product_info = $this->model_catalog_product->getProduct($product_id);
					if($product_info) {
						if ($product_info['image']) {
							$thumb = $this->model_tool_image->resize($product_info['image'], $width, $height);
						} else {
							$thumb = $this->model_tool_image->resize('placeholder.png',$width, $height);
						}
					}

					/*if(VERSION > '2.2.0.0') {
						$p_url = $catalogurl->link('product/product', 'product_id='. $product_info['product_id'], true);
					} else {
						$p_url = $catalog_url .'index.php?route=product/product&product_id='. $product_info['product_id'];
					}*/

					$p_url = $catalog_url .'index.php?route=product/product&product_id='. $product_info['product_id'];

					$html_data['products'][] = array(
						'product_id' 	=> $product_info['product_id'],
						'name'		 	=> str_replace('&quot;', '', $product_info['name']),
						'price'		 	=> $this->currency->format($product_info['price'], $this->config->get('config_currency')),
						'thumb'		 	=> $thumb,
						'thumb'		 	=> str_replace(' ', '%20', $thumb),
						'href'		 	=> $p_url,
					);
				}

				$product_html = $this->load->view('newsletter/custom_products', $html_data);

				$find = array(
					'{LOGO}',
					'{STORE_NAME}',
					'{STORE_LINK}',
					'{NAME}',
					'{EMAIL}',
					'{CONFIRMATION_LINK}',
					'{UNSUBSCRIBE_LINK}',
					'{PRODUCTS}',
					'{COUPON_CODE}',
				);

				$replace = array(
					'LOGO'					=> '<img src="'. $logo .'" alt="'. $store_info['config_name'] .'" title="'. $store_info['config_name'] .'" />',
					'STORE_NAME'			=> $store_info['config_name'],
					'STORE_LINK'				=> $catalog_url,
					'NAME'					=> $subscriber_info['name'],
					'EMAIL'					=> $subscriber_info['email'],
					'CONFIRMATION_LINK'		=> $catalog_url .'index.php?route=newsletter/cinewsletter/verify&key='. $subscriber_info['token_id'],
					'UNSUBSCRIBE_LINK'		=> $catalog_url .'index.php?route=newsletter/cinewsletter/unsubscribe&key='. $subscriber_info['token_id'],
					'PRODUCTS'				=> $product_html,
					'COUPON_CODE'			=> ($coupon_info) ? $coupon_info['code'] : '',
				);

				$subject = str_replace($find, $replace, $citemplate_info['title']);

				$message = str_replace($find, $replace, $citemplate_info['description']);

				$data['title'] = html_entity_decode($subject, ENT_QUOTES, 'UTF-8');
				$data['description'] = html_entity_decode($message, ENT_QUOTES, 'UTF-8');

				$product_html = $this->load->view('newsletter/email', $data);

				$cimailsetting_server = ($this->config->get('cimailsetting_server') ? $this->config->get('cimailsetting_server') : 'DEFAULT');

				if($cimailsetting_server == 'DEFAULT') {
					$mail = new Mail($this->config->get('config_mail_engine'));
					$mail->parameter = $this->config->get('config_mail_parameter');
					$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
					$mail->smtp_username = $this->config->get('config_mail_smtp_username');
					$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
					$mail->smtp_port = $this->config->get('config_mail_smtp_port');
					$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

					$mail->setTo($subscriber_info['email']);
					$mail->setFrom($store_info['config_email']);
					$mail->setReplyTo($store_info['config_email']);
					$mail->setSender(html_entity_decode($store_info['config_name'], ENT_QUOTES, 'UTF-8'));
					$mail->setSubject(html_entity_decode($subject, ENT_QUOTES, 'UTF-8'));
					$mail->setHtml($product_html);
					$mail->send();
				}

				if($cimailsetting_server == 'SENDGRID') {
					$mail = new \SendGrid\Mail\Mail();
					$mail->setFrom($store_info['config_email'], html_entity_decode($store_info['config_name'], ENT_QUOTES, 'UTF-8'));
					$mail->setSubject(html_entity_decode($subject, ENT_QUOTES, 'UTF-8'));
					$mail->addTo($subscriber_info['email'], $subscriber_info['name']);
					$mail->addContent("text/html", $product_html);

					$sendgrid = new \SendGrid($cimailsetting_api);
					$response = $sendgrid->send($mail);

					$this->log->write($response->statusCode() .' - Newsletter - '. $subscriber_info['email']);
				    $this->log->write($response->headers());
				    /* $this->log->write($response->body() . "\n"); */

				}
			}
		}
	}

	public function getSubscribers($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "cinewsletter WHERE newsletter_id > 0";

		$implode = array();

		if (isset($data['account_type']) && $data['account_type'] != '*') {
			$implode[] = "account_register = '" . (int)$data['account_type'] . "'";
		}

		if (isset($data['newsletter_status']) && $data['newsletter_status'] != '*') {
			if($data['newsletter_status'] == 'custom') {
				if(!empty($data['custom_subscribers'])) {
					$custom_newsletter_ids = array();
					foreach ($data['custom_subscribers'] as $newsletter_id) {
						$custom_newsletter_ids[] = (int)$newsletter_id;
					}

					$implode [] = "newsletter_id IN (" . implode(',', $custom_newsletter_ids) . ")";
				}
			} else {
				$implode[] = "status = '" . (int)$data['newsletter_status'] . "'";
			}
		}

		if (isset($data['store_id']) && $data['store_id'] != '*') {
			$implode[] = "store_id = '" . (int)$data['store_id'] . "'";
		}

		if ($implode) {
			$sql .= " AND " . implode(" AND ", $implode);
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}
}