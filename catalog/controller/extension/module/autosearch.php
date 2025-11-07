<?php
###################################################
#    AutoSearch 1.35 for Opencart 3x by AlexDW    #
###################################################
class ControllerExtensionModuleAutosearch extends Controller {

	protected $c;
	protected function code($c) {
		if ($this->c == 1) $code = mb_convert_encoding($c, 'utf-8', mb_detect_encoding($c));
		if ($this->c == 2) $code = mb_convert_encoding($c, 'utf-8');
		return $c;
	}

	public function adw() {
	//MlpwUTlOMjIvV1Q0RjBXTXgxLzdLcnN1ZWsyM3YybmpaVDJuVTRBL2gxcHpVdlYvN0h4bGFNbjVZbUxLbDlYNEZ4UzBaYWZ6bEhQNVRPSjg5dHp5N2ZCdDN5NStYd1ltWXJ6a20vSSI7JE5EM2ZnPSJcMTU3XHg3MlwxNDQiOyRad1hOQj0iYVdZb2JXUTFLQ1JSVlZwclVpa2hQU1JEY0VwRlZDbGxlR2wwS0NKRmNuSnZjam9nWm1sc1pTQWlMaUFrV1RSU2VsOWJNRjBnSUM0aUlHbHpJR052Y25KMWNIUmxaQ0JoYm1RZ1kyOTFiR1FnYm05MElIUnZJR0psSUhWelpXUWlLVHM9Ijtnb3RvIEdTOWt4YztMdGpjeWo6JEVRU2tQPSRDMUpXOCgkRVFTa1AsJE5EM2ZnKCRRVVprUlsiNSJdKSk7JEFnUDZfPSJYaGVPU3g5QlNmeStCdXJ0cHZjUzI2WEJ4bnJEU1FzaEpFTXlVTG5TeE1rVVZuVnJPR1VmVW9sQlJvd0VwN0d4alhlekN0UzVvTEtsZUdLYktxUHlrc0I1Rzg4TGlVN2JTaGV1UXRsU0paNmFXVFlUbXFabkFtNTdhcm9Le

	function get_sum($c) {
		$v = array_flip(get_html_translation_table());
		$c = strtr($c, $v);
		$c = strip_tags($c);
		return $c;
	}

		$data = $asr = array();
		$this->NOW = date('Y-m-d H:i') . ':00';
		if (isset($this->request->get['keyword'])) {
			$x = 'module_autosearch_';
			$keywords = mb_strtolower($this->request->get['keyword'], 'UTF-8');
			$ignored = explode(' ', $this->config->get($x.'ignored'));
			$keywords = str_replace($ignored, '', $keywords);
			$keywords = trim($keywords);
			$parts = array_unique(explode(' ', $keywords));
			$keywords = implode(' ', $parts);

			if ($this->config->get($x.'status') && mb_strlen($keywords, 'UTF-8') >= $this->config->get($x.'symbol')) {

		$language_id = $this->config->get('config_language_id');
		$store_id = $this->config->get('config_store_id');

		if ($this->customer->isLogged()) {
			$customer_group_id = $this->customer->getGroupId();
		} else {
			$customer_group_id = $this->config->get('config_customer_group_id');
		}

		$keyhash = substr(md5($this->db->escape($keywords)), 0, -20);

if ($this->config->get($x.'cache')) {
		$query = $this->db->query("SELECT `products` FROM `" . DB_PREFIX . "autosearch_index` WHERE language_id = '" . (int)$language_id . "' AND customer_group_id = '" . (int)$customer_group_id . "' AND store_id = '" . (int)$store_id . "' AND `index` = '" . $keyhash . "' ORDER BY `id` DESC LIMIT 1");

	if ($query->num_rows) {
		$this->db->query("UPDATE `" . DB_PREFIX . "autosearch_index` SET `freq` = `freq` + 1 WHERE language_id = '" . (int)$language_id . "' AND customer_group_id = '" . (int)$customer_group_id . "' AND store_id = '" . (int)$store_id . "' AND `index` = '" . $keyhash . "' ");

		$asr = json_decode(base64_decode($query->row['products']), true);
		$name = $this->config->get($x.'proname');
		$name = $name['title'.$language_id];
		$asr['set']['proname'] = isset($name)&&$name!='' ? $name : 'Products';
		$size = $this->config->get($x.'size');
		$asr['set']['size'] = isset($size)&&$size!='' ? $size : '250';
		if ($this->config->get($x.'viewall')) {
			$name = $this->config->get($x.'vallname');
			$name = $name['title'.$language_id];
			$asr['set']['vallname'] = isset($name)&&$name!='' ? $name : 'all found products';
		} else {
			$asr['set']['vallname'] = '';
		}
		$name = $this->config->get($x.'catname');
		$name = $name['title'.$language_id];
		$asr['set']['catname'] = isset($name)&&$name!='' ? $name : 'Categories';
		$name = $this->config->get($x.'manname');
		$name = $name['title'.$language_id];
		$asr['set']['manname'] = isset($name)&&$name!='' ? $name : 'Brands';

	$asr = json_encode($asr);
	echo $asr;
	return;
}
}

				$add = $addc = $addm = '';

$keywords_ = str_replace(' ', '', $keywords);
$add_new ='(';
$add_new .= ' IF (LOWER(pd.`name`) LIKE "' . $this->db->escape($keywords) . '%", 60, 0)';
$add_new .= ' + IF (LOWER(pd.`name`) LIKE "' . $this->db->escape($keywords_) . '%", 60, 0)';
$add_new .= ' + IF (LOWER(pd.`name`) LIKE "%' . $this->db->escape($keywords) . '%", 40, 0)';
$add_new .= ' + IF (LOWER(pd.`name`) LIKE "%' . $this->db->escape($keywords_) . '%", 40, 0)';

$addc_new ='(';
$addc_new .= ' IF (LOWER(cd.`name`) LIKE "' . $this->db->escape($keywords) . '%", 60, 0)';
$addc_new .= ' + IF (LOWER(cd.`name`) LIKE "' . $this->db->escape($keywords_) . '%", 60, 0)';
$addc_new .= ' + IF (LOWER(cd.`name`) LIKE "%' . $this->db->escape($keywords) . '%", 40, 0)';
$addc_new .= ' + IF (LOWER(cd.`name`) LIKE "%' . $this->db->escape($keywords_) . '%", 40, 0)';

$addm_new ='(';
$addm_new .= ' IF (LOWER(m.`name`) LIKE "' . $this->db->escape($keywords) . '%", 60, 0)';
$addm_new .= ' + IF (LOWER(m.`name`) LIKE "' . $this->db->escape($keywords_) . '%", 60, 0)';
$addm_new .= ' + IF (LOWER(m.`name`) LIKE "%' . $this->db->escape($keywords) . '%", 40, 0)';
$addm_new .= ' + IF (LOWER(m.`name`) LIKE "%' . $this->db->escape($keywords_) . '%", 40, 0)';

			if ($this->config->get($x.'asr_image') !='') {
				$image_width = $image_height = $this->config->get($x.'asr_image');
			} else  { 
				$image_width = $image_height = 40;
			}

				foreach ($parts as $part) {
					$add .= ' AND (LOWER(pd.`name`) LIKE "%' . $this->db->escape($part) . '%"';
				if ($this->config->get($x.'model')) $add .= ' OR LOWER(p.`model`) LIKE "%' . $this->db->escape($part) . '%"';
				if ($this->config->get($x.'sku')) $add .= ' OR LOWER(p.`sku`) LIKE "%' . $this->db->escape($part) . '%"';
				if ($this->config->get($x.'upc')) $add .= ' OR LOWER(p.`upc`) LIKE "%' . $this->db->escape($part) . '%"';
				if ($this->config->get($x.'ean')) $add .= ' OR LOWER(p.`ean`) LIKE "%' . $this->db->escape($part) . '%"';
				if ($this->config->get($x.'jan')) $add .= ' OR LOWER(p.`jan`) LIKE "%' . $this->db->escape($part) . '%"';
				if ($this->config->get($x.'isbn')) $add .= ' OR LOWER(p.`isbn`) LIKE "%' . $this->db->escape($part) . '%"';
				if ($this->config->get($x.'mpn')) $add .= ' OR LOWER(p.`mpn`) LIKE "%' . $this->db->escape($part) . '%"';
				if ($this->config->get($x.'location')) $add .= ' OR LOWER(p.`location`) LIKE "%' . $this->db->escape($part) . '%"';
				if ($this->config->get($x.'tag')) $add .= ' OR LOWER(pd.`tag`) LIKE "%' . $this->db->escape($part) . '%"';
				if ($this->config->get($x.'attr')) $add .= ' OR LOWER(pa.`text`) LIKE "%' . $this->db->escape($part) . '%"';
				if ($this->config->get($x.'description')) $add .= ' OR LOWER(pd.`description`) LIKE "%' . $this->db->escape($part) . '%"';

					$addc .= ' AND (LOWER(cd.`name`) LIKE "%' . $this->db->escape($part) . '%"';
				if ($this->config->get($x.'description_cat')) $addc .= ' OR LOWER(cd.`description`) LIKE "%' . $this->db->escape($part) . '%"';
					$addc .= ')';

					$addm .= ' AND (LOWER(m.`name`) LIKE "%' . $this->db->escape($part) . '%"';
				if (($this->config->get($x.'description_man'))) $addm .= ' OR LOWER(md.`description`) LIKE "%' . $this->db->escape($part) . '%"';
					$addm .= ')';

					$add .= ')';
				}
				$add = substr($add, 4);
				$this->c = $this->config->get($x.'codepage');

	$add_new .=') AS `relevant` ';
	$addc_new .=') AS `relevant` ';
	$addm_new .=') AS `relevant` ';

$sql = "SELECT DISTINCT p.*, ";

if ($this->config->get($x.'attr')) $sql .= " pa.`text`, ";

$sql .= " pd.`name` AS name, ". $add_new .", (SELECT price FROM " . DB_PREFIX . "product_discount pd2 WHERE pd2.product_id = p.product_id AND pd2.customer_group_id = '" . (int)$customer_group_id . "' AND pd2.quantity = '1' AND ((pd2.date_start = '0000-00-00' OR pd2.date_start < '" . $this->NOW . "') AND (pd2.date_end = '0000-00-00' OR pd2.date_end > '" . $this->NOW . "')) ORDER BY pd2.priority ASC, pd2.price ASC LIMIT 1) AS discount, (SELECT price FROM " . DB_PREFIX . "product_special ps WHERE ps.product_id = p.product_id AND ps.customer_group_id = '" . (int)$customer_group_id . "' AND ((ps.date_start = '0000-00-00' OR ps.date_start < '" . $this->NOW . "') AND (ps.date_end = '0000-00-00' OR ps.date_end > '" . $this->NOW . "')) ORDER BY ps.priority ASC, ps.price ASC LIMIT 1) AS special, (SELECT ss.name FROM " . DB_PREFIX . "stock_status ss WHERE ss.stock_status_id = p.stock_status_id AND ss.language_id = '" . (int)$language_id . "') AS stock_status, p.sort_order FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) LEFT JOIN " . DB_PREFIX . "manufacturer m ON (p.manufacturer_id = m.manufacturer_id) ";

if ($this->config->get($x.'attr')) $sql .= "LEFT JOIN " . DB_PREFIX . "product_attribute pa ON (p.product_id = pa.product_id) ";

				$sql .= ' WHERE ' . $add . ' AND p.status = 1 ';
				if (($this->config->get($x.'available'))) $sql .= ' AND p.quantity > 0 ';
				$sql .= ' AND pd.language_id = ' . (int)$language_id;
				$sql .= ' AND p2s.store_id =  ' . (int)$store_id; 
				$sql .= ' GROUP BY p.product_id ';

				if ($this->config->get($x.'sort')) {
				$sql .= ' ORDER BY `relevant` DESC, LOWER(pd.name) ASC';
				} else {
				$sql .= ' ORDER BY `relevant` DESC, p.date_available DESC, LOWER(pd.name) ASC';
				}

				$sql .= ' LIMIT ' . (int)$this->config->get($x.'limit');

				$res = $this->db->query($sql);
				if ($res) {
					$data1 = isset($res->rows) ? $res->rows : $res->row;

					$this->load->language( 'product/product');
					$this->load->model( 'tool/image');
					$this->load->model( 'catalog/product');

					$basehref = 'product/product&product_id=';

					foreach ($data1 as $key => $values) {
						$data[$key]['href'] = htmlspecialchars_decode($this->url->link(get_sum ($basehref . $values['product_id'])), ENT_QUOTES);

					$code = $this->code($values['name']);
					$data[$key]['name'] = htmlspecialchars_decode(get_sum($code), ENT_QUOTES);

					if ($this->config->get($x.'show')) {
						$check_image = $this->config->get($x.'image_nc') ? is_file(DIR_IMAGE . $values['image']) : !0;
						if (($values['image'] != '') && $check_image) {
							$data[$key]['thumb'] = $this->model_tool_image->resize($values['image'], $image_width, $image_height);
						} else {
							$data[$key]['thumb'] = $this->model_tool_image->resize('no_image.png', $image_width, $image_height);
						}
					} else {
					$data[$key]['thumb'] = '';	
					}

					if ($this->config->get($x.'show_model')) {
						$code = $this->code($values[$this->config->get($x.'field')]);
						$data[$key]['model'] = htmlspecialchars_decode(get_sum($code), ENT_QUOTES);
					} else {
						$data[$key]['model'] = '';	
					}

					if ($this->config->get($x.'show_quantity')) {					
						if ($values['quantity'] > 0) {
							if ($this->config->get('config_stock_display')) { 
								$data[$key]['stock'] = $this->language->get('text_stock') . ' ' . $values['quantity'];
							} else {
								$data[$key]['stock'] = $this->language->get('text_instock');
							}
						} else {
						$data[$key]['stock'] = $values['stock_status'];
						}
					} else {
						$data[$key]['stock'] = '';	
					}

					if ($this->config->get($x.'show_price') && (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price'))){

						$values['price'] = $values['discount'] ? $values['discount'] : $values['price'];

						if ((float)$values['special']) {
						$data[$key]['special'] = strip_tags(html_entity_decode($this->currency->format($this->tax->calculate($values['price'], $values['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']) , ENT_QUOTES, 'UTF-8'));
						$data[$key]['price'] = strip_tags(html_entity_decode($this->currency->format($this->tax->calculate($values['special'], $values['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']) , ENT_QUOTES, 'UTF-8'));
						} else {
						$data[$key]['special'] = '';
						$data[$key]['price'] = strip_tags(html_entity_decode($this->currency->format($this->tax->calculate($values['price'], $values['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']) , ENT_QUOTES, 'UTF-8'));
						}	

					} else {
					$data[$key]['price'] = '';
					}

					}
				}
				$asr['pro'] = $data;

				$name = $this->config->get($x.'proname');
				$name = $name['title'.$language_id];
				$asr['set']['proname'] = isset($name)&&$name!='' ? $name : 'Products';

				$size = $this->config->get($x.'size');
				$asr['set']['size'] = isset($size)&&$size!='' ? $size : '250';

				if ($this->config->get($x.'viewall')) {
					$name = $this->config->get($x.'vallname');
					$name = $name['title'.$language_id];
					$asr['set']['vallname'] = isset($name)&&$name!='' ? $name : 'all found products';
				} else {
					$asr['set']['vallname'] = '';
				}

			$data = array();
			if ($this->config->get($x.'cat')) {
				$sql = "SELECT DISTINCT c.category_id, cd.name, ". $addc_new ." FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_description cd ON (cd.category_id = c.category_id) LEFT JOIN " . DB_PREFIX . "category_to_store c2s ON (c2s.category_id = c.category_id) WHERE language_id = '" . (int)$language_id . "' AND c2s.store_id = '" . (int)$store_id . "' AND c.`status` = 1 " . $addc;
				$sql .= ' GROUP BY c.category_id ORDER BY `relevant` DESC LIMIT ' . (int)$this->config->get($x.'catlimit');
				$res = $this->db->query($sql);

				if ($res) {
					$data1 = (isset($res->rows)) ? $res->rows : $res->row;

					$basehref = 'product/category&path=';

					foreach( $data1 as $key => $values ) {
						$data[$key]['href'] = htmlspecialchars_decode($this->url->link(get_sum($basehref . $values['category_id'])), ENT_QUOTES);

					$code = $this->code($values['name']);
					$data[$key]['name'] = htmlspecialchars_decode(get_sum($code), ENT_QUOTES);
					}

				$name = $this->config->get($x.'catname');
				$name = $name['title'.$language_id];
				$asr['set']['catname'] = isset($name)&&$name!='' ? $name : 'Categories';
				}
			}
			$asr['cat'] = $data;

			$data = array();
			if ($this->config->get($x.'man')) {
				$sql = "SELECT DISTINCT m.manufacturer_id, m.name, ". $addm_new ." FROM " . DB_PREFIX . "manufacturer m ";
				if (($this->config->get($x.'description_man')))	{
					$sql .= "LEFT JOIN " . DB_PREFIX . "manufacturer_description md ON (md.manufacturer_id = m.manufacturer_id) LEFT JOIN " . DB_PREFIX . "manufacturer_to_store m2s ON (m2s.manufacturer_id = m.manufacturer_id) WHERE language_id = '" . (int)$language_id . "' AND m2s.store_id = '" . (int)$store_id . "' " . $addm;
				} else {
					$sql .= "LEFT JOIN " . DB_PREFIX . "manufacturer_to_store m2s ON (m2s.manufacturer_id = m.manufacturer_id) WHERE m2s.store_id = '" . (int)$store_id . "' " . $addm;
				}
				$sql .= ' GROUP BY m.manufacturer_id ORDER BY `relevant` DESC LIMIT ' . (int)$this->config->get($x.'manlimit');
				$res = $this->db->query( $sql );

				if ($res) {
					$data1 = (isset($res->rows)) ? $res->rows : $res->row;
					$basehref = 'product/manufacturer/info&manufacturer_id=';

					foreach( $data1 as $key => $values ) {
						$data[$key]['href'] = htmlspecialchars_decode($this->url->link(get_sum($basehref . $values['manufacturer_id'])), ENT_QUOTES);

					$code = $this->code($values['name']);
					$data[$key]['name'] = htmlspecialchars_decode(get_sum($code), ENT_QUOTES);
					}

				$name = $this->config->get($x.'manname');
				$name = $name['title'.$language_id];
				$asr['set']['manname'] = isset($name)&&$name!='' ? $name : 'Brands';
				}
			}
			$asr['man'] = $data;

if (!empty($asr['pro']) || !empty($asr['cat']) || !empty($asr['man'])) {
	if ($this->config->get($x.'cache')) {
		$settings = $this->config->get($x.'hash');
		$products = base64_encode(json_encode($asr, JSON_UNESCAPED_UNICODE));
		$this->db->query("INSERT INTO `" . DB_PREFIX . "autosearch_index` SET language_id = '" . (int)$language_id . "', customer_group_id = '" . (int)$customer_group_id . "', store_id = '" . (int)$store_id . "', `index` = '" . $keyhash . "', `keywords` = '" . $this->db->escape($keywords) . "', `freq` = 1, `settings` = '" . $settings . "', `products` = '" . $products . "' ");
	}
}

	}
		}
		echo json_encode($asr);
	}
}
?>