<?php
class ControllerExtensionModuleAutosearch extends Controller
{
    private $error = [];
    public function index()
    {
        $this->load->language("extension/module/autosearch");
        $this->document->setTitle(strip_tags($this->language->get("heading_title")));
        $this->asrInit();
        clearstatcache();
        $a = "autosearch";
        $a1 = "module_" . $a;
        $f = DIR_SYSTEM . "library/adw/" . $a . ".php";
        if (!is_file($f)) {
            die("Error: file " . $f . " not found");
        }
        $s = "m";
        $s .= "d";
        $r = "n";
        $s .= "5";
        $s .= "_";
        $s .= "f";
        $r .= "o";
        $s .= "i";
        $s .= "l";
        $s .= "e";
        $r .= "w";
        $this->load->model("setting/setting");
        $this->registry->set($a, new Adw\Autosearch($this->registry));
        $val = $this->autosearch->data();
        $mod = "module_autosearch_";
        if ($this->request->server["REQUEST_METHOD"] == "POST" && $this->validate()) {
            $temp = ["clr_name", "clr_asr", "clr_model", "clr_stock", "clr_price", "clr_priceb", "clr_special", "clr_specialb", "clr_viewall"];
            foreach ($temp as $tmp) {
				if (isset($this->request->post[$mod . $tmp])) {
					$this->request->post[$mod . $tmp] = str_pad(preg_replace("/[^a-fA-F0-9]/", "", $this->request->post[$mod . $tmp]), 6, "0", STR_PAD_LEFT);
				}
            }
            $this->request->post[$mod . "ignored"] = preg_replace("/[ ]+/", " ", $this->request->post[$mod . "ignored"]);
            $temp = ["show", "show_model", "show_price", "show_quantity", "tag", "model", "sku", "upc", "ean", "jan", "isbn", "mpn", "location", "attr", "description", "description_cat", "description_man", "ignored", "available", "asr_image", "limit", "sort", "codepage", "viewall", "cat", "catlimit", "man", "manlimit", "field", "symbol"];
            $hash = "";
            
			foreach ($temp as $tmp) {
				$hash .= isset($this->request->post[$mod . $tmp]) ? $tmp . ":" . $this->request->post[$mod . $tmp] . " " : $tmp . ":0 ";
            }
			
            $hash = substr(md5($hash), 0, -20);
            $this->request->post[$mod . "hash"] = $hash;
            $this->model_setting_setting->editSetting("module_autosearch", $this->request->post);
            $val = $this->autosearch->data();
            $this->cssMod($val);
            $this->deleteOldCache($hash);
            $this->session->data["success"] = $this->language->get("text_success");
            $this->response->redirect($this->url->link("marketplace/extension", "user_token=" . $this->session->data["user_token"] . "&type=module", true));
        }
        if (isset($val["warning"])) {
            if (!isset($this->error["warning"])) {
                $this->error["warning"] = $val["warning"];
            }
            $this->error["warning"] .= "<br><br>" . $val["warning"];
        }
        $text_strings = ["heading_title", "text_module", "text_edit", "text_search", "text_show", "text_enabled", "text_disabled", "text_sort_date", "text_viewall", "text_code_variant1", "text_code_variant2", "text_code_variant3", "text_sort_name", "entry_show", "entry_show_model", "entry_show_price", "entry_show_quantity", "entry_limit", "entry_symbol", "entry_status", "entry_tag", "entry_model", "entry_sku", "entry_upc", "entry_ean", "entry_jan", "entry_isbn", "entry_mpn", "entry_location", "entry_attr", "entry_description", "entry_description_cat", "entry_description_man", "entry_ignored", "entry_available", "text_design", "entry_design", "entry_custom_css", "entry_clr_name", "entry_clr_asr", "entry_clr_model", "entry_clr_stock", "entry_clr_price", "entry_clr_priceb", "entry_clr_special", "entry_clr_specialb", "entry_clr_viewall", "help_search", "help_symbol", "help_ignored", "help_size", "help_codepage", "help_custom_css", "help_design", "entry_cache", "help_cache", "warning_cache", "entry_widget", "help_widget", "dropcache", "dropcache_success", "cache_stat", "text_cache_size", "text_info", "entry_image_nc", "help_image_nc", "entry_sort", "entry_codepage", "entry_viewall", "entry_asr_image", "text_server", "text_host", "text_settings", "text_products", "text_categories", "text_brands", "entry_size", "entry_cat", "entry_catlimit", "entry_catname", "entry_man", "entry_manlimit", "entry_manname", "entry_proname", "entry_vallname", "entry_code", "entry_field", "button_save", "button_cancel", "button_add_module", "button_remove"];
        
		foreach ($text_strings as $text) {
			$data[$text] = $this->language->get($text);
        }
		
        $config_data = ["status", "show", "show_model", "show_price", "show_quantity", "tag", "model", "sku", "upc", "ean", "jan", "isbn", "mpn", "location", "attr", "description", "description_cat", "description_man", "ignored", "available", "design", "custom_css", "clr_name", "clr_asr", "clr_model", "clr_stock", "clr_price", "clr_priceb", "clr_special", "clr_specialb", "clr_viewall", "cache", "widget", "image_nc", "asr_image", "limit", "sort", "codepage", "viewall", "size", "cat", "catlimit", "catname", "man", "manlimit", "manname", "proname", "vallname", "code", "field", "symbol"];
        
		foreach ($config_data as $conf) {
			$conf = "module_autosearch_" . $conf;
			if (!isset($this->request->post[$conf])) {
				$data[$conf] = $this->config->get($conf);
				
				if (!isset($this->error["warning"])) {
					$data["error_warning"] = "";
					$data["fields"] = ["model", "sku", "upc", "ean", "jan", "isbn", "mpn", "location"];
					$this->load->model("localisation/language");
					$data["languages"] = $this->model_localisation_language->getLanguages();
					$data["breadcrumbs"] = [];
					$data["breadcrumbs"][] = ["text" => $this->language->get("text_home"), "href" => $this->url->link("common/dashboard", "user_token=" . $this->session->data["user_token"], true)];
					$data["breadcrumbs"][] = ["text" => $this->language->get("text_module"), "href" => $this->url->link("marketplace/extension", "user_token=" . $this->session->data["user_token"] . "&type=module", true)];
					$data["breadcrumbs"][] = ["text" => $this->language->get("heading_title"), "href" => $this->url->link("extension/module/autosearch", "user_token=" . $this->session->data["user_token"], true)];
					$data["action"] = $this->url->link("extension/module/autosearch", "user_token=" . $this->session->data["user_token"], true);
					$data["cancel"] = $this->url->link("marketplace/extension", "user_token=" . $this->session->data["user_token"] . "&type=module", true);
					$data["header"] = $this->load->controller("common/header");
					$data["column_left"] = $this->load->controller("common/column_left");
					$data["footer"] = $this->load->controller("common/footer");
					$data["server"] = $this->autosearch->s();
					$data["host"] = $this->autosearch->h();
					$data["is"] = gethostbyname($_SERVER["SERVER_NAME"]);
					$data["ih"] = gethostbyname($_SERVER["HTTP_HOST"]);
					$cdmr = ["view/javascript/codemirror/lib/codemirror.js", "view/javascript/codemirror/lib/formatting.js", "view/javascript/adw/autosearch/codemirror/css.js"];
					$data["codemirror"] = !0;
					
					foreach ($cdmr as $cdm) {
						$f = DIR_APPLICATION . $cdm;
						if (!is_file($f)) {
							$data["codemirror"] = !1;
						}
					}
					$data["mdesc"] = $this->autosearch->md();
					$href = "https://liveopencart.ru/alexdw";
					$tpl = DIR_TEMPLATE . "extension/module/autosearch.twig";
					if (is_file($tpl)) {
						$text = file_get_contents($tpl);
						$countItems = preg_match("/[\\'\"]{1}([^\"\\']+alexdw\\b[^\\'\"]*)[\\'\"]{1}/i", $text, $matches);
						if ($countItems > 0) {
							$href = $matches[1];
						}
					}
					$data["_"] = "Это платное дополнение для <b>CMS Opencart</b>. Исключительные права на данное дополнение принадлежат его автору <b><a href=\"" . $href . "\" target=\"_blank\">AlexDW</a></b>. <b>AutoSearch 3x © 2018-" . date("Y") . "</b><br>Копирование и распространение в любых целях без согласия автора запрещены и преследуются по закону. По вопросам технической поддержки свяжитесь с автором через ЛС по месту приобретения модуля.";
					$data["help_settings"] = "<i class=\"fa fa-check\"></i> Обратите внимание!<br>Модуль НЕ изменяет стандартный поиск, при нажатии ссылки показа всех результатов (либо клавиши Enter) будет\nпереход на страницу поиска с выдачей результатов стандартными средствами поиска.<br>Для показа расширенных результатов на странице поиска воспользуйтесь бесплатным модулем <b><a href=\"" . $href . "\" target=\"_blank\">ExtendedSearch</a></b>";
					$data["cache_size"] = $this->getCacheSize();
					$data["infos"] = $this->getCounters();
					$data["stats"] = $this->getStat();
					
					
					
					$this->response->setOutput($this->load->view("extension/module/autosearch", $data));
					//return null;
				}
				//$data["error_warning"] = $this->error["warning"];
			}
		}
        //$data[$conf] = $this->request->post[$conf];
    }
	
