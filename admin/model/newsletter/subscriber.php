<?php
class ModelNewsletterSubscriber extends Model {
	public function sendManualSubscriber($data) {

		$subscriber_info = $this->getSubscriberByEmail($data['email']);
		if($subscriber_info) {
			$find = array(
				'{LOGO}',
				'{STORE_NAME}',
				'{STORE_LINK}',
				'{NAME}',
				'{EMAIL}',
				'{CONFIRMATION_LINK}',
				'{UNSUBSCRIBE_LINK}',
			);

			$this->load->model('setting/setting');
			$store_info = $this->model_setting_setting->getSetting('config', $subscriber_info['store_id']);

			if(!isset($store_info['config_url'])) {
				$store_info['config_url'] = HTTP_CATALOG;
			}

			if(!isset($store_info['config_ssl'])) {
				$store_info['config_ssl'] = HTTPS_CATALOG;
			}

			$catalogurl = new Url($store_info['config_url'], $store_info['config_ssl']);
			$catalog_url = $this->request->server['HTTPS'] ? $store_info['config_ssl'] : $store_info['config_url'];

			if (is_file(DIR_IMAGE . $store_info['config_logo'])) {
				$logo = $catalog_url . 'image/' . $store_info['config_logo'];
			} else {
				$logo = '';
			}

			$home_href = $catalog_url;

			$replace = array(
				'LOGO'					=> '<img src="'. $logo .'" alt="'. $store_info['config_name'] .'" title="'. $store_info['config_name'] .'" />',
				'STORE_NAME'			=> $store_info['config_name'],
				'STORE_LINK'				=> $catalog_url,
				'NAME'					=> $subscriber_info['name'],
				'EMAIL'					=> $subscriber_info['email'],
				'CONFIRMATION_LINK'		=> $catalogurl->link('newsletter/cinewsletter/verify', 'key='. $subscriber_info['token_id'], true),
				'UNSUBSCRIBE_LINK'		=> $catalogurl->link('newsletter/cinewsletter/unsubscribe', 'key='. $subscriber_info['token_id'], true),
			);

			$subject = str_replace($find, $replace, $data['subject']);

			$message = str_replace($find, $replace, $data['message']);

			$mail = new Mail($this->config->get('config_mail_engine'));
			$mail->parameter = $this->config->get('config_mail_parameter');
			$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
			$mail->smtp_username = $this->config->get('config_mail_smtp_username');
			$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
			$mail->smtp_port = $this->config->get('config_mail_smtp_port');
			$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

			$mail->setTo($subscriber_info['email']);
			$mail->setFrom($store_info['config_email']);
			$mail->setReplyTo($store_info['config_email']);
			$mail->setSender(html_entity_decode($store_info['config_name'], ENT_QUOTES, 'UTF-8'));
			$mail->setSubject(html_entity_decode($subject, ENT_QUOTES, 'UTF-8'));
			$mail->setHtml(html_entity_decode($message, ENT_QUOTES, 'UTF-8'));
			$mail->send();
		}
	}

