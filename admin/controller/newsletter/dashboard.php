<?php
class ControllerNewsletterDashboard extends Controller {
	private $error = array();

	public function index() {
		// Build Table
		$this->load->model('newsletter/buildtable');
		$this->model_newsletter_buildtable->Buildtable();
		
		$this->load->language('newsletter/dashboard');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('newsletter/subscriber');

		$this->document->addStyle('view/stylesheet/cinewsletter/newsletter.css');

		$url = '';

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('newsletter/dashboard', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		// UnVerified Subscricers
		$data['total_subscribers'] = $this->model_newsletter_subscriber->getTotalSubscribers(array());

		$filter_data = array(
			'filter_status'				 => '0',
		);
		$data['total_unverify_subscribers'] = $this->model_newsletter_subscriber->getTotalSubscribers($filter_data);

		// Verified Subscricers
		$filter_data = array(
			'filter_status'				 => '1',
		);
		$data['total_unverified_subscribers'] = $this->model_newsletter_subscriber->getTotalSubscribers($filter_data);

		// UnSubscricers
		$filter_data = array(
			'filter_status'				 => '2',
		);
		$data['total_unsubscribers'] = $this->model_newsletter_subscriber->getTotalSubscribers($filter_data);

		// Declines
		$filter_data = array(
			'filter_status'				 => '3',
		);
		$data['total_declines'] = $this->model_newsletter_subscriber->getTotalSubscribers($filter_data);

		$data['menus'] = array();
		
		if ($this->user->hasPermission('access', 'extension/module/cinewsletter') && $this->config->has('module_cinewsletter_status')) {
			$data['menus'][] = array(
				'name'	   => $this->language->get('text_cinewsletter'),
				'icon'	   => 'fa-cog',
				'href'     => $this->url->link('extension/module/cinewsletter', 'user_token=' . $this->session->data['user_token'], true),
				'children' => array()		
			);					
		} else{
			$data['menus'][] = array(
				'name'	   => $this->language->get('text_cinewsletter'),
				'icon'	   => 'fa-cog',
				'href'     => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true),
				'children' => array()		
			);
		}

		if ($this->user->hasPermission('access', 'newsletter/citemplate')) {		
			$data['menus'][] = array(
				'name'	   => $this->language->get('text_html_template'),
				'icon'	   => 'fa-desktop',
				'href'     => $this->url->link('newsletter/citemplate', 'user_token=' . $this->session->data['user_token'], true),
				'children' => array()		
			);					
		}

		if ($this->user->hasPermission('access', 'newsletter/subscriber')) {		
			$data['menus'][] = array(
				'name'	   => $this->language->get('text_subscribe'),
				'icon'	   => 'fa-user',
				'href'     => $this->url->link('newsletter/subscriber', 'user_token=' . $this->session->data['user_token'], true),
				'children' => array()		
			);					
		}

		if ($this->user->hasPermission('access', 'newsletter/quickemail')) {
			$data['menus'][] = array(
				'name'	   => $this->language->get('text_quickemail'),
				'icon'	   => 'fa-user',
				'href'     => $this->url->link('newsletter/quickemail', 'user_token=' . $this->session->data['user_token'], true),
				'children' => array()		
			);					
		}

		$data['href_subscribers'] = $this->url->link('newsletter/subscriber', 'user_token=' . $this->session->data['user_token'], true);
		$data['href_unvefrify_subscribers'] = $this->url->link('newsletter/subscriber', 'user_token=' . $this->session->data['user_token'].'&filter_status=0', true);
		$data['href_verify_unsubscribers'] = $this->url->link('newsletter/subscriber', 'user_token=' . $this->session->data['user_token'].'&filter_status=1', true);
		$data['href_unsubscribers'] = $this->url->link('newsletter/subscriber', 'user_token=' . $this->session->data['user_token'].'&filter_status=2', true);

		$data['subscribers'] = array();

		$filter_data = array(
			'sort'  => 'date_added',
			'order' => 'DESC',
			'start' => 0,
			'limit' => 5
		);

		$subscriber_total = $this->model_newsletter_subscriber->getTotalSubscribers($filter_data);

		$results = $this->model_newsletter_subscriber->getSubscribers($filter_data);

		foreach ($results as $result) {
			$status_class = 'primary';
			$status = $this->language->get('text_unverify');
			switch($result['status']) {
				case 0:
					$status = $this->language->get('text_unverify');
					$status_class = 'primary';
					break;
				case 1:
					$status = $this->language->get('text_verified');
					$status_class = 'success';
					break;
				case 2:
					$status = $this->language->get('text_unsubscriber');
					$status_class = 'danger';
					break;
			}

			$data['subscribers'][] = array(
				'newsletter_id'  		=> $result['newsletter_id'],
				'name'           		=> $result['name'],
				'email'          		=> $result['email'],
				'ip'          			=> $result['ip'],
				'status'						=> $status,
				'status_class'			=> $status_class,
				'account_register'	=> ($result['account_register']) ? $this->language->get('text_register') : $this->language->get('text_guest'),
				'account_class'			=> ($result['account_register']) ? 'success' : 'primary',
				'date_added'     		=> ($result['date_added']!='0000-00-00 00:00:00') ? date($this->language->get('date_format_short'), strtotime($result['date_added'])) : '',
			);
		}

		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('newsletter/dashboard', $data));
	}

	public function chart() {
		$this->load->language('newsletter/dashboard');

		$json = array();

		$this->load->model('newsletter/subscriber');

		$json['subscribers'] = array();
		$json['xaxis'] = array();

		$json['subscriber']['label'] = $this->language->get('text_subscriber');
		$json['subscribers']['data'] = array();

		if (isset($this->request->get['range'])) {
			$range = $this->request->get['range'];
		} else {
			$range = 'day';
		}

		switch ($range) {
			default:
			case 'day':
				$results = $this->model_newsletter_subscriber->getTotalSubscribersByDay();

				foreach ($results as $key => $value) {
					$json['subscriber']['data'][] = array($key, $value['total']);
				}

				for ($i = 0; $i < 24; $i++) {
					$json['xaxis'][] = array($i, $i);
				}
				break;
			case 'week':
				$results = $this->model_newsletter_subscriber->getTotalSubscribersByWeek();

				foreach ($results as $key => $value) {
					$json['subscriber']['data'][] = array($key, $value['total']);
				}

				$date_start = strtotime('-' . date('w') . ' days');

				for ($i = 0; $i < 7; $i++) {
					$date = date('Y-m-d', $date_start + ($i * 86400));

					$json['xaxis'][] = array(date('w', strtotime($date)), date('D', strtotime($date)));
				}
				break;
			case 'month':
				$results = $this->model_newsletter_subscriber->getTotalSubscribersByMonth();

				foreach ($results as $key => $value) {
					$json['subscriber']['data'][] = array($key, $value['total']);
				}

				for ($i = 1; $i <= date('t'); $i++) {
					$date = date('Y') . '-' . date('m') . '-' . $i;

					$json['xaxis'][] = array(date('j', strtotime($date)), date('d', strtotime($date)));
				}
				break;
			case 'year':
				$results = $this->model_newsletter_subscriber->getTotalSubscribersByYear();

				foreach ($results as $key => $value) {
					$json['subscriber']['data'][] = array($key, $value['total']);
				}

				for ($i = 1; $i <= 12; $i++) {
					$json['xaxis'][] = array($i, date('M', mktime(0, 0, 0, $i)));
				}
				break;
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}