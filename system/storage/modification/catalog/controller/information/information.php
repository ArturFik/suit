<?php
class ControllerInformationInformation extends Controller {
	public function index() {
		$this->load->language('information/information');

		$this->load->model('catalog/information');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		if (isset($this->request->get['information_id'])) {
			$information_id = (int)$this->request->get['information_id'];
		} else {
			$information_id = 0;
		}

		$information_info = $this->model_catalog_information->getInformation($information_id);

		if ($information_info) {
			$this->document->setTitle(!empty($information_info['meta_title']) && $this->config->get('mlseo_enabled') ? $information_info['meta_title'] : $information_info['title']);
			$this->document->setDescription($information_info['meta_description']);
			$this->document->setKeywords($information_info['meta_keyword']);

			$data['breadcrumbs'][] = array(
				'text' => $information_info['title'],
				'href' => $this->url->link('information/information', 'information_id=' .  $information_id)
			);

			$data['heading_title'] = !empty($information_info['seo_h1']) && $this->config->get('mlseo_enabled') ? $information_info['seo_h1'] : $information_info['title'];

        if (version_compare(VERSION, '2', '>=')) {
          $data['seo_h1'] = !empty($information_info['seo_h1']) ? $information_info['seo_h1'] : '';
          $data['seo_h2'] = !empty($information_info['seo_h2']) ? $information_info['seo_h2'] : '';
          $data['seo_h3'] = !empty($information_info['seo_h3']) ? $information_info['seo_h3'] : '';
        } else {
          $this->data['seo_h1'] = !empty($information_info['seo_h1']) ? $information_info['seo_h1'] : '';
          $this->data['seo_h2'] = !empty($information_info['seo_h2']) ? $information_info['seo_h2'] : '';
          $this->data['seo_h3'] = !empty($information_info['seo_h3']) ? $information_info['seo_h3'] : '';
        }

        $this->load->model('tool/seo_package');

        if ($this->config->get('mlseo_opengraph')) {
          if (version_compare(VERSION, '2', '>=')) {
            $this->document->addSeoMeta($this->model_tool_seo_package->rich_snippet('opengraph', 'info', $data));
          } else {
            $this->document->addSeoMeta($this->model_tool_seo_package->rich_snippet('opengraph', 'info', $this->data));
          }

          if ($this->config->get('mlseo_microdata')) {
            if (version_compare(VERSION, '2', '>=')) {
              $this->document->addSeoMeta($this->model_tool_seo_package->rich_snippet('microdata', 'information', $data));
            } else {
              $this->document->addSeoMeta($this->model_tool_seo_package->rich_snippet('microdata', 'information', $this->data));
            }
          }
        }

        if (!empty($information_info['meta_robots'])) {
          $this->document->addSeoMeta('<meta name="robots" content="'.$information_info['meta_robots'].'"/>'."\n");
        }
      

			$data['description'] = html_entity_decode($information_info['description'], ENT_QUOTES, 'UTF-8');

      $seoHeadings = $this->config->get('mlseo_headings');

      if ($this->config->get('mlseo_enabled')) {
        $extraTopDesc = $extraBottomDesc = '';

        foreach (array('h1', 'h2', 'h3') as $headingType) {
          if (!empty($seoHeadings['information'][$headingType]['pos']) && !empty($information_info['seo_'.$headingType]) && $seoHeadings['information'][$headingType]['pos'] == 'topdesc') {
            $extraTopDesc .= '<'.$headingType.' class="seo_'.$headingType.'"'.(!empty($seoHeadings['information'][$headingType]['css']) ? ' style="'.$seoHeadings['information'][$headingType]['css'].'"' : '').'>'.$information_info['seo_'.$headingType].'</'.$headingType.'>';
          }

          if (!empty($seoHeadings['information'][$headingType]['pos']) && !empty($information_info['seo_'.$headingType]) && $seoHeadings['information'][$headingType]['pos'] == 'botdesc') {
            $extraBottomDesc .= '<'.$headingType.' class="seo_'.$headingType.'"'.(!empty($seoHeadings['information'][$headingType]['css']) ? ' style="'.$seoHeadings['information'][$headingType]['css'].'"' : '').'>'.$information_info['seo_'.$headingType].'</'.$headingType.'>';
          }
        }

        if ($this->config->get('mlseo_autolink')) {
          $autolinks = $this->db->query("SELECT * FROM " . DB_PREFIX . "url_autolink WHERE language_id =  '". (int) $this->config->get('config_language_id') . "'")->rows;

          foreach ($autolinks as $autolink) {
            $data['description'] = preg_replace('/<a\b[^>]*>[^<]*<\/a>(*SKIP)(*FAIL)|\b('.$autolink['query'].')\b/u', '<a href="'.$autolink['redirect'].'">$1</a>', $data['description']);
          }
        }

        $data['description'] = $extraTopDesc . $data['description'] . $extraBottomDesc;
      }
      

			$data['continue'] = $this->url->link('common/home');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('information/information', $data));
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_error'),
				'href' => $this->url->link('information/information', 'information_id=' . $information_id)
			);

			$this->document->setTitle($this->language->get('text_error'));

			$data['heading_title'] = $this->language->get('text_error');

			$data['text_error'] = $this->language->get('text_error');

			$data['continue'] = $this->url->link('common/home');

			$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('error/not_found', $data));
		}
	}

	public function agree() {
		$this->load->model('catalog/information');

		if (isset($this->request->get['information_id'])) {
			$information_id = (int)$this->request->get['information_id'];
		} else {
			$information_id = 0;
		}

		$output = '';

		$information_info = $this->model_catalog_information->getInformation($information_id);

		if ($information_info) {
			$output .= html_entity_decode($information_info['description'], ENT_QUOTES, 'UTF-8') . "\n";
		}

		$this->response->addHeader('X-Robots-Tag: noindex');

		$this->response->setOutput($output);
	}
}
