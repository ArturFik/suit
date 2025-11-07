<?php
class ModelNewsletterCitemplate extends Model {
	public function addCitemplate($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "citemplate SET sort_order = '" . (int)$data['sort_order'] . "', coupon_id = '" . (int)$data['coupon_id'] . "', image_width = '" . (int)$data['image_width'] . "', image_height = '" . (int)$data['image_height'] . "', display_price = '" . (int)$data['display_price'] . "'");

		$citemplate_id = $this->db->getLastId();

		foreach ($data['citemplate_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "citemplate_description SET citemplate_id = '" . (int)$citemplate_id . "', language_id = '" . (int)$language_id . "', title = '" . $this->db->escape($value['title']) . "', description = '" . $this->db->escape($value['description']) . "'");
		}

		if (isset($data['product'])) {
			foreach ($data['product'] as $product_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "citemplate_to_product SET product_id = '" . (int)$product_id . "', citemplate_id = '" . (int)$citemplate_id . "'");
			}
		}

		return $citemplate_id;
	}

	public function editCitemplate($citemplate_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "citemplate SET sort_order = '" . (int)$data['sort_order'] . "', coupon_id = '" . (int)$data['coupon_id'] . "', image_width = '" . (int)$data['image_width'] . "', image_height = '" . (int)$data['image_height'] . "', display_price = '" . (int)$data['display_price'] . "' WHERE citemplate_id = '" . (int)$citemplate_id . "'");

		$this->db->query("DELETE FROM " . DB_PREFIX . "citemplate_description WHERE citemplate_id = '" . (int)$citemplate_id . "'");

		foreach ($data['citemplate_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "citemplate_description SET citemplate_id = '" . (int)$citemplate_id . "', language_id = '" . (int)$language_id . "', title = '" . $this->db->escape($value['title']) . "', description = '" . $this->db->escape($value['description']) . "'");
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "citemplate_to_product WHERE citemplate_id = '" . (int)$citemplate_id . "'");

		if (isset($data['product'])) {
			foreach ($data['product'] as $product_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "citemplate_to_product SET product_id = '" . (int)$product_id . "', citemplate_id = '" . (int)$citemplate_id . "'");
			}
		}
	}

	public function deleteCitemplate($citemplate_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "citemplate WHERE citemplate_id = '" . (int)$citemplate_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "citemplate_description WHERE citemplate_id = '" . (int)$citemplate_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "citemplate_to_product WHERE citemplate_id = '" . (int)$citemplate_id . "'");
	}

	public function getCitemplate($citemplate_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "citemplate WHERE citemplate_id = '" . (int)$citemplate_id . "'");

		return $query->row;
	}

	public function getCitemplatefull($citemplate_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "citemplate c left join ". DB_PREFIX ."citemplate_description cd on (c.citemplate_id = cd.citemplate_id) WHERE c.citemplate_id = '" . (int)$citemplate_id . "' AND cd.language_id = '". (int)$this->config->get('config_language_id') ."'");

		return $query->row;
	}

	public function getCitemplateProducts($citemplate_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "citemplate_to_product WHERE citemplate_id = '" . (int)$citemplate_id . "'");

		$products = array();
		foreach ($query->rows as $result) {
			$products[] = $result['product_id'];
		}

		return $products;
	}

	public function getCitemplates($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "citemplate i LEFT JOIN " . DB_PREFIX . "citemplate_description id ON (i.citemplate_id = id.citemplate_id) WHERE id.language_id = '" . (int)$this->config->get('config_language_id') . "'";

		$sort_data = array(
			'id.title',
			'i.sort_order'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY id.title";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getCitemplateDescriptions($citemplate_id) {
		$citemplate_description_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "citemplate_description WHERE citemplate_id = '" . (int)$citemplate_id . "'");

		foreach ($query->rows as $result) {
			$citemplate_description_data[$result['language_id']] = array(
				'title'            => $result['title'],
				'description'      => $result['description']
			);
		}

		return $citemplate_description_data;
	}

	public function getTotalCitemplates() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "citemplate");

		return $query->row['total'];
	}
}