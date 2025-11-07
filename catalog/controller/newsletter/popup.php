<?php
class ControllerNewsletterPopup extends Controller {
	public function index() {
		$this->document->addStyle('catalog/view/theme/default/stylesheet/cinewsletter.css');

		$this->load->language('newsletter/cinewsletter');

		$this->load->model('newsletter/cinewsletter');

		if($this->config->get('module_cinewsletter_popup_message')) {
			$cinewsletter_popup_message = $this->config->get('module_cinewsletter_popup_message');
		} else{
			$cinewsletter_popup_message = array();
		}

		$data['heading_title'] = (!empty($cinewsletter_popup_message[$this->config->get('config_language_id')]['title'])) ? html_entity_decode($cinewsletter_popup_message[$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8') : sprintf( $this->language->get('popup_heading_title'), $this->config->get('config_name'));

		$data['text_description'] = (!empty($cinewsletter_popup_message[$this->config->get('config_language_id')]['description'])) ? html_entity_decode($cinewsletter_popup_message[$this->config->get('config_language_id')]['description'], ENT_QUOTES, 'UTF-8') : '';

		$data['entry_name'] = (!empty($cinewsletter_popup_message[$this->config->get('config_language_id')]['name'])) ? $cinewsletter_popup_message[$this->config->get('config_language_id')]['name'] : $this->language->get('popup_entry_name');

		$data['entry_email'] = (!empty($cinewsletter_popup_message[$this->config->get('config_language_id')]['email'])) ? $cinewsletter_popup_message[$this->config->get('config_language_id')]['email'] : $this->language->get('popup_entry_email');

		$data['button_subscribe'] = (!empty($cinewsletter_popup_message[$this->config->get('config_language_id')]['button'])) ? $cinewsletter_popup_message[$this->config->get('config_language_id')]['button'] : $this->language->get('popup_button_subscribe');

		$data['text_donotshow'] = $this->language->get('text_donotshow');

		$data['display_title'] = $this->config->get('module_cinewsletter_popup_display_title');
		$data['display_name'] = $this->config->get('module_cinewsletter_popup_display_name');
		$data['cinewsletter_popupnoagain'] = $this->config->get('module_cinewsletter_popupnoagain');

		$data['name'] = $this->config->get('config_name');
		$data['home'] = $this->url->link('common/home');

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('module_cinewsletter_popup_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('module_cinewsletter_popup_logo');
		} else {
			$data['logo'] = '';
		}

		if (is_file(DIR_IMAGE . $this->config->get('module_cinewsletter_popup_bgimage'))) {
			$data['bgimage'] = $server . 'image/' . $this->config->get('module_cinewsletter_popup_bgimage');
		} else {
			$data['bgimage'] = '';
		}


		$data['social_links'] = array();
		if(in_array('popup', (array)$this->config->get('module_cinewsletter_social_status'))) {
			$social_links = (array)$this->config->get('module_cinewsletter_social_link');
			foreach($social_links as $social_link) {
				$data['social_links'][] = array(
					'title'			=> isset($social_link['description'][$this->config->get('config_language_id')]['title']) ? $social_link['description'][$this->config->get('config_language_id')]['title'] : '',
					'link'			=> $social_link['link'],
					'icon'			=> $social_link['icon_class'],
					'sort_order'	=> $social_link['sort_order'],
				);
			}


			function SocialLinksSortPopup($a, $b) {
			    return $a['sort_order'] - $b['sort_order'];
			}

			usort($data['social_links'], 'SocialLinksSortPopup');
		}


		$this->load->model('design/layout');
		if (isset($this->request->get['route'])) {
			$route = (string)$this->request->get['route'];
		} else {
			$route = 'common/home';
		}

		$layout_id = 0;

		if (!$layout_id) {
			$layout_id = $this->model_design_layout->getLayout($route);
		}

		if($this->config->get('module_cinewsletter_status') && $this->config->get('module_cinewsletter_popup_status') && in_array($layout_id, $this->config->get('module_cinewsletter_popup_layout'))) {

			$popup_cokkies = false;

			if(!empty($this->request->cookie['newsletter_popup_open'])) {
				$popup_cokkies = true;
			}

			if(!empty($this->request->cookie['newsletter_popup_subscribe'])) {
				$popup_cokkies = true;
			}

			if($this->model_newsletter_cinewsletter->getNewsletterByEmail($this->customer->getEmail())) {
				$popup_cokkies = true;
			}

			if($this->config->get('module_cinewsletter_popup_reopen')) {
				if(empty($this->request->cookie['newsletter_popup_open'])) {
					setcookie('newsletter_popup_open', 1, time() + (60 * $this->config->get('module_cinewsletter_popup_minutes')), "/"); // 86400 = 1 Day
				}
			}else{
				if(empty($this->request->cookie['newsletter_popup_open'])) {
					setcookie('newsletter_popup_open', 1, time() + (86400 * 365), "/"); // 86400 = 1 Day
				}
			}

			if(!$popup_cokkies) {
				if(VERSION < '2.2.0.0') {
					if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/newsletter/'. $this->config->get('module_cinewsletter_popup_html') . '.tpl')) {
						return $this->load->view($this->config->get('config_template') . '/template/newsletter/'. $this->config->get('module_cinewsletter_popup_html') . '.tpl', $data);
					} else{
						return $this->load->view('default/template/newsletter/'. $this->config->get('module_cinewsletter_popup_html') . '.tpl', $data);
					}
				} else {
					return $this->load->view('newsletter/'. $this->config->get('module_cinewsletter_popup_html'), $data);
				}
			}
		}
	}

	public function popupnoagain() {
		$json = array();

		if(!empty($this->request->post['popupnoagain'])) {
			// Create Cookie For hide popup for 365 Days
			setcookie('newsletter_popup_open', 1, time() + (86400 * 365), "/"); // 86400 = 1 Day
		} else {
			// Unset
			setcookie('newsletter_popup_open', 1, time() - 100, "/"); // 86400 = 1 Day
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function addSubscriber() {
		$this->load->language('newsletter/cinewsletter');

		$this->load->model('newsletter/cinewsletter');

		$this->load->model('account/customer');

		if($this->config->get('module_cinewsletter_popup_message')) {
			$cinewsletter_popup_message = $this->config->get('module_cinewsletter_popup_message');
		} else{
			$cinewsletter_popup_message = array();
		}

		$json = array();

		if($this->config->get('module_cinewsletter_popup_display_name') == 2) {
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
				'account_register'		=> ($customer_info) ? 1 : 0,
			);

			$this->model_newsletter_cinewsletter->addNewsletter($newsletter_data);

			$json['success'] = (!empty($cinewsletter_popup_message[$this->config->get('config_language_id')]['success'])) ? html_entity_decode($cinewsletter_popup_message[$this->config->get('config_language_id')]['success'], ENT_QUOTES, 'UTF-8') : $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}