	public function deleteSubscriber($newsletter_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "cinewsletter WHERE newsletter_id = '" . (int)$newsletter_id . "'");
	}

	public function getSubscriber($newsletter_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "cinewsletter WHERE newsletter_id = '" . (int)$newsletter_id . "'");

		return $query->row;
	}

	public function getSubscribers($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "cinewsletter WHERE newsletter_id > 0";

		$implode = array();

		if (!empty($data['filter_name'])) {
			$implode[] = "name LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
		}

		if (!empty($data['filter_email'])) {
			$implode[] = "email LIKE '" . $this->db->escape($data['filter_email']) . "%'";
		}

		if (!empty($data['filter_ip'])) {
			$implode[] = "ip = '" . $this->db->escape($data['filter_ip']) . "'";
		}

		if (isset($data['filter_account']) && !is_null($data['filter_account'])) {
			$implode[] = "account_register = '" . (int)$data['filter_account'] . "'";
		}

		if (isset($data['filter_status']) && !is_null($data['filter_status'])) {
			$implode[] = "status = '" . (int)$data['filter_status'] . "'";
		}

		if (isset($data['filter_store']) && !is_null($data['filter_store'])) {
			$implode[] = "store_id = '" . (int)$data['filter_store'] . "'";
		}

		if (!empty($data['filter_date_added'])) {
			$implode[] = "DATE(date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
		}

		if ($implode) {
			$sql .= " AND " . implode(" AND ", $implode);
		}

		$sort_data = array(
			'name',
			'email',
			'store_id',
			'account_register',
			'status',
			'date_added',
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY name";
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

	public function getTotalSubscribers($data = array()) {

		$sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "cinewsletter WHERE newsletter_id > 0";

		$implode = array();

		if (!empty($data['filter_name'])) {
			$implode[] = "name LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
		}

		if (!empty($data['filter_email'])) {
			$implode[] = "email LIKE '" . $this->db->escape($data['filter_email']) . "%'";
		}

		if (!empty($data['filter_ip'])) {
			$implode[] = "ip = '" . $this->db->escape($data['filter_ip']) . "'";
		}

		if (isset($data['filter_account']) && !is_null($data['filter_account'])) {
			$implode[] = "account_register = '" . (int)$data['filter_account'] . "'";
		}

		if (isset($data['filter_status']) && !is_null($data['filter_status'])) {
			$implode[] = "status = '" . (int)$data['filter_status'] . "'";
		}

		if (isset($data['filter_store']) && !is_null($data['filter_store'])) {
			$implode[] = "store_id = '" . (int)$data['filter_store'] . "'";
		}

		if (!empty($data['filter_date_added'])) {
			$implode[] = "DATE(date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
		}

		if ($implode) {
			$sql .= " AND " . implode(" AND ", $implode);
		}

		$query = $this->db->query($sql);

		return $query->row['total'];
	}

	public function getAllSubscribers($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "cinewsletter WHERE newsletter_id > 0";

		$sql .= " ORDER BY date_added DESC";

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getTotalSubscribersByDay() {
		$implode = array();

		$subscriber_data = array();

		for ($i = 0; $i < 24; $i++) {
			$subscriber_data[$i] = array(
				'hour'  => $i,
				'total' => 0
			);
		}

		$query = $this->db->query("SELECT COUNT(*) AS total, HOUR(date_added) AS hour FROM `" . DB_PREFIX . "cinewsletter` WHERE DATE(date_added) = DATE(NOW()) GROUP BY HOUR(date_added) ORDER BY date_added ASC");

		foreach ($query->rows as $result) {
			$subscriber_data[$result['hour']] = array(
				'hour'  => $result['hour'],
				'total' => $result['total']
			);
		}

		return $subscriber_data;
	}

	public function getTotalSubscribersByWeek() {

		$subscriber_data = array();

		$date_start = strtotime('-' . date('w') . ' days');

		for ($i = 0; $i < 7; $i++) {
			$date = date('Y-m-d', $date_start + ($i * 86400));

			$subscriber_data[date('w', strtotime($date))] = array(
				'day'   => date('D', strtotime($date)),
				'total' => 0
			);
		}

		$query = $this->db->query("SELECT COUNT(*) AS total, date_added FROM `" . DB_PREFIX . "cinewsletter` WHERE DATE(date_added) >= DATE('" . $this->db->escape(date('Y-m-d', $date_start)) . "') GROUP BY DAYNAME(date_added)");

		foreach ($query->rows as $result) {
			$subscriber_data[date('w', strtotime($result['date_added']))] = array(
				'day'   => date('D', strtotime($result['date_added'])),
				'total' => $result['total']
			);
		}

		return $subscriber_data;
	}

	public function getTotalSubscribersByMonth() {
		$subscriber_data = array();

		for ($i = 1; $i <= date('t'); $i++) {
			$date = date('Y') . '-' . date('m') . '-' . $i;

			$subscriber_data[date('j', strtotime($date))] = array(
				'day'   => date('d', strtotime($date)),
				'total' => 0
			);
		}

		$query = $this->db->query("SELECT COUNT(*) AS total, date_added FROM `" . DB_PREFIX . "cinewsletter` WHERE DATE(date_added) >= '" . $this->db->escape(date('Y') . '-' . date('m') . '-1') . "' GROUP BY DATE(date_added)");

		foreach ($query->rows as $result) {
			$subscriber_data[date('j', strtotime($result['date_added']))] = array(
				'day'   => date('d', strtotime($result['date_added'])),
				'total' => $result['total']
			);
		}

		return $subscriber_data;
	}

	public function getTotalSubscribersByYear() {
		$subscriber_data = array();

		for ($i = 1; $i <= 12; $i++) {
			$subscriber_data[$i] = array(
				'month' => date('M', mktime(0, 0, 0, $i)),
				'total' => 0
			);
		}

		$query = $this->db->query("SELECT COUNT(*) AS total, date_added FROM `" . DB_PREFIX . "cinewsletter` WHERE YEAR(date_added) = YEAR(NOW()) GROUP BY MONTH(date_added)");

		foreach ($query->rows as $result) {
			$subscriber_data[date('n', strtotime($result['date_added']))] = array(
				'month' => date('M', strtotime($result['date_added'])),
				'total' => $result['total']
			);
		}

		return $subscriber_data;
	}


	protected function getToken() {
	  $token = 'CI_'.token(5);
	  $query = $this->db->query("SELECT token_id FROM " . DB_PREFIX . "cinewsletter WHERE token_id='". $this->db->escape($token) ."'");
	  if($query->num_rows > 0) {
	   return $this->getToken();
	  }
	  return $token;
	}

	/****** Default Newsletter Working Starts *****/
	public function getSubscriberByEmail($email) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "cinewsletter WHERE LCASE(email) = '" . $this->db->escape(utf8_strtolower($email)) . "'");

		return $query->row;
	}

	public function defaultaddNewsletter($data) {
		$token_id = $this->getToken();

		$this->db->query("INSERT INTO " . DB_PREFIX . "cinewsletter SET name = '" . $this->db->escape($data['name']) . "', email = '" . $this->db->escape($data['email']) . "', store_id = '". (int)$this->config->get('config_store_id') ."', token_id = '". $this->db->escape($token_id) ."', account_register = '". (int)$data['account_register'] ."', ip = '" . $this->db->escape($this->request->server['REMOTE_ADDR']) . "', status = '". (int)$data['status'] ."', date_added = NOW() , date_modified = NOW()");
	}

	public function defaultupdateNewsletter($data) {
		$this->db->query("UPDATE " . DB_PREFIX . "cinewsletter SET account_register = '". (int)$data['account_register'] ."', status = '". (int)$data['status'] ."', date_modified = NOW() WHERE email = '" . $this->db->escape($data['email']) . "'");
	}
	/****** Default Newsletter Working Ends *****/

	public function getNewsletterCustomers() {
		$query = $this->db->query("SELECT *, CONCAT(c.firstname, ' ', c.lastname) AS name FROM " . DB_PREFIX . "customer c WHERE c.newsletter = '1'");

		return $query->rows;
	}

	public function addCustomerToNewsletterSubscriber($data) {
		$token_id = $this->getToken();

		$data['account_register'] = 1;
		$data['status'] = 1;

		if(!isset($data['store_id'])) {
			$data['store_id'] = $this->config->get('config_store_id');
		}

		$this->db->query("INSERT INTO " . DB_PREFIX . "cinewsletter SET name = '" . $this->db->escape($data['name']) . "', email = '" . $this->db->escape($data['email']) . "', store_id = '". (int)$data['store_id'] ."', token_id = '". $this->db->escape($token_id) ."', account_register = '". (int)$data['account_register'] ."', status = '". (int)$data['status'] ."', ip = '" . $this->db->escape($data['ip']) . "', date_added = '". $this->db->escape($data['date_added']) ."', date_modified = NOW()");
	}

	public function importInsertNewsletterSubscriber($data) {
		$token_id = $this->getToken();

		$this->db->query("INSERT INTO " . DB_PREFIX . "cinewsletter SET name = '" . $this->db->escape($data['name']) . "', email = '" . $this->db->escape($data['email']) . "', store_id = '". (int)$data['store_id'] ."', token_id = '". $this->db->escape($token_id) ."', account_register = '". (int)$data['account_register'] ."', status = '". (int)$data['status'] ."', ip = '" . $this->db->escape($data['ip']) . "', date_added = '". $this->db->escape($data['date_added']) ."', date_modified = NOW()");
	}

	public function getNewsletterCustomer($email) {
		$query = $this->db->query("SELECT *, CONCAT(c.firstname, ' ', c.lastname) AS name FROM " . DB_PREFIX . "customer c WHERE c.newsletter = '1' AND c.email = '" . $this->db->escape($email) . "'");

		return $query->row;
	}

	public function updateManualSubscriber($newsletter_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "cinewsletter SET account_register = '". (int)$data['account_type'] ."', status = '". (int)$data['newsletter_status'] ."' WHERE newsletter_id = '" . (int)$newsletter_id . "' ");
	}

	public function getStoreByName($name) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "store WHERE `name` = ''" . $this->db->escape($name) . "''");

		return $query->row;
	}
}