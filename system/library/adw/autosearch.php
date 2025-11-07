<?php

namespace Adw;

class Autosearch
{
    protected $idnc;
    private $fid;
    private $code = array();
    private $l = "LHuFZTARo3MZZx5hGT05nzWKBJgZo";
    private $mod = "a71c7083c3";
    private $LHuFa;
    private $JgZox;
    public function __construct($WN04v)
    {
        $this->LHuFa = !0;
        $this->JgZox = !1;
        $this->RSbqZ = $WN04v->get("db");
        $this->HrF_d = $WN04v->get("config");
        if (!function_exists("idn_to_ascii") || !function_exists("idn_to_utf8")) {
            require_once "idna_convert.php";
            $this->idnc = new idna_convert();
        }
    }

    private function da($TQb_2)
    {
        if (!isset($this->idnc)) {
            if (defined("IDNA_NONTRANSITIONAL_TO_ASCII") && defined("INTL_IDNA_VARIANT_UTS46") && constant("IDNA_NONTRANSITIONAL_TO_ASCII")) {
                $TQb_2 = idn_to_ascii($TQb_2, IDNA_NONTRANSITIONAL_TO_ASCII, INTL_IDNA_VARIANT_UTS46);
            } else {
                $TQb_2 = idn_to_ascii($TQb_2);
            }
        } else {
            $TQb_2 = $this->idnc->encode($TQb_2);
        }
        return $TQb_2;
    }
    private function du($TQb_2)
    {
        if (!isset($this->idnc)) {
            if (defined("IDNA_NONTRANSITIONAL_TO_ASCII") && defined("INTL_IDNA_VARIANT_UTS46") && constant("IDNA_NONTRANSITIONAL_TO_ASCII")) {
                $TQb_2 = idn_to_utf8($TQb_2, IDNA_NONTRANSITIONAL_TO_ASCII, INTL_IDNA_VARIANT_UTS46);
            } else {
                $TQb_2 = idn_to_utf8($TQb_2);
            }
        } else {
            $TQb_2 = $this->idnc->decode($TQb_2);
        }
        return $TQb_2;
    }
    private function d($ZfdE7)
    {
        $ceMay = array("com", "net", "web", "org", "gov", "prom", "biz", "spb", "msk", "kiev", "all", "ukr", "tmweb");
        $FAzT7 = array("beget.tech", "na4u.ru");
        $TQb_2 = "mb_strtolower";
        $uCsDN = "preg_replace";
        $ZfdE7 = $TQb_2($ZfdE7, "UTF-8");
        $ZfdE7 = $this->da($ZfdE7);
        $ZfdE7 = $uCsDN("/http:\\/\\//", '', $ZfdE7);
        $ZfdE7 = $uCsDN("/https:\\/\\//", '', $ZfdE7);
        $ZfdE7 = $uCsDN("/^www\\./", '', $ZfdE7);
        $ZfdE7 = explode("/", $ZfdE7);
        $ZfdE7 = $ZfdE7[0];
        $ZfdE7 = $uCsDN("![^.\\-\\w\\d\\s]*!", '', $ZfdE7);
        $XfRCD = array_reverse(explode(".", $ZfdE7));
        $Mj7mp = isset($XfRCD[0]) ? $XfRCD[0] : '';
        $WMM83 = isset($XfRCD[1]) ? $XfRCD[1] : '';
        $NbtjH = isset($XfRCD[2]) ? $XfRCD[2] : '';
        $TQb_2 = "strlen";
        if ($NbtjH != '' && (in_array($WMM83, $ceMay) && ($TQb_2($Mj7mp) == 2 || $TQb_2($Mj7mp) == 3) || $TQb_2($WMM83) == 2 && ($TQb_2($Mj7mp) == 2 || $TQb_2($Mj7mp) == 3) || in_array($WMM83 . "." . $Mj7mp, $FAzT7))) {
            $x2pHR = $NbtjH . "." . $WMM83 . "." . $Mj7mp;
        } else {
            $x2pHR = $WMM83 . "." . $Mj7mp;
        }
        return $this->RSbqZ->escape($x2pHR);
    }
    private function v()
    {
        $A_lq8 = $z3d5B = $this->JgZox;
        $womhj = "stristr";
        $uCsDN = "defined";
        if ($uCsDN("HTTP_SERVER") == $this->LHuFa) {
            $TQb_2 = HTTP_SERVER;
            if ($womhj($TQb_2, $this->da($this->s())) == $this->LHuFa || $womhj($TQb_2, $this->du($this->s())) == $this->LHuFa || $womhj($TQb_2, $this->da($this->h())) == $this->LHuFa || $womhj($TQb_2, $this->du($this->h())) == $this->LHuFa) {
                $A_lq8 = $this->LHuFa;
            }           
        }
        if ($uCsDN("HTTPS_SERVER") == $this->LHuFa) {
            $TQb_2 = HTTPS_SERVER;
            if ($womhj($TQb_2, $this->da($this->s())) == $this->LHuFa || $womhj($TQb_2, $this->du($this->s())) == $this->LHuFa || $womhj($TQb_2, $this->da($this->h())) == $this->LHuFa || $womhj($TQb_2, $this->du($this->h())) == $this->LHuFa) {
                $z3d5B = $this->LHuFa;
            }            
        }
        $A_lq8 = $A_lq8 == $this->LHuFa || $z3d5B == $this->LHuFa ? $this->LHuFa : $this->JgZox;
        return $A_lq8;
    }
    private function ct()
    {
        $womhj = "strlen";
        $Dq9KU = "intval";
        $E2UTE = $Dq9KU(19, 127);
        $en6hK = $Dq9KU(17, 127);
        $x0wb5 = date("Y-m-d");
        $mhRFv = $womhj($x0wb5);
        $TCa3x = '';
        while ($mhRFv > 0) {
            $TCa3x .= chr(ord($x0wb5[$mhRFv - 1]) + $mhRFv + ($mhRFv % 2 ? $E2UTE : $en6hK - 0 - 0 - 1));
            $mhRFv--;
        }
        return $TCa3x;
    }
    private function dt($TCa3x)
    {
        $TQb_2 = "strrev";
        $womhj = "strlen";
        $Dq9KU = "intval";
        $E2UTE = $Dq9KU(19, 127);
        $en6hK = $Dq9KU(17, 127);
        $TCa3x = $TQb_2($TCa3x);
        $mhRFv = $womhj($TCa3x);
        $L6aZC = '';
        while ($mhRFv > 0) {
            $L6aZC .= chr(ord($TCa3x[$mhRFv - 1]) - $mhRFv - ($mhRFv % 2 ? $E2UTE : $en6hK - 0 - 0 - 1));
            $mhRFv--;
        }
        $L6aZC = $TQb_2($L6aZC);
        return $L6aZC;
    }
    private function ch($z3d5B)
    {
        if (strlen($z3d5B) == 50) {
            $TQb_2 = time();
            $uCsDN = $this->dt("HDJHL");
            $womhj = $this->dt("aecjghhfg");
            $x0wb5 = $this->dt(substr($z3d5B, 40));
            $b0gI0 = date("Y-m-d", $womhj($x0wb5));
            $ITovf = date("Y-m-d", $TQb_2 - (int) $uCsDN);
            $m4jJA = date("Y-m-d", $TQb_2 + (int) $uCsDN);
            if ($womhj($ITovf) >= $womhj($b0gI0) || $womhj($b0gI0) >= $womhj($m4jJA)) {
                $x0wb5 = $this->JgZox;
            } else {
                $x0wb5 = $this->LHuFa;
            }
        } else {
            $x0wb5 = $this->JgZox;
        }
        return $x0wb5;
    }
    public function data()
    {
		$womhj = DB_PREFIX;
		$qkPhj = $this->RSbqZ->query("SELECT `value` FROM `" . $womhj . "setting` WHERE `key` = 'module_autosearch_code' AND store_id = '0' ");
        $A_lq8 = isset($qkPhj->row["value"]) ? $qkPhj->row["value"] : '';
		$qkPhj = $this->RSbqZ->query("SELECT `value` FROM `" . $womhj . "setting` WHERE `key` = 'module_autosearch_code2' AND store_id = '0' ");
                    if (isset($qkPhj->row["value"])) {
                        $this->RSbqZ->query("UPDATE `" . $womhj . "setting` SET `value` = '" . sha1($this->s() . $A_lq8) . "' WHERE `key` = 'module_autosearch_code2' AND store_id = '0' ");
                    } else {
                        $this->RSbqZ->query("INSERT INTO `" . $womhj . "setting` SET `value` = '" . sha1($this->s() . $A_lq8) . "', `code` = 'module_autosearch_', `key` = 'module_autosearch_code2', store_id = '0', serialized = '0' ");
                    }
	   $this->code = $this->g();
        return $this->code;
    }
    private function g()
    {
        $womhj = DB_PREFIX;
        $K1W5R = "Lyp5n2EKrTkLZxLkMRp5rycKEayMZzuz";
        $BXX1B = "LmAFnTEVIab=";
        $exm7Y = array();
        $qkPhj = $this->RSbqZ->query("SELECT `key`, `value` FROM `" . $womhj . "setting` WHERE `code` = 'module_autosearch' AND store_id = '0' ");
        $CU0zs = $qkPhj->rows;
        foreach ($CU0zs as $XcU0E) {
            $A_lq8 = substr($XcU0E["key"], 18);
            $exm7Y[$A_lq8] = $XcU0E["value"];
        }
        if (isset($exm7Y[BaSE64_DECODE(BaSE64_DECODE(STR_ROT13("LmAFnTEVIab=")))])) {
            $this->HrF_d->set(BaSE64_DECODE(BaSE64_DECODE(STR_ROT13("Lyp5n2EKrTkLZxLkMRp5rycKEayMZzuz"))) . BaSE64_DECODE(BaSE64_DECODE(STR_ROT13("LmAFnTEVIab="))), $exm7Y[BaSE64_DECODE(BaSE64_DECODE(STR_ROT13("LmAFnTEVIab=")))]);
        }
        unset($exm7Y[BaSE64_DECODE(BaSE64_DECODE(STR_ROT13("LmAFnTEVIab=")))]);
        return $exm7Y;
    }
    public function md()
    {
        $sfOrQ = $this->RSbqZ->query("SHOW TABLES FROM `" . DB_DATABASE . "` LIKE '" . DB_PREFIX . "manufacturer_description' ");
        if ($sfOrQ->num_rows == 0) {
            return $this->JgZox;
        } else {
            $sfOrQ = $this->RSbqZ->query("DESCRIBE " . DB_PREFIX . "manufacturer_description `language_id`");
            if ($sfOrQ->num_rows == 0) {
                return $this->JgZox;
            }
            $sfOrQ = $this->RSbqZ->query("DESCRIBE " . DB_PREFIX . "manufacturer_description `description`");
            if ($sfOrQ->num_rows == 0) {
                return $this->JgZox;
            }
            return $this->LHuFa;
        }
    }
    public function mg()
    {
        $A_lq8 = $this->data();
        $TQb_2 = !1;
        if (!isset($A_lq8["warning"])) {
            $TQb_2 = array();
            $uCsDN = "view/javascript/jquery/";
            $womhj = "catalog/" . $uCsDN;
            $FjLBk = DIR_APPLICATION . $uCsDN . "autosearch.css";
            $K28fC = DIR_APPLICATION . $uCsDN . "jquery.mCustomScrollbar.min.css";
            $TQb_2[] = $womhj . "jquery.mCustomScrollbar.min.css?v" . (is_file($K28fC) ? filemtime($K28fC) : 135);
            if ($this->HrF_d->get("module_autosearch_design")) {
                $K28fC = DIR_APPLICATION . $uCsDN . "autosearch_mod.css";
                $TQb_2[] = $womhj . "autosearch_mod.css?v" . (is_file($K28fC) ? filemtime($K28fC) : 135);
            } else {
                $TQb_2[] = $womhj . "autosearch.css?v" . (is_file($FjLBk) ? filemtime($FjLBk) : 135);
            }
            $K28fC = DIR_APPLICATION . $uCsDN . "jquery.mCustomScrollbar.min.js";
            $TQb_2[] = $womhj . "jquery.mCustomScrollbar.min.js?v" . (is_file($K28fC) ? filemtime($K28fC) : 135);
            $K28fC = DIR_APPLICATION . $uCsDN . "autosearch.js";
            $TQb_2[] = $womhj . "autosearch.js?v" . (is_file($K28fC) ? filemtime($K28fC) : 135);
        }
        return $TQb_2;
    }
    public function mcs($FjLBk, $K28fC, $A_lq8)
    {
        $Kg53d = file_get_contents($FjLBk);
        $womhj = "#autosearch_search_results ";
        $TQb_2 = "module_autosearch_clr_";
        $Kg53d .= "\n";
        $Kg53d .= $womhj . "name {color:#" . $A_lq8["clr_name"] . "}" . "\n";
        $Kg53d .= $womhj . ".asr {color:#" . $A_lq8["clr_asr"] . "}" . "\n";
        $Kg53d .= $womhj . "model {color:#" . $A_lq8["clr_model"] . "}" . "\n";
        $Kg53d .= $womhj . "stock {color:#" . $A_lq8["clr_stock"] . "}" . "\n";
        $Kg53d .= $womhj . "price {color:#" . $A_lq8["clr_price"] . ";background-color:#" . $A_lq8["clr_priceb"] . "}" . "\n";
        $Kg53d .= $womhj . "special-price {color:#" . $A_lq8["clr_special"] . ";background-color:#" . $A_lq8["clr_specialb"] . "}" . "\n";
        $Kg53d .= $womhj . "viewall {color:#" . $A_lq8["clr_viewall"] . "}" . "\n\n";
        $DavQb = $A_lq8["custom_css"] ? html_entity_decode($A_lq8["custom_css"], ENT_QUOTES, "UTF-8") : '';
        $Kg53d .= $DavQb;
        file_put_contents($K28fC, $Kg53d);
    }
    public function h()
    {
        $TQb_2 = $_SERVER;
        return $this->d($TQb_2["HTTP_HOST"]);
    }
    public function s()
    {
        $TQb_2 = $_SERVER;
        return $this->d($TQb_2["SERVER_NAME"]);
    }
    private function c()
    {
		
        $womhj = DB_PREFIX;
        $K1W5R = $this->dt("yJNYisV");
        $BXX1B = $this->dt("[\\cYWX");
        $TQb_2 = $K1W5R . $BXX1B;
        $caJIV = $this->dt("OInejshfg");
        $K1W5R = "curl_setopt";
        $DbxZY = "curl_init";
        $VEo2J = "curl_exec";
        $INUcy = "curl_getinfo";
        $YCEmk = "curl_close";
        $V1HSU = CURLOPT_URL;
        $T2EY5 = CURLOPT_RETURNTRANSFER;
        $Yty2y = CURLOPT_REFERER;
        $plAvR = CURLOPT_CONNECTTIMEOUT_MS;
        $DfCdz = CURLOPT_SSL_VERIFYPEER;
        if (isset($this->mod) && isset($this->l)) {
            $Rtajm = BaSE64_DECODE(BaSE64_DECODE(STR_ROT13($this->l . "xW5Lax5pTWgHzkyDmI3LHuOY2AgBGSxE1H5JGWwqychIaAvI2k1JIuFnRjmnUOuHG09"))) . "&mod=" . $this->mod . "&dm1=" . $this->s() . "&dm2=" . $this->h();
            $vFvdb = str_replace("&amp;", "&", urldecode(trim($Rtajm)));
			 
            $AFoVP = $DbxZY();
            $K1W5R($AFoVP, $V1HSU, $vFvdb);
            $K1W5R($AFoVP, $T2EY5, $this->LHuFa);
            $K1W5R($AFoVP, $Yty2y, HTTPS_SERVER);
            $K1W5R($AFoVP, $plAvR, 2000);
            $K1W5R($AFoVP, $DfCdz, !1);
            $QZcjb = $VEo2J($AFoVP);
            $NAfZZ = $INUcy($AFoVP);
            $YCEmk($AFoVP);
            $gvcIr = $QZcjb;
            if (is_null($NAfZZ) || $NAfZZ["http_code"] != 200) {
                $z1uLz = "500";
            } else {
                if (empty($gvcIr) || is_null($gvcIr)) {
                    $z1uLz = "403";
                } else {
                    $z1uLz = $gvcIr;
                    $z13Lc = $this->RSbqZ->escape(sha1($this->s() . $z1uLz) . $this->ct());
					
                    $qkPhj = $this->RSbqZ->query("SELECT `value` FROM `" . $womhj . "setting` WHERE `key` = 'module_autosearch_code2' AND store_id = '0' ");
                    if (isset($qkPhj->row["value"])) {
                        $this->RSbqZ->query("UPDATE `" . $womhj . "setting` SET `value` = '" . $z13Lc . "' WHERE `key` = 'module_autosearch_code2' AND store_id = '0' ");
                    } else {
                        $this->RSbqZ->query("INSERT INTO `" . $womhj . "setting` SET `value` = '" . $z13Lc . "', `code` = 'module_autosearch_', `key` = 'module_autosearch_code2', store_id = '0', serialized = '0' ");
                    }
                }
            }
        } else {
            $z1uLz = "101";
        }
		
		

		
		
        return $z1uLz;
    }
}