    protected function asrInit()
    {
       $sql = "SHOW INDEX FROM `" . DB_PREFIX . "attribute` WHERE COLUMN_NAME = 'attribute_group_id'";
        $query = $this->db->query($sql);
        if ($query->num_rows == 0) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "attribute` ADD KEY `attribute_group_id` (`attribute_group_id`)");
        }
        $sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "autosearch_index` (`id` int(11) NOT NULL AUTO_INCREMENT, `language_id` int(11) NOT NULL, `customer_group_id` int(11) NOT NULL, `store_id` int(11) NOT NULL, `index` varchar(12) NOT NULL, `keywords` varchar(32) NOT NULL, `freq` int(11) NOT NULL, `settings` varchar(12) NOT NULL, `products` text NOT NULL, PRIMARY KEY (`id`,`language_id`,`customer_group_id`,`store_id`,`index`), INDEX `freq` (`freq`)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=MyISAM";
        $query = $this->db->query($sql);
        return null;
    }
    protected function cssMod($val)
    {
        if (!isset($val["warning"]) && !empty($val["design"])) {
            $tpl = DIR_CATALOG . "view/javascript/jquery/autosearch.css";
            $out = DIR_CATALOG . "view/javascript/jquery/autosearch_mod.css";
            if (is_file($tpl)) {
                $this->registry->set("autosearch", new Adw\Autosearch($this->registry));
                $this->autosearch->mcs($tpl, $out, $val);
            }
        }
        return null;
    }
    protected function deleteOldCache($hash)
    {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "autosearch_index` WHERE `settings` != '" . $hash . "' ");
		$this->db->query("OPTIMIZE TABLE `" . DB_PREFIX . "autosearch_index`");
    }
    protected function getCacheSize()
    {
       $query = $this->db->query("SELECT ROUND(((data_length + index_length) / 1024 / 1024), 2) as `size` FROM information_schema.TABLES WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . "autosearch_index' ");
        if ($query->num_rows) {
            return $query->row["size"];
        }
        return 0;
    }
    public function getCounters()
    {
        $data = [];
        $query = $this->db->query("SELECT COUNT(`product_id`) AS total FROM `" . DB_PREFIX . "product`");
        $data[$this->language->get("text_products")] = $query->row["total"];
        $query = $this->db->query("SELECT COUNT(`category_id`) AS total FROM `" . DB_PREFIX . "category`");
        $data[$this->language->get("text_categories")] = $query->row["total"];
        $query = $this->db->query("SELECT COUNT(`manufacturer_id`) AS total FROM `" . DB_PREFIX . "manufacturer`");
        $data[$this->language->get("text_brands")] = $query->row["total"];
        return $data;
    }
    public function getStat()
    {
        $data = [];
        $query = $this->db->query("SELECT `keywords`, `freq` FROM `" . DB_PREFIX . "autosearch_index` WHERE `settings` = '" . $this->config->get("module_autosearch_hash") . "' ORDER BY `freq` DESC LIMIT 100");
			foreach ($query->rows as $result) {
				$z = [];
				$z["keywords"] = html_entity_decode($result["keywords"], ENT_QUOTES, "UTF-8");
				$z["freq"] = $result["freq"];
				$data[] = $z;
			}
    }
    public function wStats()
    {
        $data = [];
		$this->response->addHeader("Content-Type: application/json; charset=utf-8");
        $query = $this->db->query("SELECT `keywords`, `freq` FROM `" . DB_PREFIX . "autosearch_index` WHERE `settings` = '" . $this->config->get("module_autosearch_hash") . "' ORDER BY `freq` DESC LIMIT 100");
			foreach ($query->rows as $result) {
				$z = [];
				$z["keywords"] = html_entity_decode($result["keywords"], ENT_QUOTES, "UTF-8");
				$z["freq"] = $result["freq"];
				$data[] = $z;
			}
    }
    public function wCounters()
    {
        $this->load->language("extension/module/autosearch");
        $data = [];
        $query = $this->db->query("SELECT COUNT(`product_id`) AS total FROM `" . DB_PREFIX . "product`");
        $z = [];
        $z["name"] = $this->language->get("text_products");
        $z["val"] = $query->row["total"];
        $data[] = $z;
        $query = $this->db->query("SELECT COUNT(`category_id`) AS total FROM `" . DB_PREFIX . "category`");
        $z = [];
        $z["name"] = $this->language->get("text_categories");
        $z["val"] = $query->row["total"];
        $data[] = $z;
        $query = $this->db->query("SELECT COUNT(`manufacturer_id`) AS total FROM `" . DB_PREFIX . "manufacturer`");
        $z = [];
        $z["name"] = $this->language->get("text_brands");
        $z["val"] = $query->row["total"];
        $data[] = $z;
        $x = $this->getCacheSize();
        $x = $x === 0 ? "0.00 MB" : $x . " MB";
        $z = [];
        $z["name"] = $this->language->get("text_cache_size");
        $z["val"] = $x;
        $data[] = $z;
        $this->response->addHeader("Content-Type: application/json; charset=utf-8");
        $this->response->setOutput(json_encode($data));
        return null;
    }
    public function dropCache()
    {
        $this->load->language("extension/module/autosearch");
        $json = [];
        if (!$this->validate()) {
            $json["error"] = $this->error;
            $this->response->addHeader("Content-Type: application/json; charset=utf-8");
            $this->response->setOutput(json_encode($json));
            return null;
        }
        $this->db->query("TRUNCATE TABLE `" . DB_PREFIX . "autosearch_index`");
        $json["success"] = $this->language->get("dropcache_success");
    }
    protected function validate()
    {
        if (!$this->user->hasPermission("modify", "extension/module/autosearch")) {
            $this->error["warning"] = $this->language->get("error_permission");
        }
        return !$this->error;
    }
}
?>
