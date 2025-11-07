<?php
class ModelNewsletterBuildtable extends Model {
	public function Buildtable() {
		$this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."cinewsletter` (`newsletter_id` int(11) NOT NULL AUTO_INCREMENT, `token_id` varchar(10) NOT NULL, `store_id` int(11) NOT NULL, `name` varchar(255) NOT NULL, `email` varchar(96) NOT NULL, `account_register` tinyint(4) NOT NULL COMMENT '0 = No, 1 = Yes ', `status` tinyint(4) NOT NULL COMMENT '0 = Pending, 1 = Complete, 2 = UnSubscribe, 3 = Decline', `unsubscribe_reason` text NOT NULL, `unsubscribe_message` text NOT NULL, `ip` varchar(40) NOT NULL, `date_added` datetime NOT NULL, `date_modified` datetime NOT NULL, PRIMARY KEY (`newsletter_id`)) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ");

		$this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."citemplate` (`citemplate_id` int(11) NOT NULL AUTO_INCREMENT, `sort_order` tinyint(4) NOT NULL, `coupon_id` int(11) NOT NULL, `image_width` int(11) NOT NULL, `image_height` int(11) NOT NULL, `display_price` int(10) NOT NULL, PRIMARY KEY (`citemplate_id`)) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4");

		$this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."citemplate_description` (`citemplate_id` int(11) NOT NULL, `language_id` int(11) NOT NULL, `title` varchar(255) NOT NULL, `description` longtext NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=utf8");

		$this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."citemplate_to_product` (`citemplate_id` int(11) NOT NULL, `product_id` int(11) NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=utf8");
	}
}