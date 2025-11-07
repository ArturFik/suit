<?php
// All rights reserved ART&PR studio -> https://store.pe-art.ru
class ModelExtensionPaymentArtbeznal extends Model {
    private $pname           = 'artbeznal';
    private $proname         = 'artbeznalpro';
    private $extclass        = 'payment';
    private $ext_name        = 'extension_'; // ''
    private $ext_folder      = 'extension/'; // ''
    private $pnameplus       = 'payment_'; // 'payment_'
    private $token_name      = 'user_token'; // user_token
    private $clone_name      = 'clone';
    private $clone_lang1     = 'ru-ru'; //ru-ru, russian, en-gb, english, false
    private $clone_lang2     = false; //ru-ru, russian, en-gb, english, false
	private $key;

    public function setMethodName($name, $pname) {

        if ($name != '') {
            $namePrefix1 = ' (';
            $namePrefix2 = ')';
        }
        else {
            $namePrefix1 = '';
            $namePrefix2 = '';
        }

        $method     = $this->ext_folder.$this->extclass.'';
        $methodname = $pname;
        $methodnameorigin = $this->pname.'_clone';
        $startput         = DIR_APPLICATION;
        $catput           = DIR_CATALOG;
        $sourseput = $startput . 'language/'.$this->clone_lang1.'/' . $method . '/';

        file_put_contents($sourseput . $methodname . '.' . 'php', str_replace(ucfirst(str_replace('_', '', $methodnameorigin)), ucfirst(str_replace('_', '', $methodname)), str_replace($methodnameorigin, $methodname, str_replace('\';', $namePrefix1.$name.$namePrefix2.'\';', file_get_contents($sourseput . $this->pname.'clone/' . $methodnameorigin . '.' . 'php')))));
        
    }

    public function getTotalStatus() {

        $sql = "SELECT COUNT(status_id) AS total FROM " . DB_PREFIX . $this->proname . " WHERE `status` = 1 OR `status` = 2 OR `status` = 3";

        $query = $this->db->query($sql);

        return $query->row['total'];

    }

    public function getStatus($data) {

        $sql = "SELECT * FROM `" . DB_PREFIX . $this->proname . "` WHERE `status` = 1 OR `status` = 2 OR `status` = 3 ORDER BY `status_id` DESC";
        if (isset($data['start']) || isset($data['limit'])) {
            if ($data['start'] < 0) {
                $data['start'] = 0;
            }

            if ($data['limit'] < 1) {
                $data['limit'] = 20;
            }

            $sql .= " LIMIT " . (int) $data['start'] . "," . (int) $data['limit'];
        }

        $query = $this->db->query($sql);

        return $query->rows;
    }


    public function getSettings() {
        $setpro = array('license', 'name_attach', 'komis', 'minpay', 'maxpay', 'fixen', 'fixen', 'fixen_amount', 'success_page', 'success_page_custom_attach', 'currency', 'total', 'email_attach', 'instruction_attach', 'mail_instruction_attach', 'invoi', 'whois', 'start_status_id', 'on_status_id', 'geo_zone_id', 'status', 'sort_order', 'qr_attach', 'qr', 'otlog', 'customer_show_href', 'customer_download_href', 'customer_print_href', 'admin_show_href', 'admin_download_href', 'admin_print_href', 'admin_show_button', 'admin_download_button', 'admin_print_button', 'admin_name', 'status_off', 'showadmin', 'shippings_custom', 'seller', 'nds', 'nds_important', 'show_free_shipping', 'shipping_tax', 'customName', 'shipinprod', 'nds_tovar_default', 'onepos', 'footer', 'footer_simple', 'product_options', 'product_table');
        return $setpro;
    }

    public function getSettingsImg() {
         $setpro = array('footer_simple');
         return $setpro;
    }

    public function getSettingsExtended() {
        $setpro = array('shippings' => 'all', 'store' => 0, 'currency_pay' => 'all', 'gruppa' => 'all', 'payments' => 'all');
        return $setpro;
    }

    public function getLangSettings() {
        $setpro = array('name', 'instruction', 'mail_instruction', 'success_page_custom', 'invoi_custom', 'whois_custom', 'bank', 'inn', 'rs', 'bankuser', 'bik', 'ks', 'kpp', 'ur', 'qr_custom', 'etext', 'comment', 'seller_custom', 'customShip', 'mytemplate', 'onepos_name', 'ruk_name', 'buh_name', 'ruk_fio', 'buh_fio', 'footer_custom');
        return $setpro;
    }

    public function getErrSettings() {
        $setpro = array('license', 'gruppa', 'shippings', 'store', 'currency_pay');
        return $setpro;
    }

    public function getErrLangSettings() {
        $setpro = array('bank', 'inn', 'rs', 'bankuser', 'bik', 'ks', 'ur');
        return $setpro;
    }

    public function getPoles() {

        $pt = array();
        $pt['shipping_tax'] = array('0', '3', '2', '1', '4', '5');
        return $pt;
    }

    public function getInstalled($type) {
        $extension_data = array();

        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "extension` WHERE `type` = '" . $this->db->escape($type) . "' ORDER BY `code`");

        foreach ($query->rows as $result) {
            $extension_data[] = $result['code'];
        }

        return $extension_data;
    }

    public function getCustomerGroups($data = array()) {
        $sql = "SELECT * FROM " . DB_PREFIX . "customer_group cg LEFT JOIN " . DB_PREFIX . "customer_group_description cgd ON (cg.customer_group_id = cgd.customer_group_id) WHERE cgd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

        $sort_data = array(
            'cgd.name',
            'cg.sort_order'
        );

        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            $sql .= " ORDER BY " . $data['sort'];
        } else {
            $sql .= " ORDER BY cgd.name";
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

	public function getCustomFields($order_info, $varabliesd) {
            $instros = explode('~', $varabliesd);
            $instroz = "";

            foreach ($instros as $instro) {
                if ($instro == 'checkouthref' || $instro == 'href' || $instro == 'hrefdwnld' || $instro == 'hrefprint') {
                    if ($instro == 'checkouthref') {
                        $instro_other = $order_info['store_url'] . 'index.php?route='.$this->ext_folder.$this->extclass.'/'.$this->pname.'/go&code=' . $this->getSecureCode($order_info['order_id']) . '&order_id=' . $order_info['order_id'];  
                    }
                    if ($instro == 'href') {
                        $instro_other = $order_info['store_url'] . 'index.php?route='.$this->ext_folder.$this->extclass.'/'.$this->pname.'/view&code=' . $this->getSecureCode($order_info['order_id']) . '&order_id=' . $order_info['order_id'];
                    }
                    if ($instro == 'hrefdwnld') {
                        $instro_other = $order_info['store_url'] . 'index.php?route='.$this->ext_folder.$this->extclass.'/'.$this->pname.'/dwnld&code=' . $this->getSecureCode($order_info['order_id']) . '&order_id=' . $order_info['order_id'];
                    }
                    if ($instro == 'hrefprint') {
                        $instro_other = $order_info['store_url'] . 'index.php?route='.$this->ext_folder.$this->extclass.'/'.$this->pname.'/printer&code=' . $this->getSecureCode($order_info['order_id']) . '&order_id=' . $order_info['order_id'];
                    }
                }
                else {
                    $instro_other = nl2br(htmlspecialchars_decode($instro));
                }

                $instroz .=  $instro_other;
            }
            return $instroz;
    }

    public function getSecureCode($order_id) {
        $code = substr(md5($order_id . $this->config->get('config_encryption')), 0, 12);
        return $code;
    }
}