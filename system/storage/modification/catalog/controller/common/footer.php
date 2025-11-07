<?php
class ControllerCommonFooter extends Controller {
	public function index() {

            //OCP Oneclick Order
            $data['ocpoc_settings'] = $this->config->get('ocp_oneclick_settings');
            $data['ocpoc_list_btns'] = $this->config->get('ocp_oneclick_list_btns');
            $store_id          = $this->config->get('config_store_id');
            $customer_group_id = ($this->customer->isLogged())?$this->customer->getGroupId():$this->config->get('config_customer_group_id');
            if((isset($data['ocpoc_settings']['stores']) && in_array($store_id, $data['ocpoc_settings']['stores'])) || (isset($data['ocpoc_settings']['customer_groups']) && in_array($customer_group_id, $data['ocpoc_settings']['customer_groups']))){
                $data['ocpoc_settings']['status'] = false;
            }
            $localisation = $this->config->get('ocp_oneclick_localisation');
            $language_code = $this->session->data['language'];
            if(isset($localisation[$language_code])){
                $data['ocpoc_localisation'] = $localisation[$language_code];
            }
            //END OCP Oneclick Order
            


		/*
		* Ci Newsletter Starts
		*/
		$data['footer_newsletter'] = $this->load->controller('newsletter/footer');
		$data['popup_newsletter'] = $this->load->controller('newsletter/popup');
		$custom_css = ($this->config->get('module_cinewsletter_status')) ? $this->config->get('module_cinewsletter_css') : '';
		if($custom_css) {
			$data['custom_css'] = '<style>'. $custom_css .'</style>';
		} else{
			$data['custom_css'] = '';
		}

		/*
		* Ci Newsletter Ends
		*/

			
		$this->load->language('common/footer');

		$this->load->model('catalog/information');

		$data['informations'] = array();

            $data['informations_about_us_footer'] = array();
            $data['informations_payment_footer'] = array();
            $data['informations_service_footer'] = array();
            $data['informations_special_footer'] = array();
            

		foreach ($this->model_catalog_information->getInformations() as $result) {
			if ($result['bottom']) {

            if(in_array($result['information_id'], explode(',', $this->language->get('ids_informantion_about_us')))){
				$data['informations_about_us_footer'][] = array(
					'title' => $result['title'],
					'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
				);
			}
            if(in_array($result['information_id'], explode(',', $this->language->get('ids_informantion_payment')))){
				$data['informations_payment_footer'][] = array(
					'title' => $result['title'],
					'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
				);
			}
            if(in_array($result['information_id'], explode(',', $this->language->get('ids_informantion_service')))){
				$data['informations_service_footer'][] = array(
					'title' => $result['title'],
					'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
				);
			}
            /*if(in_array($result['information_id'], explode(',', $this->language->get('ids_informantion_special')))){
					$data['informations_special_footer'][] = array(
						'title' => $result['title'],
						'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
					);
				}*/
            
				$data['informations'][] = array(
					'title' => $result['title'],
					'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
				);
			}
		}


            $ids_informantion_special = explode(',', $this->language->get('ids_informantion_special'));
			$this->load->model('blog/blog_category');
			foreach($ids_informantion_special as $informantion_special_id){
				$blog_category_info = $this->model_blog_blog_category->getBlogCategory($informantion_special_id);
				if ($blog_category_info) {
					$data['informations_special_footer'][] = array(
						'title' => $blog_category_info['name'],
						'href'  => $this->url->link('blog/category', 'blogpath=' . $informantion_special_id)
					);
				}
			}
            $data['informations_about_us_footer'][] = array(
                'title' => $this->language->get('text_brand_footer'),
                'href'  => $this->url->link('product/manufacturer')
            );
            $data['informations_service_footer'][] = array(
                'title' => $this->language->get('text_contact_footer'),
                'href'  => $this->url->link('information/contact')
            );
            

            $data['categories'] = array();
            $this->load->model('catalog/category');
            foreach($this->model_catalog_category->getCategoriesBottom(59) as $category){
                $data['categories'][] = array(
                    'name' => $category['name'],
                    'href' => $this->url->link('product/category', 'path=' . $category['category_id'])
                );
            }
            
		$data['contact'] = $this->url->link('information/contact');
		$data['return'] = $this->url->link('account/return/add', '', true);
		$data['sitemap'] = $this->url->link('information/sitemap');
		$data['tracking'] = $this->url->link('information/tracking');
		$data['manufacturer'] = $this->url->link('product/manufacturer');
		$data['voucher'] = $this->url->link('account/voucher', '', true);
		$data['affiliate'] = $this->url->link('affiliate/login', '', true);
		$data['special'] = $this->url->link('product/special');
		$data['account'] = $this->url->link('account/account', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);

        if ($this->config->get('module_progroman_citymanager_status') && $this->progroman_citymanager->setting('cities_in_source')) {
            $data['prmn_cmngr_cities'] = $this->load->controller('extension/module/progroman/citymanager/cities');
        } else {
            $data['prmn_cmngr_cities'] = '';
        }

		$data['powered'] = sprintf($this->language->get('text_powered'), $this->config->get('config_name'), date('Y', time()));

		// Whos Online
		if ($this->config->get('config_customer_online')) {
			$this->load->model('tool/online');

			if (isset($this->request->server['REMOTE_ADDR'])) {
				$ip = $this->request->server['REMOTE_ADDR'];
			} else {
				$ip = '';
			}

			if (isset($this->request->server['HTTP_HOST']) && isset($this->request->server['REQUEST_URI'])) {
				$url = ($this->request->server['HTTPS'] ? 'https://' : 'http://') . $this->request->server['HTTP_HOST'] . $this->request->server['REQUEST_URI'];
			} else {
				$url = '';
			}

			if (isset($this->request->server['HTTP_REFERER'])) {
				$referer = $this->request->server['HTTP_REFERER'];
			} else {
				$referer = '';
			}

			$this->model_tool_online->addOnline($ip, $this->customer->getId(), $url, $referer);
		}


            $this->document->addScript('catalog/view/theme/default/static/js/core.js', 'footer');
            $this->document->addScript('catalog/view/theme/default/js/main.js', 'footer');
            
		$data['scripts'] = $this->document->getScripts('footer');
		$data['styles'] = $this->document->getStyles('footer');
		

            $data["text_powered_footer_left"] = sprintf($this->language->get("text_powered_footer_left"), $this->url->link("information/information", "information_id=3", true), $this->url->link("information/information", "information_id=5", true));
            
		return $this->load->view('common/footer', $data);
	}
}
