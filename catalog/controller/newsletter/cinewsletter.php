<?php 
class ControllerNewslettercinewsletter extends Controller {
	public function verify() {
		if (!$this->config->get('module_cinewsletter_status')) {
			
			$this->response->redirect($this->url->link('common/home', '', true));
		}

		$this->load->language('newsletter/cinewsletter');
		
		$this->load->model('newsletter/cinewsletter');

		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		if($this->config->get('module_cinewsletter_verify_message')) {
			$cinewsletter_verify_message = $this->config->get('module_cinewsletter_verify_message');
		} else{
			$cinewsletter_verify_message = array();
		}


		if (isset($this->request->get['key'])) {
			$data['key'] = $this->request->get['key'];
		} else {
			$data['key'] = '';
		}

		$newsletter_info = $this->model_newsletter_cinewsletter->getNewsletterByToken($data['key']);

		$data['text_not_found'] = '';
		$data['text_message'] = '';
		if(isset($newsletter_info['status']) && $newsletter_info['status']  == '0' && $data['key']) {
			$text_message = (!empty($cinewsletter_verify_message[$this->config->get('config_language_id')]['description'])) ? html_entity_decode($cinewsletter_verify_message[$this->config->get('config_language_id')]['description'], ENT_QUOTES, 'UTF-8') : '';

			if($text_message == '' || $text_message == '<p><br></p>' || $text_message == '<br>') {
				$data['text_message'] = $this->language->get('text_verify_message');
			} else {
				$data['text_message'] = $text_message;
			}

			$data['permission_status'] = true;
		} else{
			$text_not_found = (!empty($cinewsletter_verify_message[$this->config->get('config_language_id')]['invalid_lang'])) ? html_entity_decode($cinewsletter_verify_message[$this->config->get('config_language_id')]['invalid_lang'], ENT_QUOTES, 'UTF-8') : '';

			if($text_not_found == '' || $text_not_found == '<p><br></p>' || $text_not_found == '<br>') {
				$data['text_not_found'] = $this->language->get('text_verify_notfound');
			} else {
				$data['text_not_found'] = $text_not_found;
			}

			$data['permission_status'] = false;
		}
		

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}		
		
		$heading_verify = (!empty($cinewsletter_verify_message[$this->config->get('config_language_id')]['title'])) ? html_entity_decode($cinewsletter_verify_message[$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8') : '';

		if($heading_verify == '' || $heading_verify == '<p><br></p>' || $heading_verify == '<br>') {
			$data['heading_verify'] = sprintf( $this->language->get('heading_verify') , $this->config->get('config_name') );
		} else {
			$data['heading_verify'] = $heading_verify;
		}

		$data['confirm_button'] = (!empty($cinewsletter_verify_message[$this->config->get('config_language_id')]['confirm_button'])) ? $cinewsletter_verify_message[$this->config->get('config_language_id')]['confirm_button'] : $this->language->get('confirm_button');

		$data['decline_button'] = (!empty($cinewsletter_verify_message[$this->config->get('config_language_id')]['decline_button'])) ? $cinewsletter_verify_message[$this->config->get('config_language_id')]['decline_button'] : $this->language->get('decline_button');
		
		$data['display_title'] = $this->config->get('module_cinewsletter_verify_display_title');
		$data['display_description'] = $this->config->get('module_cinewsletter_verify_display_description');
		$data['display_logo'] = $this->config->get('module_cinewsletter_verify_display_logo');
		$data['display_decline'] = $this->config->get('module_cinewsletter_verify_display_decline');

		
		$data['name'] = $this->config->get('config_name');
		$data['home'] = $this->url->link('common/home');		

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		
		if(VERSION < '2.2.0.0') {
			if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/newsletter/verify.tpl')) {
				$this->response->setOutput($this->load->view($this->config->get('config_template') . '/template/newsletter/verify.tpl', $data));
			} else{
				$this->response->setOutput($this->load->view('default/template/newsletter/verify.tpl', $data));
			}
		} else {
			$this->response->setOutput($this->load->view('newsletter/verify', $data));
		}
	}

