<?php
class ModelNewsletterCinewsletter extends Model {
	/****** Default Newsletter Working Starts *****/
	public function defaultaddNewsletter($data) {
		$token_id = $this->getToken();

		$this->db->query("INSERT INTO " . DB_PREFIX . "cinewsletter SET name = '" . $this->db->escape($data['name']) . "', email = '" . $this->db->escape($data['email']) . "', store_id = '". (int)$this->config->get('config_store_id') ."', token_id = '". $this->db->escape($token_id) ."', account_register = '". (int)$data['account_register'] ."', ip = '" . $this->db->escape($this->request->server['REMOTE_ADDR']) . "', status = '". (int)$data['status'] ."', date_added = NOW() , date_modified = NOW()");

		setcookie('newsletter_popup_subscribe', 1, time() + (86400 * 30), "/"); // 86400 = 1 Day 
	}

	public function defaultupdateNewsletter($data) {
		$this->db->query("UPDATE " . DB_PREFIX . "cinewsletter SET account_register = '". (int)$data['account_register'] ."', status = '". (int)$data['status'] ."', date_modified = NOW() WHERE email = '" . $this->db->escape($data['email']) . "'");
	}

	public function getNewsletterByEmail($email) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "cinewsletter WHERE email = '" . $this->db->escape(utf8_strtolower((string)$email)) . "' ");

		return $query->row;
	}

	public function getNewsletter($newsletter_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "cinewsletter WHERE newsletter_id = '" . (int)$newsletter_id . "' ");

		return $query->row;
	}

	public function getNewsletterByToken($token_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "cinewsletter WHERE token_id = '" . $this->db->escape($token_id) . "' ");

		return $query->row;
	}
	/****** Default Newsletter Working Ends *****/

	/****** Module Newsletter Working Starts *****/
	public function addNewsletter($data) {
		$token_id = $this->getToken();

		$this->db->query("INSERT INTO " . DB_PREFIX . "cinewsletter SET name = '" . $this->db->escape($data['name']) . "', email = '" . $this->db->escape($data['email']) . "', store_id = '". (int)$this->config->get('config_store_id') ."', token_id = '". $this->db->escape($token_id) ."',  account_register = '". (int)$data['account_register'] ."', ip = '" . $this->db->escape($this->request->server['REMOTE_ADDR']) . "', date_added = NOW() , date_modified = NOW()");

			$newsletter_id = $this->db->getLastId();

			if($this->config->get('module_cinewsletter_verify_required')) {
				$verify_required_message = $this->config->get('module_cinewsletter_verify_required_message');
				if(!empty($verify_required_message[$this->config->get('config_language_id')]['subject'])) {
					$subject = $verify_required_message[$this->config->get('config_language_id')]['subject'];
				} else{
					$subject = '';
				}

				if(!empty($verify_required_message[$this->config->get('config_language_id')]['message'])) {
					$message = $verify_required_message[$this->config->get('config_language_id')]['message'];
				} else{
					$message = '';
				}

				if ($this->request->server['HTTPS']) {
					$server = $this->config->get('config_ssl');
				} else {
					$server = $this->config->get('config_url');
				}

				if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
					$logo = $server . 'image/' . $this->config->get('config_logo');
				} else {
					$logo = '';
				}
				
				$home_href = $this->url->link('common/home', '', true);

				$find = array(
					'{STORE_NAME}',
					'{STORE_LINK}',
					'{LOGO}',
					'{NAME}',
					'{EMAIL}',
					'{CONFIRMATION_LINK}',
					'{UNSUBSCRIBE_LINK}',
				);
			
				$replace = array(
					'STORE_NAME'					=> $this->config->get('config_name'),
					'STORE_LINK'					=> $home_href,
					'LOGO'								=> '<img src="'. $logo .'" alt="'. $this->config->get('config_name') .'" title="'. $this->config->get('config_name') .'" />',
					'NAME'								=> $data['name'],
					'EMAIL'								=> $data['email'],
					'CONFIRMATION_LINK'		=> $this->url->link('newsletter/cinewsletter/verify', 'key='. $token_id , true),
					'UNSUBSCRIBE_LINK'		=> $this->url->link('newsletter/cinewsletter/unsubscribe', 'key='. $token_id , true),
				);
				
				if(!empty($subject)) {
					$subject = str_replace($find, $replace, $subject);
				}else{
					$subject = '';
				}
				
				if(!empty($message)) {
					$message = str_replace($find, $replace, $message);
				}else{
					$message = '';
				}

				$mail = new Mail($this->config->get('config_mail_engine'));
				$mail->parameter = $this->config->get('config_mail_parameter');
				$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
				$mail->smtp_username = $this->config->get('config_mail_smtp_username');
				$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
				$mail->smtp_port = $this->config->get('config_mail_smtp_port');
				$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

				$mail->setTo($data['email']);
				$mail->setFrom($this->config->get('config_email'));
				$mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
				$mail->setSubject(html_entity_decode($subject, ENT_QUOTES, 'UTF-8'));
				$mail->setHtml(html_entity_decode($message, ENT_QUOTES, 'UTF-8'));
				$mail->send();
			} else{
				$this->db->query("UPDATE " . DB_PREFIX . "cinewsletter SET status = '1' WHERE newsletter_id = '". (int)$newsletter_id ."'");
			}

			setcookie('newsletter_popup_subscribe', 1, time() + (86400 * 30), "/"); // 86400 = 1 Day 
	}

	public function addStatusByToken($token_id, $status = 0) {
		$this->db->query("UPDATE " . DB_PREFIX . "cinewsletter SET status = '". (int)$status ."', date_modified = NOW() WHERE token_id = '" . $this->db->escape($token_id) . "'");
	}

	public function addUnsubscribeByToken($token_id, $data = array()) {
		$this->db->query("UPDATE " . DB_PREFIX . "cinewsletter SET status = '". (int)$data['status'] ."', unsubscribe_reason = '". $this->db->escape($data['unsubscribe_reason']) ."', unsubscribe_message = '". $this->db->escape($data['unsubscribe_message']) ."', date_modified = NOW() WHERE token_id = '" . $this->db->escape($token_id) . "'");

		$newsletter_info = $this->getNewsletterByToken($token_id);

		if($newsletter_info) {
			$this->db->query("UPDATE " . DB_PREFIX . "customer SET newsletter = '0' WHERE LCASE(email) = '" . $this->db->escape(utf8_strtolower($newsletter_info['email'])) . "'");
		}
	}
	/****** Module Newsletter Working Ends *****/

	protected function getToken() {
	  $token = 'CI_'.token(5);
	  $query = $this->db->query("SELECT token_id FROM " . DB_PREFIX . "cinewsletter WHERE token_id='". $this->db->escape($token) ."'");
	  if($query->num_rows > 0) {
	   return $this->getToken();
	  }
	  return $token;
	 }
}