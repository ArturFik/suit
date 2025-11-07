<?php
class ControllerNewsletterQuickemail extends Controller {
	private $error = array();

	public function index() {
		// Build Table
		$this->load->model('newsletter/buildtable');
		$this->model_newsletter_buildtable->Buildtable();
		
		$this->load->language('newsletter/quickemail');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('newsletter/quickemail');

		$this->load->model('newsletter/subscriber');
		
		$this->load->model('newsletter/citemplate');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_newsletter_quickemail->SendQuickEmail($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			$this->response->redirect($this->url->link('newsletter/quickemail', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$url = '';

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('newsletter/quickemail', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['citemplate'])) {
			$data['error_citemplate'] = $this->error['citemplate'];
		} else {
			$data['error_citemplate'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$data['action'] = $this->url->link('newsletter/quickemail', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_form'] = $this->language->get('text_form');
		$data['text_all'] = $this->language->get('text_all');
		$data['text_select'] = $this->language->get('text_select');
		$data['text_register'] = $this->language->get('text_register');
		$data['text_guest'] = $this->language->get('text_guest');

		$data['text_subscriber_list'] = $this->language->get('text_subscriber_list');
		$data['text_subscriber_choose'] = $this->language->get('text_subscriber_choose');
		$data['text_unverified'] = $this->language->get('text_unverified');
		$data['text_verified'] = $this->language->get('text_verified');
		$data['text_unsubscriber'] = $this->language->get('text_unsubscriber');
		$data['text_decline'] = $this->language->get('text_decline');
		$data['text_default'] = $this->language->get('text_default');
		$data['text_custom'] = $this->language->get('text_custom');

		$data['entry_account_type'] = $this->language->get('entry_account_type');
		$data['entry_template'] = $this->language->get('entry_template');
		$data['entry_shottype'] = $this->language->get('entry_shottype');
		$data['entry_newsletter_status'] = $this->language->get('entry_newsletter_status');
		$data['entry_store'] = $this->language->get('entry_store');
		$data['entry_custom_subscriber'] = $this->language->get('entry_custom_subscriber');

		$data['help_template'] = $this->language->get('help_template');
		$data['help_shottype'] = $this->language->get('help_shottype');
		$data['help_newsletter_status'] = $this->language->get('help_newsletter_status');
		$data['help_account_type'] = $this->language->get('help_account_type');
		$data['help_store'] = $this->language->get('help_store');
		
		$data['button_send'] = $this->language->get('button_send');

		$data['citemplates'] = $this->model_newsletter_citemplate->getCitemplates();

		$this->load->model('setting/store');
		$data['stores'] = $this->model_setting_store->getStores();

		if (isset($this->request->post['citemplate_id'])) {
			$data['citemplate_id'] = $this->request->post['citemplate_id'];
		} else {
			$data['citemplate_id'] = '';
		}

		if (isset($this->request->post['shottype'])) {
			$data['shottype'] = $this->request->post['shottype'];
		} else {
			$data['shottype'] = '';
		}

		if (isset($this->request->post['newsletter_status'])) {
			$data['newsletter_status'] = $this->request->post['newsletter_status'];
		} else {
			$data['newsletter_status'] = '';
		}

		if (isset($this->request->post['account_type'])) {
			$data['account_type'] = $this->request->post['account_type'];
		} else {
			$data['account_type'] = '';
		}

		if (isset($this->request->post['store_id'])) {
			$data['store_id'] = $this->request->post['store_id'];
		} else {
			$data['store_id'] = '';
		}

		if (isset($this->request->post['custom_subscribers'])) {
			$custom_subscribers = $this->request->post['custom_subscribers'];
		} else {
			$custom_subscribers = array();
		}

		$data['custom_subscribers'] = array();

		foreach ($custom_subscribers as $newsletter_id) {

			$newsletter_info = $this->model_newsletter_subscriber->getSubscriber($newsletter_id);

			if ($newsletter_info) {
				$data['custom_subscribers'][] = array(
					'newsletter_id' => $newsletter_info['newsletter_id'],
					'email'        	=> $newsletter_info['email']
				);
			}
		}

		$data['user_token'] = $this->session->data['user_token'];


		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('newsletter/quickemail', $data));
	}

	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'newsletter/quickemail')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (empty($this->request->post['citemplate_id'])) {
			$this->error['citemplate'] = $this->language->get('error_citemplate');
		}

		if (isset($this->request->post['newsletter_status']) && $this->request->post['newsletter_status'] == 'custom') {
			if (empty($this->request->post['custom_subscribers'])) {
				$this->error['warning'] = $this->language->get('error_not_found');
			}
		}

		if(!$this->error) {
			$subscribers = $this->model_newsletter_quickemail->getSubscribers($this->request->post);
			if(empty($subscribers)) {
				$this->error['warning'] = $this->language->get('error_not_found');
			}
		}

		if ($this->error && !isset($this->error['warning'])) {
			$this->error['warning'] = $this->language->get('error_warning');
		}


		return !$this->error;
	}
}