	public function unsubscribe() {
		if (!$this->config->get('module_cinewsletter_status')) {
			
			$this->response->redirect($this->url->link('common/home', '', true));
		}
		
		$this->load->language('newsletter/cinewsletter');
		
		$this->load->model('newsletter/cinewsletter');

		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		if($this->config->get('module_cinewsletter_unsubscribe_message')) {
			$cinewsletter_unsubscribe_message = $this->config->get('module_cinewsletter_unsubscribe_message');
		} else{
			$cinewsletter_unsubscribe_message = array();
		}

		if (isset($this->request->get['key'])) {
			$data['key'] = $this->request->get['key'];
		} else {
			$data['key'] = '';
		}

		$newsletter_info = $this->model_newsletter_cinewsletter->getNewsletterByToken($data['key']);
		
		$data['text_not_found'] = '';
		$data['text_message'] = '';
		if(isset($newsletter_info['status']) && ($newsletter_info['status'] == '0' || $newsletter_info['status'] == '1') && $data['key']) {
			$text_message = (!empty($cinewsletter_unsubscribe_message[$this->config->get('config_language_id')]['description'])) ? html_entity_decode($cinewsletter_unsubscribe_message[$this->config->get('config_language_id')]['description'], ENT_QUOTES, 'UTF-8') : '';

			if($text_message == '' || $text_message == '<p><br></p>' || $text_message == '<br>') {
				$data['text_message'] = $this->language->get('text_unsubscribe_message');
			} else {
				$data['text_message'] = $text_message;
			}

			$data['permission_status'] = true;
		} else{
			$text_not_found = (!empty($cinewsletter_unsubscribe_message[$this->config->get('config_language_id')]['invalid_lang'])) ? html_entity_decode($cinewsletter_unsubscribe_message[$this->config->get('config_language_id')]['invalid_lang'], ENT_QUOTES, 'UTF-8') : '';

			if($text_not_found == '' || $text_not_found == '<p><br></p>' || $text_not_found == '<br>') {
				$data['text_not_found'] = $this->language->get('text_unsubscribe_notfound');
			} else {
				$data['text_not_found'] = $text_not_found;
			}
			$data['permission_status'] = false;
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}		

		$heading_unsubscribe = (!empty($cinewsletter_unsubscribe_message[$this->config->get('config_language_id')]['title'])) ? html_entity_decode($cinewsletter_unsubscribe_message[$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8') : '';

		if($heading_unsubscribe == '' || $heading_unsubscribe == '<p><br></p>' || $heading_unsubscribe == '<br>') {
			$data['heading_unsubscribe'] = sprintf( $this->language->get('heading_unsubscribe'), $this->config->get('config_name'));
		} else {
			$data['heading_unsubscribe'] = $heading_unsubscribe;
		}


		$data['submit_button'] = (!empty($cinewsletter_unsubscribe_message[$this->config->get('config_language_id')]['submit_button'])) ? $cinewsletter_unsubscribe_message[$this->config->get('config_language_id')]['submit_button'] : $this->language->get('submit_button');

		$data['error_unsubscribe_required'] = $this->language->get('error_unsubscribe_required');

		if($this->config->get('module_cinewsletter_unsubscribe_reason')) {
			$unsubscribe_reasons = $this->config->get('module_cinewsletter_unsubscribe_reason');
		} else{
			$unsubscribe_reasons = array();
		}

		$data['unsubscribe_reasons'] = array();
		foreach($unsubscribe_reasons as $unsubscribe_reason) {
			$data['unsubscribe_reasons'][] = array(
				'title'				=> $unsubscribe_reason['description'][$this->config->get('config_language_id')]['title'],
				'custom_field'		=> (!empty($unsubscribe_reason['custom_field']) ? true : false),
			);
		}


		$data['display_title'] = $this->config->get('module_cinewsletter_unsubscribe_display_title');
		$data['display_description'] = $this->config->get('module_cinewsletter_unsubscribe_display_description');
		$data['display_logo'] = $this->config->get('module_cinewsletter_unsubscribe_display_logo');

		
		$data['name'] = $this->config->get('config_name');
		$data['home'] = $this->url->link('common/home');		

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		
		if(VERSION < '2.2.0.0') {
			if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/newsletter/unsubscribe.tpl')) {
				$this->response->setOutput($this->load->view($this->config->get('config_template') . '/template/newsletter/unsubscribe.tpl', $data));
			} else{
				$this->response->setOutput($this->load->view('default/template/newsletter/unsubscribe.tpl', $data));
			}
		} else {
			$this->response->setOutput($this->load->view('newsletter/unsubscribe', $data));
		}
	}

	public function addVerify() {
		$json = array();

		$this->load->language('newsletter/cinewsletter');

		$this->load->model('newsletter/cinewsletter');
		
		if($this->config->get('module_cinewsletter_verify_message')) {
			$cinewsletter_verify_message = $this->config->get('module_cinewsletter_verify_message');
		} else{
			$cinewsletter_verify_message = array();
		}

		if (isset($this->request->get['key'])) {
			$key = $this->request->get['key'];
		} else {
			$key = '';
		}

		$status = 1;
		$this->model_newsletter_cinewsletter->addStatusByToken($key, $status);

		if($this->config->get('module_cinewsletter_confirm_required')) {
			$confirm_required_message = $this->config->get('module_cinewsletter_confirm_required_message');
			if(!empty($confirm_required_message[$this->config->get('config_language_id')]['subject'])) {
				$subject = $confirm_required_message[$this->config->get('config_language_id')]['subject'];
			} else{
				$subject = '';
			}

			if(!empty($confirm_required_message[$this->config->get('config_language_id')]['message'])) {
				$message = $confirm_required_message[$this->config->get('config_language_id')]['message'];
			} else{
				$message = '';
			}

			$newsletter_info = $this->model_newsletter_cinewsletter->getNewsletterByToken($key);
			if($newsletter_info) {
				if ($this->request->server['HTTPS']) {
					$server = $this->config->get('config_ssl');
				} else {
					$server = $this->config->get('config_url');
				}

				if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
					$logo = $server . 'image/' . $this->config->get('config_logo');
				} else {
					$logo = '';
				}
				
				$home_href = $this->url->link('common/home', '', true);

				$find = array(
					'{STORE_NAME}',
					'{STORE_LINK}',
					'{LOGO}',
					'{NAME}',
					'{EMAIL}',
					'{UNSUBSCRIBE_LINK}',
				);
			
				$replace = array(
					'STORE_NAME'					=> $this->config->get('config_name'),
					'STORE_LINK'					=> $home_href,
					'LOGO'								=> '<img src="'. $logo .'" alt="'. $this->config->get('config_name') .'" title="'. $this->config->get('config_name') .'" />',
					'NAME'								=> $newsletter_info['name'],
					'EMAIL'								=> $newsletter_info['email'],
					'UNSUBSCRIBE_LINK'		=> $this->url->link('newsletter/cinewsletter/unsubscribe', 'key='. $key , true),
				);
				
				if(!empty($subject)) {
					$subject = str_replace($find, $replace, $subject);
				}else{
					$subject = '';
				}
				
				if(!empty($message)) {
					$message = str_replace($find, $replace, $message);
				}else{
					$message = '';
				}

				$mail = new Mail($this->config->get('config_mail_engine'));
				$mail->parameter = $this->config->get('config_mail_parameter');
				$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
				$mail->smtp_username = $this->config->get('config_mail_smtp_username');
				$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
				$mail->smtp_port = $this->config->get('config_mail_smtp_port');
				$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

				$mail->setTo($newsletter_info['email']);
				$mail->setFrom($this->config->get('config_email'));
				$mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
				$mail->setSubject(html_entity_decode($subject, ENT_QUOTES, 'UTF-8'));
				$mail->setHtml(html_entity_decode($message, ENT_QUOTES, 'UTF-8'));
				$mail->send();
			}
		}

		$success = (!empty($cinewsletter_verify_message[$this->config->get('config_language_id')]['success_lang'])) ? html_entity_decode($cinewsletter_verify_message[$this->config->get('config_language_id')]['success_lang'], ENT_QUOTES, 'UTF-8') : '';


		if($success == '' || $success == '<p><br></p>' || $success == '<br>') {
			$json['success'] = $this->language->get('text_verify_success');
		} else {
			$json['success'] = $success;
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function addDecline() {
		$json = array();

		$this->load->language('newsletter/cinewsletter');

		$this->load->model('newsletter/cinewsletter');

		if($this->config->get('module_cinewsletter_verify_message')) {
			$cinewsletter_verify_message = $this->config->get('module_cinewsletter_verify_message');
		} else{
			$cinewsletter_verify_message = array();
		}

		if (isset($this->request->get['key'])) {
			$key = $this->request->get['key'];
		} else {
			$key = '';
		}

		$status = 3;
		$this->model_newsletter_cinewsletter->addStatusByToken($key, $status);

		$success = (!empty($cinewsletter_verify_message[$this->config->get('config_language_id')]['decline_lang'])) ? html_entity_decode($cinewsletter_verify_message[$this->config->get('config_language_id')]['decline_lang'], ENT_QUOTES, 'UTF-8') : '';

		if($success == '' || $success == '<p><br></p>' || $success == '<br>') {
			$json['success'] = $this->language->get('text_decline_success');
		} else {
			$json['success'] = $success;
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function addUnsubscribe() {
		$json = array();

		$this->load->language('newsletter/cinewsletter');

		$this->load->model('newsletter/cinewsletter');

		if($this->config->get('module_cinewsletter_unsubscribe_message')) {
			$cinewsletter_unsubscribe_message = $this->config->get('module_cinewsletter_unsubscribe_message');
		} else{
			$cinewsletter_unsubscribe_message = array();
		}

		if (isset($this->request->get['key'])) {
			$key = $this->request->get['key'];
		} else {
			$key = '';
		}

		if (isset($this->request->post['unsubscribe_reason'])) {
			$unsubscribe_reason = $this->request->post['unsubscribe_reason'];
		} else {
			$unsubscribe_reason = '';
		}

		if (isset($this->request->post['unsubscribe_message'])) {
			$unsubscribe_message = $this->request->post['unsubscribe_message'];
		} else {
			$unsubscribe_message = '';
		}

		$filter_data = array(
			'unsubscribe_reason' 					=> $unsubscribe_reason,
			'unsubscribe_message'					=> $unsubscribe_message,
			'status'								=> 2,
		);
		
		$this->model_newsletter_cinewsletter->addUnsubscribeByToken($key, $filter_data);

		$success = (!empty($cinewsletter_unsubscribe_message[$this->config->get('config_language_id')]['success_lang'])) ? html_entity_decode($cinewsletter_unsubscribe_message[$this->config->get('config_language_id')]['success_lang'], ENT_QUOTES, 'UTF-8') : '';

		if($success == '' || $success == '<p><br></p>' || $success == '<br>') {
			$json['success'] = $this->language->get('text_unsubscribe_success');
		} else {
			$json['success'] = $success;
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}