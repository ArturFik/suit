<?php
class ControllerNewsletterCitemplate extends Controller {
	private $error = array();

	public function index() {
		// Build Table
		$this->load->model('newsletter/buildtable');
		$this->model_newsletter_buildtable->Buildtable();
		
		$this->load->language('newsletter/citemplate');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('newsletter/citemplate');

		$this->getList();
	}

	public function add() {
		$this->load->language('newsletter/citemplate');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('newsletter/citemplate');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_newsletter_citemplate->addCitemplate($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('newsletter/citemplate', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function edit() {
		$this->load->language('newsletter/citemplate');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('newsletter/citemplate');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_newsletter_citemplate->editCitemplate($this->request->get['citemplate_id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('newsletter/citemplate', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('newsletter/citemplate');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('newsletter/citemplate');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $citemplate_id) {
				$this->model_newsletter_citemplate->deleteCitemplate($citemplate_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('newsletter/citemplate', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
	}

	protected function getList() {
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'id.title';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

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
			'href' => $this->url->link('newsletter/citemplate', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		$data['add'] = $this->url->link('newsletter/citemplate/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['delete'] = $this->url->link('newsletter/citemplate/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$data['citemplates'] = array();

		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);

		$citemplate_total = $this->model_newsletter_citemplate->getTotalCitemplates();

		$results = $this->model_newsletter_citemplate->getCitemplates($filter_data);

		foreach ($results as $result) {
			$data['citemplates'][] = array(
				'citemplate_id' => $result['citemplate_id'],
				'title'          => $result['title'],
				'sort_order'     => $result['sort_order'],
				'edit'           => $this->url->link('newsletter/citemplate/edit', 'user_token=' . $this->session->data['user_token'] . '&citemplate_id=' . $result['citemplate_id'] . $url, true)
			);
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_list'] = $this->language->get('text_list');
		$data['text_no_results'] = $this->language->get('text_no_results');
		$data['text_confirm'] = $this->language->get('text_confirm');

		$data['column_title'] = $this->language->get('column_title');
		$data['column_sort_order'] = $this->language->get('column_sort_order');
		$data['column_action'] = $this->language->get('column_action');

		$data['button_add'] = $this->language->get('button_add');
		$data['button_edit'] = $this->language->get('button_edit');
		$data['button_delete'] = $this->language->get('button_delete');
		$data['button_setting'] = $this->language->get('button_setting');

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

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_title'] = $this->url->link('newsletter/citemplate', 'user_token=' . $this->session->data['user_token'] . '&sort=id.title' . $url, true);
		$data['sort_sort_order'] = $this->url->link('newsletter/citemplate', 'user_token=' . $this->session->data['user_token'] . '&sort=i.sort_order' . $url, true);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $citemplate_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('newsletter/citemplate', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($citemplate_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($citemplate_total - $this->config->get('config_limit_admin'))) ? $citemplate_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $citemplate_total, ceil($citemplate_total / $this->config->get('config_limit_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('newsletter/citemplate_list', $data));
	}

	protected function getForm() {
		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_form'] = !isset($this->request->get['citemplate_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');
		$data['text_default'] = $this->language->get('text_default');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_select'] = $this->language->get('text_select');
		$data['text_yes'] = $this->language->get('text_yes');
		$data['text_no'] = $this->language->get('text_no');
		$data['text_width'] = $this->language->get('text_width');
		$data['text_height'] = $this->language->get('text_height');

		$data['entry_title'] = $this->language->get('entry_title');
		$data['entry_description'] = $this->language->get('entry_description');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');
		$data['entry_product'] = $this->language->get('entry_product');
		$data['entry_coupon'] = $this->language->get('entry_coupon');
		$data['entry_image_size'] = $this->language->get('entry_image_size');
		$data['entry_display_price'] = $this->language->get('entry_display_price');

		$data['help_product'] = $this->language->get('help_product');
		$data['help_coupon'] = $this->language->get('help_coupon');


		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		$data['tab_general'] = $this->language->get('tab_general');
		$data['tab_product'] = $this->language->get('tab_product');
		$data['tab_coupon'] = $this->language->get('tab_coupon');

		$data['const_names'] = $this->language->get('const_names');
		$data['const_short_codes'] = $this->language->get('const_short_codes');
		$data['const_logo'] = $this->language->get('const_logo');
		$data['const_store_name'] = $this->language->get('const_store_name');
		$data['const_store_link'] = $this->language->get('const_store_link');
		$data['const_name'] = $this->language->get('const_name');
		$data['const_email'] = $this->language->get('const_email');
		$data['const_link_confirm'] = $this->language->get('const_link_confirm');
		$data['const_link_unsubscribe'] = $this->language->get('const_link_unsubscribe');
		$data['const_products'] = $this->language->get('const_products');
		$data['const_coupon_code'] = $this->language->get('const_coupon_code');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['title'])) {
			$data['error_title'] = $this->error['title'];
		} else {
			$data['error_title'] = array();
		}

		if (isset($this->error['description'])) {
			$data['error_description'] = $this->error['description'];
		} else {
			$data['error_description'] = array();
		}

		if (isset($this->error['image_size'])) {
			$data['error_image_size'] = $this->error['image_size'];
		} else {
			$data['error_image_size'] = '';
		}

		if (isset($this->error['display_price'])) {
			$data['error_display_price'] = $this->error['display_price'];
		} else {
			$data['error_display_price'] = '';
		}

		$url = '';

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
			'href' => $this->url->link('newsletter/citemplate', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		if (!isset($this->request->get['citemplate_id'])) {
			$data['action'] = $this->url->link('newsletter/citemplate/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		} else {
			$data['action'] = $this->url->link('newsletter/citemplate/edit', 'user_token=' . $this->session->data['user_token'] . '&citemplate_id=' . $this->request->get['citemplate_id'] . $url, true);
		}

		$data['cancel'] = $this->url->link('newsletter/citemplate', 'user_token=' . $this->session->data['user_token'] . $url, true);

		if (isset($this->request->get['citemplate_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$citemplate_info = $this->model_newsletter_citemplate->getCitemplate($this->request->get['citemplate_id']);
		}

		$data['user_token'] = $this->session->data['user_token'];

		$this->load->model('localisation/language');
		$data['languages'] = $this->model_localisation_language->getLanguages();
		
		$this->load->model('marketing/coupon');
		$data['coupons'] = $this->model_marketing_coupon->getCoupons();

		if (isset($this->request->post['citemplate_description'])) {
			$data['citemplate_description'] = $this->request->post['citemplate_description'];
		} elseif (isset($this->request->get['citemplate_id'])) {
			$data['citemplate_description'] = $this->model_newsletter_citemplate->getCitemplateDescriptions($this->request->get['citemplate_id']);
		} else {
			$data['citemplate_description'] = array();
		}

		if (isset($this->request->post['sort_order'])) {
			$data['sort_order'] = $this->request->post['sort_order'];
		} elseif (!empty($citemplate_info)) {
			$data['sort_order'] = $citemplate_info['sort_order'];
		} else {
			$data['sort_order'] = '';
		}

		if (isset($this->request->post['coupon_id'])) {
			$data['coupon_id'] = $this->request->post['coupon_id'];
		} elseif (!empty($citemplate_info)) {
			$data['coupon_id'] = $citemplate_info['coupon_id'];
		} else {
			$data['coupon_id'] = '';
		}

		$this->load->model('catalog/product');

		$data['products'] = array();

		if (!empty($this->request->post['product'])) {
			$products = $this->request->post['product'];
		} elseif (!empty($citemplate_info)) {
			$products = $this->model_newsletter_citemplate->getCitemplateProducts($citemplate_info['citemplate_id']);
		} else {
			$products = array();
		}

		foreach ($products as $product_id) {
			$product_info = $this->model_catalog_product->getProduct($product_id);

			if ($product_info) {
				$data['products'][] = array(
					'product_id' => $product_info['product_id'],
					'name'       => $product_info['name']
				);
			}
		}


		if (isset($this->request->post['image_width'])) {
			$data['image_width'] = $this->request->post['image_width'];
		} elseif (!empty($citemplate_info)) {
			$data['image_width'] = $citemplate_info['image_width'];
		} else {
			$data['image_width'] = 300;
		}

		if (isset($this->request->post['image_height'])) {
			$data['image_height'] = $this->request->post['image_height'];
		} elseif (!empty($citemplate_info)) {
			$data['image_height'] = $citemplate_info['image_height'];
		} else {
			$data['image_height'] = 180;
		}

		if (isset($this->request->post['display_price'])) {
			$data['display_price'] = $this->request->post['display_price'];
		} elseif (!empty($citemplate_info)) {
			$data['display_price'] = $citemplate_info['display_price'];
		} else {
			$data['display_price'] = 1;
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('newsletter/citemplate_form', $data));
	}

	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'newsletter/citemplate')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		foreach ($this->request->post['citemplate_description'] as $language_id => $value) {
			if ((utf8_strlen($value['title']) < 3) || (utf8_strlen($value['title']) > 255)) {
				$this->error['title'][$language_id] = $this->language->get('error_title');
			}

			if (utf8_strlen($value['description']) < 3) {
				$this->error['description'][$language_id] = $this->language->get('error_description');
			}
		}

		if(!empty($this->request->post['product'])) {
			if (!$this->request->post['image_width'] || !$this->request->post['image_height']) {
				$this->error['image_size'] = $this->language->get('error_image_size');
			}
		}
		
		if ($this->error && !isset($this->error['warning'])) {
			$this->error['warning'] = $this->language->get('error_warning');
		}

		return !$this->error;
	}

	protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'newsletter/citemplate')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}