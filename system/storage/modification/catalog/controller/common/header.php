<?php
class ControllerCommonHeader extends Controller {
	public function index() {

            //OCP Oneclick Order
            $data['ocpoc_settings'] = $this->config->get('ocp_oneclick_settings');
            $store_id = $this->config->get('config_store_id');
            $customer_group_id = ($this->customer->isLogged())?$this->customer->getGroupId():$this->config->get('config_customer_group_id');
            if((isset($data['ocpoc_settings']['stores']) && in_array($store_id, $data['ocpoc_settings']['stores'])) || (isset($data['ocpoc_settings']['customer_groups']) && in_array($customer_group_id, $data['ocpoc_settings']['customer_groups']))){
                $data['ocpoc_settings']['status'] = false;
            }
            if($data['ocpoc_settings']['status']) {
                $this->document->addScript('catalog/view/javascript/ocp_oneclick/jquery.magnific-popup.ocp.min.js');
                $this->document->addScript('catalog/view/javascript/ocp_oneclick/script.js');
                $this->document->addStyle('catalog/view/javascript/ocp_oneclick/magnific-popup.ocp.css');
                $this->document->addStyle('catalog/view/theme/default/stylesheet/ocp_oneclick.css');
                if(!empty($data['ocpoc_settings']['telephone_mask'])){
                    $this->document->addScript('catalog/view/javascript/ocp_oneclick/jquery.maskedinput.min.js');
                }
            }
            //END OCP Oneclick Order
            

      $this->load->model('tool/seo_package');
      $this->model_tool_seo_package->metaRobots();
      $this->model_tool_seo_package->checkCanonical();
      $this->model_tool_seo_package->hrefLang();
      $this->model_tool_seo_package->richSnippets();
      $this->model_tool_seo_package->ggAnalytics();

      if (version_compare(VERSION, '2', '>=')) {
        $data['mlseo_meta'] = $this->document->renderSeoMeta();
      } else {
        $this->data['mlseo_meta'] = $this->document->renderSeoMeta();
      }

      $seoTitlePrefix = $this->config->get('mlseo_title_prefix');
      $seoTitlePrefix = isset($seoTitlePrefix[$this->config->get('config_store_id').$this->config->get('config_language_id')]) ? $seoTitlePrefix[$this->config->get('config_store_id').$this->config->get('config_language_id')] : '';

      $seoTitleSuffix = $this->config->get('mlseo_title_suffix');
      $seoTitleSuffix = isset($seoTitleSuffix[$this->config->get('config_store_id').$this->config->get('config_language_id')]) ? $seoTitleSuffix[$this->config->get('config_store_id').$this->config->get('config_language_id')] : '';

      if (version_compare(VERSION, '2', '<')) {
        if ($this->config->get('mlseo_fix_search')) {
          $this->data['mlseo_fix_search'] = true;
          $this->data['csp_search_url'] = $this->url->link('product/search');
          $this->data['csp_search_url_param'] = $this->url->link('product/search', 'search=%search%');
        }
      }
      

      $seo_meta = $this->config->get('mlseo_store');

      if (!empty($seo_meta[$this->config->get('config_store_id')]['gg_analytics']) && !empty($seo_meta[$this->config->get('config_store_id')]['gg_enhanced'])) {
        $ggAnalyticsCode = html_entity_decode($seo_meta[$this->config->get('config_store_id')]['analytics'], ENT_QUOTES, 'UTF-8');

        // Google Analytics 4
        if (substr($ggAnalyticsCode, 0, 2) == 'G-') {
          $this->document->addScript('catalog/view/javascript/gkdAnalytics.js', 'header');
        } else {
          $this->document->addScript('catalog/view/javascript/gkdAnalyticsGa.js', 'header');
        }
      }
      

            // Подключение дополнительных стилей и скриптов
            $this->document->addStyle('catalog/view/theme/default/static/css/owl.carousel.css');
            $this->document->addStyle('catalog/view/theme/default/static/css/owl.theme.default.css');
            $this->document->addStyle('catalog/view/theme/default/style/main.css');
            $this->document->addStyle('catalog/view/theme/default/style/custom.css');           

			$this->document->addScript('catalog/view/theme/default/js/custom.js');
            $this->document->addScript('catalog/view/theme/default/static/js/owl.carousel.js');
            

			// AutoSearch
					if ($this->config->get('module_autosearch_status') && is_file(DIR_SYSTEM . 'library/adw/autosearch.php')) {
						$this->registry->set('autosearch', new Adw\Autosearch($this->registry));
						$x = $this->autosearch->mg();
						if ($x) {
							if (!empty($x[0])) $this->document->addStyle($x[0]);
							if (!empty($x[1])) $this->document->addStyle($x[1]);
							if (!empty($x[2])) $this->document->addScript($x[2]);
							if (!empty($x[3])) $this->document->addScript($x[3]);
						}
					}
			// AutoSearch
			
		// Analytics
		$this->load->model('setting/extension');

		$data['analytics'] = array();

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		
        //$data['title'] = $this->document->getTitle();

        if (!empty($this->request->get['route']) && $this->request->get['route'] !== 'common/home') {
          $data["title"] = (isset($seoTitlePrefix) ? $seoTitlePrefix : '') . $this->document->getTitle() . (isset($seoTitleSuffix) ? $seoTitleSuffix : '');
        } else {
          $data["title"] = $this->document->getTitle();
        }
      

		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['name'] = $this->config->get('config_name');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));
		
		$data['home'] = $this->url->link('common/home');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');

            $data['email'] = $this->config->get('config_email');
            foreach ($this->model_catalog_information->getInformations() as $result) {
                if ($result['top']) {
                    $data['informations'][] = array(
                        'title' => $result['title'],
                        'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
                    );
                }
            }
            $ids_category_articles = explode(',', $this->language->get('ids_category_articles'));
			$this->load->model('blog/blog_category');
			foreach($ids_category_articles as $category_articles_id){
				$blog_category_info = $this->model_blog_blog_category->getBlogCategory($category_articles_id);
				if ($blog_category_info) {
					$data['informations'][] = array(
						'title' => $blog_category_info['name'],
						'href'  => $this->url->link('blog/category', 'blogpath=' . $category_articles_id)
					);
				}
			}
            
            $data['informations'][] = array(
                'title' => $this->language->get('text_contact_n'),
                'href'  => $data['contact']
            );
            $data['compare'] = $this->url->link('product/compare');

            $data['count_compare'] = isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0;
            
            
		
		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');
		$data['menu'] = $this->load->controller('common/menu');


            $formcreator = new formcreator($this->registry);
		    $data['formcreator_id42'] = $formcreator->initFeedback(42);
            
		return $this->load->view('common/header', $data);
	}
}
