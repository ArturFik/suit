<?php
class ControllerExtensionModulecinewsletter extends Controller {
	private $error = array();

	public function index() {
		// Build Table
		$this->load->model('newsletter/buildtable');
		$this->model_newsletter_buildtable->Buildtable();

		if(isset($this->request->get['store_id'])) {
			$store_id = $this->request->get['store_id'];
		}else{
			$store_id = 0;
		}

		$this->document->addStyle('view/stylesheet/cinewsletter/newsletter.css');

		$this->document->addStyle('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,500;1,600&display=swap');
		$this->document->addStyle('view/javascript/cinewsletter/colorpicker/css/colorpicker.css');
		$this->document->addScript('view/javascript/cinewsletter/colorpicker/js/colorpicker.js');

		$this->load->language('extension/module/cinewsletter');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_cinewsletter', $this->request->post, $store_id);

			$this->session->data['success'] = $this->language->get('text_success');

			if(!empty($this->request->post['change']) && $this->request->post['change'] == 'close') {
				$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
			}else{
				$this->response->redirect($this->url->link('extension/module/cinewsletter', 'user_token=' . $this->session->data['user_token'], true));
			}
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['subject'])) {
			$data['error_subject'] = $this->error['subject'];
		} else {
			$data['error_subject'] = '';
		}

		if (isset($this->error['message'])) {
			$data['error_message'] = $this->error['message'];
		} else {
			$data['error_message'] = '';
		}

		if (isset($this->error['confirm_subject'])) {
			$data['error_confirm_subject'] = $this->error['confirm_subject'];
		} else {
			$data['error_confirm_subject'] = '';
		}

		if (isset($this->error['confirm_message'])) {
			$data['error_confirm_message'] = $this->error['confirm_message'];
		} else {
			$data['error_confirm_message'] = '';
		}

		if (isset($this->error['popup_minutes'])) {
			$data['error_popup_minutes'] = $this->error['popup_minutes'];
		} else {
			$data['error_popup_minutes'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/cinewsletter', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['store_id'] = $store_id;
		if(isset($store_id)) {
			$data['action'] = $this->url->link('extension/module/cinewsletter', 'user_token=' . $this->session->data['user_token'] . '&store_id='. $store_id, true);
		} else{
			$data['action'] = $this->url->link('extension/module/cinewsletter', 'user_token=' . $this->session->data['user_token'], true);
			$data['action'] = $this->url->link('extension/module/cinewsletter', 'user_token=' . $this->session->data['user_token'], true);
		}

		$data['template_list'] = $this->url->link('newsletter/citemplate', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		$data['quicksendemail'] = $this->url->link('newsletter/quickemail', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		$data['subscriber_list'] = $this->url->link('newsletter/subscriber', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if ($this->request->server['REQUEST_METHOD'] != 'POST') {
			$cinewsletter_info = $this->model_setting_setting->getSetting('module_cinewsletter',  $store_id);
		}

		if (isset($this->request->post['module_cinewsletter_status'])) {
			$data['module_cinewsletter_status'] = $this->request->post['module_cinewsletter_status'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_status'] = $cinewsletter_info['module_cinewsletter_status'];
		} else {
			$data['module_cinewsletter_status'] = '';
		}

		if (isset($this->request->post['module_cinewsletter_verify_required'])) {
			$data['module_cinewsletter_verify_required'] = $this->request->post['module_cinewsletter_verify_required'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_verify_required'] = $cinewsletter_info['module_cinewsletter_verify_required'];
		} else {
			$data['module_cinewsletter_verify_required'] = 1;
		}

		if (isset($this->request->post['module_cinewsletter_verify_required_message'])) {
			$data['module_cinewsletter_verify_required_message'] = $this->request->post['module_cinewsletter_verify_required_message'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_verify_required_message'] = $cinewsletter_info['module_cinewsletter_verify_required_message'];
		} else {
			$data['module_cinewsletter_verify_required_message'] = '';
		}

		if (isset($this->request->post['module_cinewsletter_confirm_required'])) {
			$data['module_cinewsletter_confirm_required'] = $this->request->post['module_cinewsletter_confirm_required'];
		} elseif (!empty($cinewsletter_info['module_cinewsletter_confirm_required'])) {
			$data['module_cinewsletter_confirm_required'] = $cinewsletter_info['module_cinewsletter_confirm_required'];
		} else {
			$data['module_cinewsletter_confirm_required'] = '';
		}

		if (isset($this->request->post['module_cinewsletter_confirm_required_message'])) {
			$data['module_cinewsletter_confirm_required_message'] = $this->request->post['module_cinewsletter_confirm_required_message'];
		} elseif (!empty($cinewsletter_info['module_cinewsletter_confirm_required_message'])) {
			$data['module_cinewsletter_confirm_required_message'] = $cinewsletter_info['module_cinewsletter_confirm_required_message'];
		} else {
			$data['module_cinewsletter_confirm_required_message'] = '';
		}

		if (isset($this->request->post['module_cinewsletter_layout_status'])) {
			$data['module_cinewsletter_layout_status'] = $this->request->post['module_cinewsletter_layout_status'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_layout_status'] = $cinewsletter_info['module_cinewsletter_layout_status'];
		} else {
			$data['module_cinewsletter_layout_status'] = '';
		}

		if (isset($this->request->post['module_cinewsletter_layout_display_title'])) {
			$data['module_cinewsletter_layout_display_title'] = $this->request->post['module_cinewsletter_layout_display_title'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_layout_display_title'] = $cinewsletter_info['module_cinewsletter_layout_display_title'];
		} else {
			$data['module_cinewsletter_layout_display_title'] = '1';
		}

		if (isset($this->request->post['module_cinewsletter_layout_display_name'])) {
			$data['module_cinewsletter_layout_display_name'] = $this->request->post['module_cinewsletter_layout_display_name'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_layout_display_name'] = $cinewsletter_info['module_cinewsletter_layout_display_name'];
		} else {
			$data['module_cinewsletter_layout_display_name'] = '1';
		}

		if (isset($this->request->post['module_cinewsletter_layout_display_icon'])) {
			$data['module_cinewsletter_layout_display_icon'] = $this->request->post['module_cinewsletter_layout_display_icon'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_layout_display_icon'] = $cinewsletter_info['module_cinewsletter_layout_display_icon'];
		} else {
			$data['module_cinewsletter_layout_display_icon'] = '1';
		}

		if (isset($this->request->post['module_cinewsletter_layout_display_iconclass'])) {
			$data['module_cinewsletter_layout_display_iconclass'] = $this->request->post['module_cinewsletter_layout_display_iconclass'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_layout_display_iconclass'] = $cinewsletter_info['module_cinewsletter_layout_display_iconclass'];
		} else {
			$data['module_cinewsletter_layout_display_iconclass'] = '';
		}

		if (isset($this->request->post['module_cinewsletter_footer_layout'])) {
			$data['module_cinewsletter_footer_layout'] = $this->request->post['module_cinewsletter_footer_layout'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_footer_layout'] = (isset($cinewsletter_info['module_cinewsletter_footer_layout'])) ? (array)$cinewsletter_info['module_cinewsletter_footer_layout'] : array();
		} else {
			$data['module_cinewsletter_footer_layout'] = array();
		}

		if (isset($this->request->post['module_cinewsletter_footer_bgcolor'])) {
			$data['module_cinewsletter_footer_bgcolor'] = $this->request->post['module_cinewsletter_footer_bgcolor'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_footer_bgcolor'] = $cinewsletter_info['module_cinewsletter_footer_bgcolor'];
		} else {
			$data['module_cinewsletter_footer_bgcolor'] = '';
		}

		if (isset($this->request->post['module_cinewsletter_footer_fontcolor'])) {
			$data['module_cinewsletter_footer_fontcolor'] = $this->request->post['module_cinewsletter_footer_fontcolor'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_footer_fontcolor'] = $cinewsletter_info['module_cinewsletter_footer_fontcolor'];
		} else {
			$data['module_cinewsletter_footer_fontcolor'] = '';
		}

		if (isset($this->request->post['module_cinewsletter_layout_message'])) {
			$data['module_cinewsletter_layout_message'] = $this->request->post['module_cinewsletter_layout_message'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_layout_message'] = $cinewsletter_info['module_cinewsletter_layout_message'];
		} else {
			$data['module_cinewsletter_layout_message'] = array();
		}

		if (isset($this->request->post['module_cinewsletter_footer_status'])) {
			$data['module_cinewsletter_footer_status'] = $this->request->post['module_cinewsletter_footer_status'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_footer_status'] = $cinewsletter_info['module_cinewsletter_footer_status'];
		} else {
			$data['module_cinewsletter_footer_status'] = '';
		}

		if (isset($this->request->post['module_cinewsletter_footer_display_title'])) {
			$data['module_cinewsletter_footer_display_title'] = $this->request->post['module_cinewsletter_footer_display_title'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_footer_display_title'] = $cinewsletter_info['module_cinewsletter_footer_display_title'];
		} else {
			$data['module_cinewsletter_footer_display_title'] = '1';
		}

		if (isset($this->request->post['module_cinewsletter_footer_display_name'])) {
			$data['module_cinewsletter_footer_display_name'] = $this->request->post['module_cinewsletter_footer_display_name'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_footer_display_name'] = $cinewsletter_info['module_cinewsletter_footer_display_name'];
		} else {
			$data['module_cinewsletter_footer_display_name'] = '1';
		}

		if (isset($this->request->post['module_cinewsletter_footer_message'])) {
			$data['module_cinewsletter_footer_message'] = $this->request->post['module_cinewsletter_footer_message'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_footer_message'] = $cinewsletter_info['module_cinewsletter_footer_message'];
		} else {
			$data['module_cinewsletter_footer_message'] = array();
		}

		if (isset($this->request->post['module_cinewsletter_popup_status'])) {
			$data['module_cinewsletter_popup_status'] = $this->request->post['module_cinewsletter_popup_status'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_popup_status'] = $cinewsletter_info['module_cinewsletter_popup_status'];
		} else {
			$data['module_cinewsletter_popup_status'] = '';
		}

		if (isset($this->request->post['module_cinewsletter_popup_layout'])) {
			$data['module_cinewsletter_popup_layout'] = $this->request->post['module_cinewsletter_popup_layout'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_popup_layout'] = (isset($cinewsletter_info['module_cinewsletter_popup_layout'])) ? (array)$cinewsletter_info['module_cinewsletter_popup_layout'] : array();
		} else {
			$data['module_cinewsletter_popup_layout'] = array();
		}

		if (isset($this->request->post['module_cinewsletter_popup_display_title'])) {
			$data['module_cinewsletter_popup_display_title'] = $this->request->post['module_cinewsletter_popup_display_title'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_popup_display_title'] = $cinewsletter_info['module_cinewsletter_popup_display_title'];
		} else {
			$data['module_cinewsletter_popup_display_title'] = '1';
		}

		if (isset($this->request->post['module_cinewsletter_popup_display_name'])) {
			$data['module_cinewsletter_popup_display_name'] = $this->request->post['module_cinewsletter_popup_display_name'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_popup_display_name'] = $cinewsletter_info['module_cinewsletter_popup_display_name'];
		} else {
			$data['module_cinewsletter_popup_display_name'] = '1';
		}

		if (isset($this->request->post['module_cinewsletter_popup_html'])) {
			$data['module_cinewsletter_popup_html'] = $this->request->post['module_cinewsletter_popup_html'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_popup_html'] = $cinewsletter_info['module_cinewsletter_popup_html'];
		} else {
			$data['module_cinewsletter_popup_html'] = 'popup_advance';
		}

		if (isset($this->request->post['module_cinewsletter_popup_message'])) {
			$data['module_cinewsletter_popup_message'] = $this->request->post['module_cinewsletter_popup_message'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_popup_message'] = $cinewsletter_info['module_cinewsletter_popup_message'];
		} else {
			$data['module_cinewsletter_popup_message'] = array();
		}

		if (isset($this->request->post['module_cinewsletter_popup_logo'])) {
			$data['module_cinewsletter_popup_logo'] = $this->request->post['module_cinewsletter_popup_logo'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_popup_logo'] = $cinewsletter_info['module_cinewsletter_popup_logo'];
		} else {
			$data['module_cinewsletter_popup_logo'] = '';
		}

		$this->load->model('tool/image');

		if (!empty($data['module_cinewsletter_popup_logo']) && is_file(DIR_IMAGE . $data['module_cinewsletter_popup_logo'])) {
			$data['logo'] = $this->model_tool_image->resize($data['module_cinewsletter_popup_logo'], 100, 100);
		} else {
			$data['logo'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}


		if (isset($this->request->post['module_cinewsletter_popup_bgimage'])) {
			$data['module_cinewsletter_popup_bgimage'] = $this->request->post['module_cinewsletter_popup_bgimage'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_popup_bgimage'] = $cinewsletter_info['module_cinewsletter_popup_bgimage'];
		} else {
			$data['module_cinewsletter_popup_bgimage'] = '';
		}

		if (!empty($data['module_cinewsletter_popup_bgimage']) && is_file(DIR_IMAGE . $data['module_cinewsletter_popup_bgimage'])) {
			$data['bgimage'] = $this->model_tool_image->resize($data['module_cinewsletter_popup_bgimage'], 100, 100);
		} else {
			$data['bgimage'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		if (isset($this->request->post['module_cinewsletter_popup_minutes'])) {
			$data['module_cinewsletter_popup_minutes'] = $this->request->post['module_cinewsletter_popup_minutes'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_popup_minutes'] = $cinewsletter_info['module_cinewsletter_popup_minutes'];
		} else {
			$data['module_cinewsletter_popup_minutes'] = '';
		}

		if (isset($this->request->post['module_cinewsletter_popup_reopen'])) {
			$data['module_cinewsletter_popup_reopen'] = $this->request->post['module_cinewsletter_popup_reopen'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_popup_reopen'] = $cinewsletter_info['module_cinewsletter_popup_reopen'];
		} else {
			$data['module_cinewsletter_popup_reopen'] = '';
		}

		if (isset($this->request->post['module_cinewsletter_css'])) {
			$data['module_cinewsletter_css'] = $this->request->post['module_cinewsletter_css'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_css'] = $cinewsletter_info['module_cinewsletter_css'];
		} else {
			$data['module_cinewsletter_css'] = '';
		}

		if (isset($this->request->post['module_cinewsletter_popupnoagain'])) {
			$data['module_cinewsletter_popupnoagain'] = $this->request->post['module_cinewsletter_popupnoagain'];
		} elseif (!empty($cinewsletter_info['module_cinewsletter_popupnoagain'])) {
			$data['module_cinewsletter_popupnoagain'] = $cinewsletter_info['module_cinewsletter_popupnoagain'];
		} else {
			$data['module_cinewsletter_popupnoagain'] = '';
		}

		if (isset($this->request->post['module_cinewsletter_social_status'])) {
			$data['module_cinewsletter_social_status'] = $this->request->post['cinewsletter_social_status'];
		} elseif (!empty($cinewsletter_info['module_cinewsletter_social_status'])) {
			$data['module_cinewsletter_social_status'] = (array)$cinewsletter_info['module_cinewsletter_social_status'];
		} else {
			$data['module_cinewsletter_social_status'] = [];
		}

		if (isset($this->request->post['module_cinewsletter_social_link'])) {
			$social_links = $this->request->post['module_cinewsletter_social_link'];
		} elseif (!empty($cinewsletter_info)) {
			$social_links = (!empty($cinewsletter_info['module_cinewsletter_social_link'])) ? (array)$cinewsletter_info['module_cinewsletter_social_link'] : array();
		} else {
			$social_links = array();
		}

		function SocialLinkSort($a, $b) {
		    return $a['sort_order'] - $b['sort_order'];
		}

		uasort($social_links, 'SocialLinkSort');


		$data['social_links'] = array();

		foreach($social_links as $key =>  $social_link) {
			$data['social_links'][$key] = array(
				'description'		=> isset($social_link['description']) ?  $social_link['description'] : array(),
				'link'				=> isset($social_link['link']) ?  $social_link['link'] : '',
				'icon_class'		=> isset($social_link['icon_class']) ?  $social_link['icon_class'] : '',
				'sort_order'		=> isset($social_link['sort_order']) ?  $social_link['sort_order'] : '',
			);
		}

		$data['config_language_id'] = $this->config->get('config_language_id');

		if (isset($this->request->post['module_cinewsletter_unsubscribe_reason'])) {
			$data['module_cinewsletter_unsubscribe_reasons'] = $this->request->post['module_cinewsletter_unsubscribe_reason'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_unsubscribe_reasons'] = (!empty($cinewsletter_info['module_cinewsletter_unsubscribe_reason'])) ? (array)$cinewsletter_info['module_cinewsletter_unsubscribe_reason'] : array();
		} else {
			$data['module_cinewsletter_unsubscribe_reasons'] = array();
		}

		if (isset($this->request->post['module_cinewsletter_verify_display_title'])) {
			$data['module_cinewsletter_verify_display_title'] = $this->request->post['module_cinewsletter_verify_display_title'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_verify_display_title'] = $cinewsletter_info['module_cinewsletter_verify_display_title'];
		} else {
			$data['module_cinewsletter_verify_display_title'] = '1';
		}

		if (isset($this->request->post['module_cinewsletter_verify_display_description'])) {
			$data['module_cinewsletter_verify_display_description'] = $this->request->post['module_cinewsletter_verify_display_description'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_verify_display_description'] = $cinewsletter_info['module_cinewsletter_verify_display_description'];
		} else {
			$data['module_cinewsletter_verify_display_description'] = '1';
		}

		if (isset($this->request->post['module_cinewsletter_verify_display_logo'])) {
			$data['module_cinewsletter_verify_display_logo'] = $this->request->post['module_cinewsletter_verify_display_logo'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_verify_display_logo'] = $cinewsletter_info['module_cinewsletter_verify_display_logo'];
		} else {
			$data['module_cinewsletter_verify_display_logo'] = '1';
		}

		if (isset($this->request->post['module_cinewsletter_verify_display_decline'])) {
			$data['module_cinewsletter_verify_display_decline'] = $this->request->post['module_cinewsletter_verify_display_decline'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_verify_display_decline'] = $cinewsletter_info['module_cinewsletter_verify_display_decline'];
		} else {
			$data['module_cinewsletter_verify_display_decline'] = '1';
		}

		if (isset($this->request->post['module_cinewsletter_verify_message'])) {
			$data['module_cinewsletter_verify_message'] = $this->request->post['module_cinewsletter_verify_message'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_verify_message'] = $cinewsletter_info['module_cinewsletter_verify_message'];
		} else {
			$data['module_cinewsletter_verify_message'] = array();
		}

		if (isset($this->request->post['module_cinewsletter_unsubscribe_display_title'])) {
			$data['module_cinewsletter_unsubscribe_display_title'] = $this->request->post['module_cinewsletter_unsubscribe_display_title'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_unsubscribe_display_title'] = $cinewsletter_info['module_cinewsletter_unsubscribe_display_title'];
		} else {
			$data['module_cinewsletter_unsubscribe_display_title'] = '1';
		}

		if (isset($this->request->post['module_cinewsletter_unsubscribe_display_description'])) {
			$data['module_cinewsletter_unsubscribe_display_description'] = $this->request->post['module_cinewsletter_unsubscribe_display_description'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_unsubscribe_display_description'] = $cinewsletter_info['module_cinewsletter_unsubscribe_display_description'];
		} else {
			$data['module_cinewsletter_unsubscribe_display_description'] = '1';
		}

		if (isset($this->request->post['module_cinewsletter_unsubscribe_display_logo'])) {
			$data['module_cinewsletter_unsubscribe_display_logo'] = $this->request->post['module_cinewsletter_unsubscribe_display_logo'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_unsubscribe_display_logo'] = $cinewsletter_info['module_cinewsletter_unsubscribe_display_logo'];
		} else {
			$data['module_cinewsletter_unsubscribe_display_logo'] = '1';
		}

		if (isset($this->request->post['module_cinewsletter_unsubscribe_message'])) {
			$data['module_cinewsletter_unsubscribe_message'] = $this->request->post['module_cinewsletter_unsubscribe_message'];
		} elseif (!empty($cinewsletter_info)) {
			$data['module_cinewsletter_unsubscribe_message'] = $cinewsletter_info['module_cinewsletter_unsubscribe_message'];
		} else {
			$data['module_cinewsletter_unsubscribe_message'] = array();
		}

		$this->load->model('setting/store');
		$data['stores'] = $this->model_setting_store->getStores();

		$this->load->model('localisation/language');
		$data['languages'] = $this->model_localisation_language->getLanguages();

		$data['popup_htmls'] = array();
		$data['popup_htmls'][] = array(
			'filename'		=> 'popup_default',
			'title'			=> $this->language->get('text_popup_default'),
		);

		$data['popup_htmls'][] = array(
			'filename'		=> 'popup_envelope',
			'title'			=> $this->language->get('text_popup_envelope'),
		);

		$data['popup_htmls'][] = array(
			'filename'		=> 'popup_advance',
			'title'			=> $this->language->get('text_popup_advance'),
		);

		$data['user_token'] = $this->session->data['user_token'];

		$this->load->model('design/layout');
		$data['layouts'] = $this->model_design_layout->getLayouts();

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/cinewsletter', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/cinewsletter')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if(!empty($this->request->post['module_cinewsletter_popup_reopen']) && !empty($this->request->post['module_cinewsletter_popup_status'])) {
			if(!isset($this->request->post['module_cinewsletter_popup_minutes']) || (int)$this->request->post['module_cinewsletter_popup_minutes'] < '0') {
				$this->error['popup_minutes'] = $this->language->get('error_popup_minutes');
			}
		}

		if(!empty($this->request->post['module_cinewsletter_verify_required'])) {
			foreach ($this->request->post['module_cinewsletter_verify_required_message'] as $language_id => $value) {
				if ((utf8_strlen($value['subject']) < 2) || (utf8_strlen($value['subject']) > 255)) {
					$this->error['subject'][$language_id] = $this->language->get('error_subject');
				}

				$value['message'] = str_replace('&lt;p&gt;&lt;br&gt;&lt;/p&gt;', '', $value['message']);
				if ((utf8_strlen($value['message']) < 25)) {
					$this->error['message'][$language_id] = $this->language->get('error_message');
				}
			}
		}

		if(!empty($this->request->post['module_cinewsletter_confirm_required'])) {
			foreach ($this->request->post['module_cinewsletter_confirm_required_message'] as $language_id => $value) {
				if ((utf8_strlen($value['subject']) < 2) || (utf8_strlen($value['subject']) > 255)) {
					$this->error['confirm_subject'][$language_id] = $this->language->get('error_subject');
				}

				$value['message'] = str_replace('&lt;p&gt;&lt;br&gt;&lt;/p&gt;', '', $value['message']);
				if ((utf8_strlen($value['message']) < 25)) {
					$this->error['confirm_message'][$language_id] = $this->language->get('error_message');
				}
			}
		}

		if ($this->error && !isset($this->error['warning'])) {
			$this->error['warning'] = $this->language->get('error_warning');
		}

		return !$this->error;
	}
}