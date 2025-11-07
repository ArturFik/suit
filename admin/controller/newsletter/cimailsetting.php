<?php
class ControllerNewsletterCimailsetting extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('newsletter/cimailsetting');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('cimailsetting', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('newsletter/cimailsetting', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		$this->document->addStyle('view/stylesheet/cinewsletter/newsletter.css');

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');

		$data['text_default_mail'] = $this->language->get('text_default_mail');
		$data['text_sendgrid_mail'] = $this->language->get('text_sendgrid_mail');

		$data['entry_mailserver'] = $this->language->get('entry_mailserver');
		$data['entry_api'] = $this->language->get('entry_api');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
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
			'href' => $this->url->link('extension/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('newsletter/cimailsetting', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('newsletter/cimailsetting', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('newsletter/dashboard', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->post['cimailsetting_server'])) {
			$data['cimailsetting_server'] = $this->request->post['cimailsetting_server'];
		} else if($this->config->has('cimailsetting_server')) {
			$data['cimailsetting_server'] = $this->config->get('cimailsetting_server');
		} else {
			$data['cimailsetting_server'] = 'DEFAULT';
		}

		if (isset($this->request->post['cimailsetting_api'])) {
			$data['cimailsetting_api'] = $this->request->post['cimailsetting_api'];
		} else if($this->config->has('cimailsetting_api')) {
			$data['cimailsetting_api'] = $this->config->get('cimailsetting_api');
		} else {
			$data['cimailsetting_api'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('newsletter/cimailsetting', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'newsletter/cimailsetting')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}