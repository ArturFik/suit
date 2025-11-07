<?php
class ControllerExtensionModuleCinewsletter extends Controller {
	public function index() {
		static $module = 0;

		$this->document->addStyle('catalog/view/theme/default/stylesheet/cinewsletter.css');

		$this->load->language('newsletter/cinewsletter');

		$data['heading_title'] = $this->language->get('layout_heading_title');

		if($this->config->get('module_cinewsletter_layout_message')) {
			$cinewsletter_layout_message = $this->config->get('module_cinewsletter_layout_message');
		} else{
			$cinewsletter_layout_message = array();
		}

		$data['heading_title'] = (!empty($cinewsletter_layout_message[$this->config->get('config_language_id')]['title'])) ? html_entity_decode($cinewsletter_layout_message[$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8') : $this->language->get('layout_heading_title');

		$data['text_description'] = (!empty($cinewsletter_layout_message[$this->config->get('config_language_id')]['description'])) ? html_entity_decode($cinewsletter_layout_message[$this->config->get('config_language_id')]['description'], ENT_QUOTES, 'UTF-8') : '';

		$data['entry_name'] = (!empty($cinewsletter_layout_message[$this->config->get('config_language_id')]['name'])) ? $cinewsletter_layout_message[$this->config->get('config_language_id')]['name'] : $this->language->get('layout_entry_name');
		
		$data['entry_email'] = (!empty($cinewsletter_layout_message[$this->config->get('config_language_id')]['email'])) ? $cinewsletter_layout_message[$this->config->get('config_language_id')]['email'] : $this->language->get('layout_entry_email');
		
		$data['button_subscribe'] = (!empty($cinewsletter_layout_message[$this->config->get('config_language_id')]['button'])) ? $cinewsletter_layout_message[$this->config->get('config_language_id')]['button'] : $this->language->get('layout_button_subscribe');

		$data['display_title'] = $this->config->get('module_cinewsletter_layout_display_title');
		$data['display_name'] = $this->config->get('module_cinewsletter_layout_display_name');
		$data['display_icon'] = $this->config->get('module_cinewsletter_layout_display_icon');
		$data['iconclass'] = ($this->config->get('module_cinewsletter_layout_display_iconclass')) ? $this->config->get('module_cinewsletter_layout_display_iconclass') : 'fa-envelope';
		
		$data['module'] = $module++;

		if($this->config->get('module_cinewsletter_layout_status')) {
			if(VERSION < '2.2.0.0') {
				if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/extension/module/cinewsletter.tpl')) {
					return $this->load->view($this->config->get('config_template') . '/template/extension/module/cinewsletter.tpl', $data);
				} else{
					return $this->load->view('default/template/extension/module/cinewsletter.tpl', $data);
				}
			} else {
				return $this->load->view('extension/module/cinewsletter', $data);
			}
		}
	}

	public function addSubscriber() {
		$this->load->language('newsletter/cinewsletter');

		$this->load->model('newsletter/cinewsletter');
		
		$this->load->model('account/customer');

		if($this->config->get('module_cinewsletter_layout_message')) {
			$cinewsletter_layout_message = $this->config->get('module_cinewsletter_layout_message');
		} else{
			$cinewsletter_layout_message = array();
		}

		$json = array();

		if($this->config->get('module_cinewsletter_layout_display_name') == 2) {
			if ((utf8_strlen(trim($this->request->post['name'])) < 1) || (utf8_strlen(trim($this->request->post['name'])) > 32)) {
				$json['error_name'] = $this->language->get('error_name');
			}
		}

		if ((utf8_strlen($this->request->post['email']) > 96) || !filter_var($this->request->post['email'], FILTER_VALIDATE_EMAIL)) {
			$json['error_email'] = $this->language->get('error_email');
		}

		if ($this->model_newsletter_cinewsletter->getNewsletterByEmail($this->request->post['email'])) {
			$json['error_email'] = $this->language->get('error_exists');
		}

		if(!$json) {
			$customer_info = $this->model_account_customer->getTotalCustomersByEmail($this->request->post['email']);

			$newsletter_data = array(
				'name'					=> isset($this->request->post['name']) ? $this->request->post['name'] : '',
				'email'					=> $this->request->post['email'],
				'account_register'	=> ($customer_info) ? 1 : 0,
			);

			$this->model_newsletter_cinewsletter->addNewsletter($newsletter_data);

			$json['success'] = (!empty($cinewsletter_layout_message[$this->config->get('config_language_id')]['success'])) ? html_entity_decode($cinewsletter_layout_message[$this->config->get('config_language_id')]['success'], ENT_QUOTES, 'UTF-8') : $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}