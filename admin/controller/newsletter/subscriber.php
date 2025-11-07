<?php
require_once(DIR_SYSTEM . 'library/cinewsletter_excel/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\Writer\Csv;
use PhpOffice\PhpSpreadsheet\IOFactory;

class ControllerNewsletterSubscriber extends Controller {
	private $error = array();

	public function index() {
		// Build Table
		$this->load->model('newsletter/buildtable');
		$this->model_newsletter_buildtable->Buildtable();

		$this->load->language('newsletter/subscriber');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('newsletter/subscriber');

		$this->load->model('setting/store');

		$this->getList();
	}

	public function delete() {
		$this->load->language('newsletter/subscriber');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('newsletter/subscriber');

		$this->load->model('setting/store');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $newsletter_id) {
				$this->model_newsletter_subscriber->deleteSubscriber($newsletter_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['filter_name'])) {
				$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_email'])) {
				$url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_status'])) {
				$url .= '&filter_status=' . urlencode(html_entity_decode($this->request->get['filter_status'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_account'])) {
				$url .= '&filter_account=' . urlencode(html_entity_decode($this->request->get['filter_account'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_ip'])) {
				$url .= '&filter_ip=' . urlencode(html_entity_decode($this->request->get['filter_ip'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_date_added'])) {
				$url .= '&filter_date_added=' . urlencode(html_entity_decode($this->request->get['filter_date_added'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_store'])) {
				$url .= '&filter_store=' . urlencode(html_entity_decode($this->request->get['filter_store'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('newsletter/subscriber', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
	}

	protected function getList() {

		$this->document->addStyle('view/stylesheet/cinewsletter/newsletter.css');
		$this->document->addScript('view/javascript/cinewsletter/newsletter.js');

		if (isset($this->request->get['filter_name'])) {
			$filter_name = $this->request->get['filter_name'];
		} else {
			$filter_name = null;
		}

		if (isset($this->request->get['filter_email'])) {
			$filter_email = $this->request->get['filter_email'];
		} else {
			$filter_email = null;
		}

		if (isset($this->request->get['filter_status'])) {
			$filter_status = $this->request->get['filter_status'];
		} else {
			$filter_status = null;
		}

		if (isset($this->request->get['filter_account'])) {
			$filter_account = $this->request->get['filter_account'];
		} else {
			$filter_account = null;
		}

		if (isset($this->request->get['filter_ip'])) {
			$filter_ip = $this->request->get['filter_ip'];
		} else {
			$filter_ip = null;
		}

		if (isset($this->request->get['filter_date_added'])) {
			$filter_date_added = $this->request->get['filter_date_added'];
		} else {
			$filter_date_added = null;
		}

		if (isset($this->request->get['filter_store'])) {
			$filter_store = $this->request->get['filter_store'];
		} else {
			$filter_store = null;
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'date_added';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'DESC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_email'])) {
			$url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . urlencode(html_entity_decode($this->request->get['filter_status'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_account'])) {
			$url .= '&filter_account=' . urlencode(html_entity_decode($this->request->get['filter_account'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_ip'])) {
			$url .= '&filter_ip=' . urlencode(html_entity_decode($this->request->get['filter_ip'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . urlencode(html_entity_decode($this->request->get['filter_date_added'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_store'])) {
			$url .= '&filter_store=' . urlencode(html_entity_decode($this->request->get['filter_store'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('newsletter/subscriber', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		$data['delete'] = $this->url->link('newsletter/subscriber/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$data['subscribers'] = array();

		$filter_data = array(
			'filter_name'		  	=> $filter_name,
			'filter_email'	  	=> $filter_email,
			'filter_status'	  	=> $filter_status,
			'filter_account'		=> $filter_account,
			'filter_ip'					=> $filter_ip,
			'filter_date_added'	=> $filter_date_added,
			'filter_store'			=> $filter_store,
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);

		$subscriber_total = $this->model_newsletter_subscriber->getTotalSubscribers($filter_data);

		$results = $this->model_newsletter_subscriber->getSubscribers($filter_data);

		foreach ($results as $result) {
			$store_info = $this->model_setting_store->getStore($result['store_id']);
			
			if($store_info) {
				$store_name = $store_info['name'];
			} else {
				$store_name = $this->language->get('text_default');
			}

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
				case 3:
					$status = $this->language->get('text_decline');
					$status_class = 'danger';
					break;
			}

			$reason_message = '';
			if($result['status'] == '2') {
				$reason_message .= $result['unsubscribe_reason'];
				if($result['unsubscribe_message']) {
					$reason_message .= ' - ' . $result['unsubscribe_message'];
				}
			}

			$data['subscribers'][] = array(
				'newsletter_id'  		=> $result['newsletter_id'],
				'name'           		=> $result['name'],
				'email'          		=> $result['email'],
				'ip'          			=> $result['ip'],
				'store_name'			=> $store_name,
				'status'				=> $status,
				'status_class'			=> $status_class,
				'reason_message'			=> $reason_message,
				'account_register'		=> ($result['account_register']) ? $this->language->get('text_register') : $this->language->get('text_guest'),
				'account_class'			=> ($result['account_register']) ? 'success' : 'primary',
				'date_added'     		=> ($result['date_added']!='0000-00-00 00:00:00') ? date($this->language->get('date_format_short'), strtotime($result['date_added'])) : '',
			);
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_list'] = $this->language->get('text_list');
		$data['text_no_results'] = $this->language->get('text_no_results');
		$data['text_confirm'] = $this->language->get('text_confirm');
		$data['text_shortcodes'] = $this->language->get('text_shortcodes');
		$data['text_register'] = $this->language->get('text_register');
		$data['text_guest'] = $this->language->get('text_guest');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_default'] = $this->language->get('text_default');
		$data['text_unverify'] = $this->language->get('text_unverify');
		$data['text_verified'] = $this->language->get('text_verified');
		$data['text_unsubscriber'] = $this->language->get('text_unsubscriber');
		
		$data['text_send_email'] = $this->language->get('text_send_email');

		$data['entry_subject'] = $this->language->get('entry_subject');
		$data['entry_message'] = $this->language->get('entry_message');
		$data['entry_date_added'] = $this->language->get('entry_date_added');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_email'] = $this->language->get('entry_email');
		$data['entry_account'] = $this->language->get('entry_account');
		$data['entry_name'] = $this->language->get('entry_name');
		$data['entry_ip'] = $this->language->get('entry_ip');
		$data['entry_store'] = $this->language->get('entry_store');

		$data['column_name'] = $this->language->get('column_name');
		$data['column_email'] = $this->language->get('column_email');
		$data['column_account'] = $this->language->get('column_account');
		$data['column_status'] = $this->language->get('column_status');
		$data['column_store'] = $this->language->get('column_store');
		$data['column_ip'] = $this->language->get('column_ip');
		$data['column_date_added'] = $this->language->get('column_date_added');
		$data['column_action'] = $this->language->get('column_action');

		$data['button_add'] = $this->language->get('button_add');
		$data['button_edit'] = $this->language->get('button_edit');
		$data['button_delete'] = $this->language->get('button_delete');
		$data['button_setting'] = $this->language->get('button_setting');
		$data['button_email_popup'] = $this->language->get('button_email_popup');
		$data['button_filter'] = $this->language->get('button_filter');
		$data['button_send_email'] = $this->language->get('button_send_email');
		$data['button_short_codes'] = $this->language->get('button_short_codes');
		$data['button_close'] = $this->language->get('button_close');

		$data['exportlist'] = $this->url->link('newsletter/subscriber/export', 'user_token='. $this->session->data['user_token'], true);

		$data['button_exportlist'] = $this->language->get('button_exportlist');

		$data['importsubscribers'] = $this->url->link('newsletter/subscriber/import', 'user_token='. $this->session->data['user_token'], true);
		$data['button_importsubscribers'] = $this->language->get('button_importsubscribers');

		$data['importfile'] = $this->url->link('newsletter/subscriber/importfile', 'user_token='. $this->session->data['user_token'], true);
		$data['button_importfile'] = $this->language->get('button_importfile');

		$data['const_names'] = $this->language->get('const_names');
		$data['const_short_codes'] = $this->language->get('const_short_codes');
		$data['const_logo'] = $this->language->get('const_logo');
		$data['const_store_name'] = $this->language->get('const_store_name');
		$data['const_store_link'] = $this->language->get('const_store_link');
		$data['const_name'] = $this->language->get('const_name');
		$data['const_email'] = $this->language->get('const_email');
		$data['const_link_confirm'] = $this->language->get('const_link_confirm');
		$data['const_link_unsubscribe'] = $this->language->get('const_link_unsubscribe');
		

		// Stores
		$this->load->model('setting/store');

		$data['stores'] = array();

		$data['stores'] = $this->model_setting_store->getStores();

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

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_email'])) {
			$url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . urlencode(html_entity_decode($this->request->get['filter_status'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_account'])) {
			$url .= '&filter_account=' . urlencode(html_entity_decode($this->request->get['filter_account'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_ip'])) {
			$url .= '&filter_ip=' . urlencode(html_entity_decode($this->request->get['filter_ip'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . urlencode(html_entity_decode($this->request->get['filter_date_added'], ENT_QUOTES, 'UTF-8'));
		}
		
		if (isset($this->request->get['filter_store'])) {
			$url .= '&filter_store=' . urlencode(html_entity_decode($this->request->get['filter_store'], ENT_QUOTES, 'UTF-8'));
		}

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_name'] = $this->url->link('newsletter/subscriber', 'user_token=' . $this->session->data['user_token'] . '&sort=name' . $url, true);
		$data['sort_email'] = $this->url->link('newsletter/subscriber', 'user_token=' . $this->session->data['user_token'] . '&sort=email' . $url, true);
		$data['sort_store_id'] = $this->url->link('newsletter/subscriber', 'user_token=' . $this->session->data['user_token'] . '&sort=store_id' . $url, true);
		$data['sort_account_register'] = $this->url->link('newsletter/subscriber', 'user_token=' . $this->session->data['user_token'] . '&sort=account_register' . $url, true);
		$data['sort_status'] = $this->url->link('newsletter/subscriber', 'user_token=' . $this->session->data['user_token'] . '&sort=status' . $url, true);
		$data['sort_ip'] = $this->url->link('newsletter/subscriber', 'user_token=' . $this->session->data['user_token'] . '&sort=ip' . $url, true);
		$data['sort_date_added'] = $this->url->link('newsletter/subscriber', 'user_token=' . $this->session->data['user_token'] . '&sort=date_added' . $url, true);

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_email'])) {
			$url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . urlencode(html_entity_decode($this->request->get['filter_status'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_account'])) {
			$url .= '&filter_account=' . urlencode(html_entity_decode($this->request->get['filter_account'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_ip'])) {
			$url .= '&filter_ip=' . urlencode(html_entity_decode($this->request->get['filter_ip'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . urlencode(html_entity_decode($this->request->get['filter_date_added'], ENT_QUOTES, 'UTF-8'));
		}
		
		if (isset($this->request->get['filter_store'])) {
			$url .= '&filter_store=' . urlencode(html_entity_decode($this->request->get['filter_store'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $subscriber_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('newsletter/subscriber', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($subscriber_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($subscriber_total - $this->config->get('config_limit_admin'))) ? $subscriber_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $subscriber_total, ceil($subscriber_total / $this->config->get('config_limit_admin')));

		$data['filter_name'] = $filter_name;
		$data['filter_email'] = $filter_email;
		$data['filter_status'] = $filter_status;
		$data['filter_account'] = $filter_account;
		$data['filter_ip'] = $filter_ip;
		$data['filter_date_added'] = $filter_date_added;
		$data['filter_store'] = $filter_store;
		$data['sort'] = $sort;
		$data['order'] = $order;
		
		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		
		$this->response->setOutput($this->load->view('newsletter/subscriber_list', $data));
	}

	protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'newsletter/subscriber')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	public function sendManualSubscriber() {
		$json = array();

		$this->load->language('newsletter/subscriber');
		
		$this->load->model('newsletter/subscriber');

		if (!$this->user->hasPermission('modify', 'newsletter/subscriber')) {
			$json['warning'] = $this->language->get('error_permission');
		}

		if (empty($this->request->post['email'])) {
			$json['warning']	= $this->language->get('error_subscriber_email');
		}

		if ((utf8_strlen($this->request->post['subject']) < 2) || (utf8_strlen($this->request->post['subject']) > 255)) {
			$json['warning']	= $this->language->get('error_subject');
		}

		$this->request->post['message'] = str_replace('&lt;p&gt;&lt;br&gt;&lt;/p&gt;', '', $this->request->post['message']);
		if ((utf8_strlen($this->request->post['message']) < 25)) {
			$json['warning'] = $this->language->get('error_message');
		}

		if(!$json) {
			$send_data = array(
				'name'		=> isset($this->request->post['name']) ? $this->request->post['name'] : '',
				'email'		=> isset($this->request->post['email']) ? $this->request->post['email'] : '',
				'subject'		=> isset($this->request->post['subject']) ? $this->request->post['subject'] : '',
				'message'		=> isset($this->request->post['message']) ? $this->request->post['message'] : '',
			);

			$this->model_newsletter_subscriber->sendManualSubscriber($send_data);

			$json['success'] = $this->language->get('text_success_sendmanual');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function autocomplete() {
		$this->load->model('newsletter/subscriber');

		$json = array();

		if (isset($this->request->get['filter_name']) || isset($this->request->get['filter_email'])) {
			if (isset($this->request->get['filter_name'])) {
				$filter_name = $this->request->get['filter_name'];
			} else {
				$filter_name = '';
			}

			if (isset($this->request->get['filter_email'])) {
				$filter_email = $this->request->get['filter_email'];
			} else {
				$filter_email = '';
			}

			$this->load->model('customer/customer');

			$filter_data = array(
				'filter_name'  => $filter_name,
				'filter_email' => $filter_email,
				'start'        => 0,
				'limit'        => 5
			);

			$results = $this->model_newsletter_subscriber->getSubscribers($filter_data);

			foreach ($results as $result) {
				$json[] = array(
					'newsletter_id'       => $result['newsletter_id'],
					'name'              	=> strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')),
					'email'              	=> strip_tags(html_entity_decode($result['email'], ENT_QUOTES, 'UTF-8')),
				);
			}
		}

		$sort_order = array();

		foreach ($json as $key => $value) {
			$sort_order[$key] = $value['name'];
		}

		array_multisort($sort_order, SORT_ASC, $json);

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function export() {
		$this->load->language('newsletter/subscriber');

		$this->load->model('newsletter/subscriber');

		$this->load->model('setting/store');

		$this->spreadsheet = new Spreadsheet;

		// $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
		//Specify the properties for this document
	    $this->spreadsheet->getProperties()
	    ->setCreator("CodingInspect")
	    ->setLastModifiedBy("codinginspect.com")
	    ->setTitle("Newsletter Subscribers")
	    ->setSubject("Newsletter Subscribers")
	    ->setDescription("Newsletter Subscribers")
	    ->setKeywords("Newsletter Subscribers")
	    ->setCategory("Newsletter Subscribers");

   		$i = 1;
		$ci_column = 'A';

		$this->spreadsheet->setActiveSheetIndex(0);
	    $sheet = $this->spreadsheet->getActiveSheet();

	    $sheet->freezePane('C2');

		$sheet->setCellValue($ci_column . $i, $this->language->get('xls_name'))->getColumnDimension($ci_column)->setAutoSize(true); $sheet->getStyle($ci_column++ .$i)->getAlignment()->setWrapText(true);
		$sheet->setCellValue($ci_column . $i, $this->language->get('xls_email'))->getColumnDimension($ci_column)->setAutoSize(true); $sheet->getStyle($ci_column++ .$i)->getAlignment()->setWrapText(true);
		$sheet->setCellValue($ci_column . $i, $this->language->get('xls_account_register'))->getColumnDimension($ci_column)->setAutoSize(true); $sheet->getStyle($ci_column++ .$i)->getAlignment()->setWrapText(true);
		$sheet->setCellValue($ci_column . $i, $this->language->get('xls_status'))->getColumnDimension($ci_column)->setAutoSize(true); $sheet->getStyle($ci_column++ .$i)->getAlignment()->setWrapText(true);
		$sheet->setCellValue($ci_column . $i, $this->language->get('xls_unsubscribe_reason'))->getColumnDimension($ci_column)->setAutoSize(true); $sheet->getStyle($ci_column++ .$i)->getAlignment()->setWrapText(true);
		$sheet->setCellValue($ci_column . $i, $this->language->get('xls_ip'))->getColumnDimension($ci_column)->setAutoSize(true); $sheet->getStyle($ci_column++ .$i)->getAlignment()->setWrapText(true);
		$sheet->setCellValue($ci_column . $i, $this->language->get('xls_store'))->getColumnDimension($ci_column)->setAutoSize(true); $sheet->getStyle($ci_column++ .$i)->getAlignment()->setWrapText(true);
		$sheet->setCellValue($ci_column . $i, $this->language->get('xls_date_added'))->getColumnDimension($ci_column)->setAutoSize(true); $sheet->getStyle($ci_column++ .$i)->getAlignment()->setWrapText(true);

		// Background Color
		$sheet->getStyle('A1:'.$sheet->getHighestColumn().'1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('0061e0');

		// Font Color
		$sheet->getStyle('A1:'.$sheet->getHighestColumn().'1')->getFont()->setBold(true)->setSize(12)->getColor()->setARGB('FFFFFF');



		$results = $this->model_newsletter_subscriber->getAllSubscribers();

		if($results) {
			$sheet->setTitle(sprintf($this->language->get('xls_id'), count($results)));

			foreach($results as $result) {
				$ci_values = 'A';
				$i++;

				$store_info = $this->model_setting_store->getStore($result['store_id']);
				if($store_info) {
					$store_name = $store_info['name'];
				} else{
					$store_name = $this->language->get('text_default');
				}

				$status = $this->language->get('text_unverify');
				switch($result['status']) {
					case 0:
						$status = $this->language->get('text_unverify');
						break;
					case 1:
						$status = $this->language->get('text_verified');
						break;
					case 2:
						$status = $this->language->get('text_unsubscriber');
						break;
					case 3:
						$status = $this->language->get('text_decline');
						break;
				}

				$reason_message = '';
				if($result['status'] == '2') {
					$reason_message .= $result['unsubscribe_reason'];
					if($result['unsubscribe_message']) {
						$reason_message .= ' - ' . $result['unsubscribe_message'];
					}
				}

				$account_register = ($result['account_register']) ? $this->language->get('text_register') : $this->language->get('text_guest');


				$sheet->setCellValue($ci_values++ . $i, html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8'));

				$sheet->setCellValue($ci_values++ . $i, html_entity_decode($result['email'], ENT_QUOTES, 'UTF-8'));
				$sheet->setCellValue($ci_values++ . $i, html_entity_decode($account_register, ENT_QUOTES, 'UTF-8'));
				$sheet->setCellValue($ci_values++ . $i, html_entity_decode($status, ENT_QUOTES, 'UTF-8'));
				$sheet->setCellValue($ci_values++ . $i, html_entity_decode($reason_message, ENT_QUOTES, 'UTF-8'));
				$sheet->setCellValue($ci_values++ . $i, html_entity_decode($result['ip'], ENT_QUOTES, 'UTF-8'));
				$sheet->setCellValue($ci_values++ . $i, html_entity_decode($store_name, ENT_QUOTES, 'UTF-8'));
				// $sheet->setCellValue($ci_values++ . $i, html_entity_decode($result['token_id'], ENT_QUOTES, 'UTF-8'));
				$sheet->setCellValue($ci_values++ . $i, html_entity_decode(date('Y-m-d', strtotime($result['date_added'])), ENT_QUOTES, 'UTF-8'));
			}
		}

		$filename = 'SubscriberList.xlsx';
		$writer = new Xlsx($this->spreadsheet);
		$writer->save(DIR_UPLOAD . $filename);

		$path = DIR_UPLOAD;

		if (!headers_sent()) {
		    if (file_exists($path . $filename)) {
				header('Content-Type: '. mime_content_type($path . $filename));
				header('Content-Disposition: attachment;filename="'. $filename .'"');
				header('Content-Transfer-Encoding: binary');
				header('Content-Length: '. filesize($path . $filename));
				header('Cache-Control: max-age=0');
				header('Accept-Ranges: bytes');

		       	readfile($path . $filename, 'rb');

		       unlink($path . $filename);

	     	}
     	} else {
     		exit('Error: Headers already sent out!');
     	}
	}

	public function import() {
		$this->load->language('newsletter/subscriber');
		
		$this->load->model('newsletter/subscriber');

		$newsletter_customers = $this->model_newsletter_subscriber->getNewsletterCustomers();
		foreach($newsletter_customers as $newsletter_customer) {
			$newsletter_info = $this->model_newsletter_subscriber->getSubscriberByEmail($newsletter_customer['email']);

			if(empty($newsletter_info)) {
				$this->model_newsletter_subscriber->addCustomerToNewsletterSubscriber($newsletter_customer);				
			}

		}

		$this->session->data['success'] = $this->language->get('text_import_success');

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_email'])) {
			$url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . urlencode(html_entity_decode($this->request->get['filter_status'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_account'])) {
			$url .= '&filter_account=' . urlencode(html_entity_decode($this->request->get['filter_account'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_ip'])) {
			$url .= '&filter_ip=' . urlencode(html_entity_decode($this->request->get['filter_ip'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . urlencode(html_entity_decode($this->request->get['filter_date_added'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_store'])) {
			$url .= '&filter_store=' . urlencode(html_entity_decode($this->request->get['filter_store'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$this->response->redirect($this->url->link('newsletter/subscriber', 'user_token=' . $this->session->data['user_token'] . $url, true));
	}

	public function importfile() {
		$this->document->addStyle('view/stylesheet/cinewsletter/newsletter.css');
		$this->document->addScript('view/javascript/cinewsletter/newsletter.js');
		
		$this->load->language('newsletter/subscriber');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('newsletter/subscriber', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_importfile'),
			'href' => $this->url->link('newsletter/subscriber/importfile', 'user_token=' . $this->session->data['user_token'], true)
		);

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

		$data['heading_importfile'] = $this->language->get('heading_importfile');

		$data['button_download_sample'] = $this->language->get('button_download_sample');
		$data['button_import'] = $this->language->get('button_import');
		
		$data['entry_file'] = $this->language->get('entry_file');
		
		$data['download_sample'] = HTTP_CATALOG . 'samplefile/SampleSubscribers.xlsx';

		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		
		$this->response->setOutput($this->load->view('newsletter/importfile', $data));
	}

	public function importfileaction() {
		$this->load->language('newsletter/subscriber');

		$this->load->model('newsletter/subscriber');

		$json = array();

		if (!$this->user->hasPermission('modify', 'newsletter/subscriber')) {
			$json['error']['warning'] = $this->language->get('error_permission');
		}

		if (!$json) {
			if(empty($this->request->files['importfile'])) {
				$json['error']['file'] = $this->language->get('error_file');

				$json['error']['warning'] = $this->language->get('error_file');
			}

			if(!empty($this->request->files['importfile'])) {
				$content = file_get_contents($this->request->files['importfile']['tmp_name']);

				if (preg_match('/\<\?php/i', $content)) {
					$json['error']['file'] = $this->language->get('error_filetype');
					$json['error']['warning'] = $this->language->get('error_filetype');
				}

				if ($this->request->files['importfile']['error'] != UPLOAD_ERR_OK) {
					$json['error']['file'] = $this->language->get('error_upload_' . $this->request->files['importfile']['error']);
					$json['error']['warning'] = $this->language->get('error_upload_' . $this->request->files['importfile']['error']);
				}
			}

			if(!$json && $this->request->files) {
				$file = basename($this->request->files['importfile']['name']);
				move_uploaded_file($this->request->files['importfile']['tmp_name'], $file);
				$inputFileName = $file;

				$extension = pathinfo($inputFileName);

				$extension['extension'] = strtolower(strtoupper($extension['extension']));

				if(!in_array($extension['extension'], array('xls','xlsx','csv'))) {
					$json['error']['file'] = $this->language->get('error_format_diff');
					$json['error']['warning'] = $this->language->get('error_format_diff');
				}

				if($extension['extension']=='xlsx' || $extension['extension']=='xls' || $extension['extension']=='csv') {
					try{
						$inputFileType = $extension['extension'];

						if($extension['extension']=='xlsx') {
							$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
						} else if($extension['extension']=='xls') {
							$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
						} else if($extension['extension']=='csv') {
							$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
						} else {
				        	$reader = '';
				        }
					}catch(Exception $e){
						$json['error']['warning'] = $this->language->get('error_loading_file') .'"'. pathinfo($inputFileName,PATHINFO_BASENAME) .'": '.$e->getMessage();
					}
				}
			}

			if(!$json) {
				$spreadsheet = $reader->load($inputFileName);
				$sheetdata = $spreadsheet->getSheet(0)->toArray(null,true,true,true);

				$i = 0;

				$insert = 0;
				$skip = 0;

				if(count($sheetdata) > 1) {
					foreach($sheetdata as $value) {

						// Cell Values
						if($i != '0') {
							$subscriber_name = (isset($value['A']) ? $value['A'] : '');
							$subscriber_email = (isset($value['B']) ? $value['B'] : '');
							$subscriber_status = (isset($value['D']) ? $value['D'] : '');
							$subscriber_ip = (isset($value['F']) ? $value['F'] : '');
							$subscriber_store_name = (isset($value['G']) ? $value['G'] : 'Default');
							$date_added = (isset($value['H']) ? $value['H'] : date('Y-m-d H:i:s'));

							if($subscriber_email) {
								$newsletter_info = $this->model_newsletter_subscriber->getSubscriberByEmail($subscriber_email);
								if(empty($newsletter_info)) {

									// Add Information
									$add_data = array();
									$add_data['name'] 		= $subscriber_name;
									$add_data['email'] 		= $subscriber_email;

									$add_data['store_id'] 	= $this->config->get('config_store_id');
									if($subscriber_store_name != 'Default') {
										$store_info = $this->model_newsletter_subscriber->getStoreByName($subscriber_store_name);
										if($store_info) {
											$add_data['store_id'] 	= $store_info['store_id'];
										}
									}

									$status = 0;
									switch($subscriber_status) {
										case $this->language->get('text_unverify'):
											$status = 0;
											break;
										case $this->language->get('text_verified'):
											$status = 1;
											break;
										case $this->language->get('text_unsubscriber'):
											$status = 2;
											break;
										case $this->language->get('text_decline'):
											$status = 3;
											break;
									}

									$add_data['status'] 		= $status;
									$add_data['date_added'] 	= $date_added;

									$customer_info = $this->model_newsletter_subscriber->getNewsletterCustomer($subscriber_email);

									if($customer_info) {
										$add_data['account_register'] = 1;
										if(!$subscriber_ip) {
											$subscriber_ip = $customer_info['ip'];
										}
									} else {
										$add_data['account_register'] = 0;
									}

									$add_data['ip'] 			= $subscriber_ip;

									$this->model_newsletter_subscriber->importInsertNewsletterSubscriber($add_data);

									$insert++;
								} else {
									$skip++;
								}
							}
						}

						$i++;
					}

					if($insert) {
						$json['success'] = sprintf($this->language->get('text_insert'), $insert);
					}

					if($skip) {
						$json['skip'] = sprintf($this->language->get('text_skip'), $skip);
					}

				} else {
					$json['error']['warning'] = $this->language->get('text_no_results');
				}
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function editOpenSubscriber() {
		$json = array();

		$this->load->language('newsletter/subscriber');
		
		$this->load->model('newsletter/subscriber');

		$data['text_save_subscriber'] = $this->language->get('text_save_subscriber');
		$data['text_unverify'] = $this->language->get('text_unverify');
		$data['text_verified'] = $this->language->get('text_verified');
		$data['text_unsubscriber'] = $this->language->get('text_unsubscriber');
		$data['text_decline'] = $this->language->get('text_decline');
		$data['text_register'] = $this->language->get('text_register');
		$data['text_guest'] = $this->language->get('text_guest');
		
		$data['entry_name'] = $this->language->get('entry_name');
		$data['entry_email'] = $this->language->get('entry_email');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_account_type'] = $this->language->get('entry_account_type');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_close'] = $this->language->get('button_close');

		if(isset($this->request->post['subscriber_email'])) {
			$subscriber_email = $this->request->post['subscriber_email'];
		} else {
			$subscriber_email = $this->request->post['subscriber_email'];
		}

		$newsletter_info = $this->model_newsletter_subscriber->getSubscriberByEmail($subscriber_email);
		if ($newsletter_info) {

			$data['newsletter_id'] = $newsletter_info['newsletter_id'];

			$data['name'] = $newsletter_info['name'];

			$data['email'] = $newsletter_info['email'];

			$data['account_type'] = $newsletter_info['account_register'];

			$data['newsletter_status'] = $newsletter_info['status'];

			$json['html'] = $this->load->view('newsletter/subscriber_edit', $data);
		} else {
			$json['redirect'] = str_replace('&amp;', '&', $this->url->link('error/not_found', 'user_token='. $this->session->data['user_token'], true));
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function updateManualSubscriber() {
		$json = array();

		$this->load->language('newsletter/subscriber');
		
		$this->load->model('newsletter/subscriber');

		if(isset($this->request->get['newsletter_id'])) {
			$newsletter_id = $this->request->get['newsletter_id'];
		} else {
			$newsletter_id = 0;
		}

		$newsletter_info = $this->model_newsletter_subscriber->getSubscriber($newsletter_id);

		if($newsletter_info) {
			$this->model_newsletter_subscriber->updateManualSubscriber($newsletter_id, $this->request->post);

			$json['success'] = $this->language->get('text_success');
			$json['success_redirect'] = str_replace('&amp;', '&', $this->url->link('newsletter/subscriber', 'user_token='. $this->session->data['user_token'], true));
		} else {
			$json['redirect'] = str_replace('&amp;', '&', $this->url->link('error/not_found', 'user_token='. $this->session->data['user_token'], true));
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));	
	}
}