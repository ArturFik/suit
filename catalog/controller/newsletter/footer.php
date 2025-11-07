<?php
class ControllerNewsletterFooter extends Controller {
	public function index() {
		$this->document->addStyle('catalog/view/theme/default/stylesheet/cinewsletter.css');

		$this->load->language('newsletter/cinewsletter');

		if($this->config->get('module_cinewsletter_footer_message')) {
			$cinewsletter_footer_message = $this->config->get('module_cinewsletter_footer_message');
		} else{
			$cinewsletter_footer_message = array();
		}

		$data['heading_title'] = (!empty($cinewsletter_footer_message[$this->config->get('config_language_id')]['title'])) ? html_entity_decode($cinewsletter_footer_message[$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8') : sprintf( $this->language->get('footer_heading_title'), $this->config->get('config_name') );

		$data['text_description'] = (!empty($cinewsletter_footer_message[$this->config->get('config_language_id')]['description'])) ? html_entity_decode($cinewsletter_footer_message[$this->config->get('config_language_id')]['description'], ENT_QUOTES, 'UTF-8') : '';

		$data['entry_name'] = (!empty($cinewsletter_footer_message[$this->config->get('config_language_id')]['name'])) ? $cinewsletter_footer_message[$this->config->get('config_language_id')]['name'] : $this->language->get('footer_entry_name');

		$data['entry_email'] = (!empty($cinewsletter_footer_message[$this->config->get('config_language_id')]['email'])) ? $cinewsletter_footer_message[$this->config->get('config_language_id')]['email'] : $this->language->get('footer_entry_email');

		$data['button_subscribe'] = (!empty($cinewsletter_footer_message[$this->config->get('config_language_id')]['button'])) ? $cinewsletter_footer_message[$this->config->get('config_language_id')]['button'] : $this->language->get('footer_button_subscribe');

		$data['display_title'] = $this->config->get('module_cinewsletter_footer_display_title');
		$data['display_name'] = $this->config->get('module_cinewsletter_footer_display_name');

		$data['bgcolor'] = ($this->config->get('module_cinewsletter_footer_bgcolor')) ? $this->config->get('module_cinewsletter_footer_bgcolor') : '';
		$data['fontcolor'] = ($this->config->get('module_cinewsletter_footer_fontcolor')) ? $this->config->get('module_cinewsletter_footer_fontcolor') : '';


		$data['social_links'] = array();
		if(in_array('footer', (array)$this->config->get('module_cinewsletter_social_status'))) {
			$social_links = (array)$this->config->get('module_cinewsletter_social_link');
			foreach($social_links as $social_link) {
				$data['social_links'][] = array(
					'title'			=> isset($social_link['description'][$this->config->get('config_language_id')]['title']) ? $social_link['description'][$this->config->get('config_language_id')]['title'] : '',
					'link'			=> $social_link['link'],
					'icon'			=> $social_link['icon_class'],
					'sort_order'	=> $social_link['sort_order'],
				);
			}


			function SocialLinksSortFooter($a, $b) {
			    return $a['sort_order'] - $b['sort_order'];
			}

			usort($data['social_links'], 'SocialLinksSortFooter');
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

		if($this->config->get('module_cinewsletter_status') && $this->config->get('module_cinewsletter_footer_status') && in_array($layout_id, $this->config->get('module_cinewsletter_footer_layout'))) {
			if(VERSION < '2.2.0.0') {
				if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/newsletter/footer.tpl')) {
					return $this->load->view($this->config->get('config_template') . '/template/newsletter/footer.tpl', $data);
				} else{
					return $this->load->view('default/template/newsletter/footer.tpl', $data);
				}
			} else {
				return $this->load->view('newsletter/footer', $data);
			}
		}
	}

	public function addSubscriber() {
		$this->load->language('newsletter/cinewsletter');

		$this->load->model('newsletter/cinewsletter');

		$this->load->model('account/customer');

		if($this->config->get('module_cinewsletter_footer_message')) {
			$cinewsletter_footer_message = $this->config->get('module_cinewsletter_footer_message');
		} else{
			$cinewsletter_footer_message = array();
		}

		$json = array();

		if ((utf8_strlen($this->request->post['email']) > 96) || !filter_var($this->request->post['email'], FILTER_VALIDATE_EMAIL)) {
			$json['error']['warning'] = $this->language->get('error_email');
		}

		if ($this->model_newsletter_cinewsletter->getNewsletterByEmail($this->request->post['email'])) {
			$json['error']['warning'] = $this->language->get('error_exists');
		}

		if($this->config->get('module_cinewsletter_footer_display_name') == 2) {
			if ((utf8_strlen(trim($this->request->post['name'])) < 1) || (utf8_strlen(trim($this->request->post['name'])) > 32)) {
				$json['error']['warning'] = $this->language->get('error_name');
			}
		}

		if(!$json) {
			$customer_info = $this->model_account_customer->getTotalCustomersByEmail($this->request->post['email']);

			$newsletter_data = array(
				'name'					=> isset($this->request->post['name']) ? $this->request->post['name'] : '',
				'email'					=> $this->request->post['email'],
				'account_register'	=> ($customer_info) ? 1 : 0,
			);

			$this->model_newsletter_cinewsletter->addNewsletter($newsletter_data);

			$json['success'] = (!empty($cinewsletter_footer_message[$this->config->get('config_language_id')]['success'])) ? html_entity_decode($cinewsletter_footer_message[$this->config->get('config_language_id')]['success'], ENT_QUOTES, 'UTF-8') : $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}