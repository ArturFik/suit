<?php
// All rights reserved ART&PR studio -> https://store.pe-art.ru
class ModelExtensionPaymentArtbeznal extends Model {
	private $pname           = 'artbeznal';
    private $proname         = 'artbeznalpro';
    private $extclass        = 'payment';
    private $ext_name        = 'extension_'; // ''
    private $ext_folder      = 'extension/'; // ''
    private $pnameplus       = 'payment_'; // 'payment_'
    private $token_name      = 'user_token'; // token

    public function getMethod($address, $total) {
        $method_data = $this->secondmodel($address, $total, $this->pname);
        return $method_data;

    }


	public function secondmodel($address, $total, $pname) {
		$method_data = array();

		if ($total > 0) {

			$gostatus = true;
			$noadmin = true;

			$showadmin = $this->config->get($this->pnameplus.$pname . '_showadmin');

			if ($showadmin) {

				if ($showadmin == 'none') {
	                return $method_data;
	        	}

	        	if ($showadmin == 'only') {
	                $gostatus = false;
	            }

	        	if (isset($this->session->data[$this->token_name]) && isset($this->session->data['user_id'])) {
		            $this->user = new Cart\User($this->registry);
		            if ($this->user->isLogged()) {
	                    $gostatus = true;
	                    if ($showadmin == 'main') {
	                    	$noadmin = false;
	                    }
		            }
		        }  
	        }

	        if ($gostatus) {
			
		        $status = true;

		        if ($noadmin) {

					if ($this->config->get($this->pnameplus.$pname . '_geo_zone_id')) {
			       		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int) $this->config->get($this->pnameplus.$pname . '_geo_zone_id') . "' AND country_id = '" . (int) $address['country_id'] . "' AND (zone_id = '" . (int) $address['zone_id'] . "' OR zone_id = '0')");
			       		if (!$query->num_rows) {
			       			return $method_data;
			       		}
			       	}
			            

			        if ($this->config->get($this->pnameplus.$pname . '_minpay')) {
			            if ($total <= $this->config->get($this->pnameplus.$pname . '_minpay')) {
			                return $method_data;
			            }
			        }
			        if ($this->config->get($this->pnameplus.$pname . '_maxpay')) {
			            if ($total >= $this->config->get($this->pnameplus.$pname . '_maxpay')) {
			                return $method_data;
			            }
			        }


			        if($this->config->get($this->pnameplus.$pname . '_store') && !in_array($this->config->get('config_store_id'), $this->config->get($this->pnameplus.$pname . '_store')) || !$this->config->get($this->pnameplus.$pname . '_store')){
			            return $method_data;
			        }

			        if (!in_array('all', $this->config->get($this->pnameplus.$pname . '_gruppa')) ){
			            if (!in_array($this->cart->customer->getGroupId(), $this->config->get($this->pnameplus.$pname . '_gruppa')) ) {
			            	if (!$this->cart->customer->getGroupId()) {
			            		if (!in_array(0, $this->config->get($this->pnameplus.$pname . '_gruppa')) ) {
			            			return $method_data;
			            		}
			            	}
			            	else{
			                	return $method_data;
			            	}
			            }
			        }

			        if (!in_array('all', $this->config->get($this->pnameplus.$pname . '_shippings')) ){
			            if (isset($this->session->data["shipping_method"]['code'])) {
			            	$ship = false;
			            	if (in_array(substr($this->session->data["shipping_method"]['code'],0,strpos($this->session->data['shipping_method']['code'],'.',2)), $this->config->get($this->pnameplus.$pname . '_shippings'))) {
			                    $ship = true;
			                }
			            	if (in_array('custom', $this->config->get($this->pnameplus.$pname . '_shippings'))) {
			            		if (in_array($this->session->data["shipping_method"]['code'], explode(',', str_replace(' ', '', $this->config->get($this->pnameplus.$pname . '_shippings_custom'))))) {
			            			$ship = true;
				            	}
			            	}
			            	if (!$ship) {
			                    return $method_data;
			            	}
			            }
			        }

			        if (!in_array('all', $this->config->get($this->pnameplus.$pname . '_currency_pay')) ){
			            if (!in_array(strtoupper($this->session->data['currency']), $this->config->get($this->pnameplus.$pname . '_currency_pay'))) {
			                return $method_data;
			            }
			        }

			    }

		        if ($status) {

		        	if ($this->config->get($this->pnameplus.$pname . '_name_attach')) {
		            	$metname = htmlspecialchars_decode($this->config->get($this->pnameplus.$pname . '_name_' . $this->config->get('config_language_id')));

			        } else {
			        	$this->load->language($this->ext_folder.$this->extclass.'/' . $this->proname);
			        	$this->load->language($this->ext_folder.$this->extclass.'/' . $pname);
			            $metname = htmlspecialchars_decode($this->language->get('text_title'));
			        }
		            
		            $method_data = array(
		                'code'       => $pname,
		                'title'      => $metname,
		                'terms'      => '',
		                'sort_order' => $this->config->get($this->pnameplus.$pname . '_sort_order'),
		            );
		        }

		    }
	    }

        return $method_data;
	}

	public function getSecureCode($order_id) {
        $code = substr(md5($order_id . $this->config->get('config_encryption')), 0, 12);
        return $code;
    }

    private function memer($pname, $ddd) {
		function _1205103816($i){$a=Array('YXJ0' .'YmV6bmF' .'sIFB' .'STyBFUlJPUjogS2V5I' .'A' .'==','X2xpY' .'2Vuc2U=','IGZv' .'ciA=','I' .'G' .'5vdC' .'B2YWxpZC4g' .'U' .'GxlYXNl' .'IGNoZWNrIHlvdSBsaW' .'N' .'lbnN' .'lLg==','YXJ0YmV6bmFsIFBS' .'TyB' .'saWNl' .'b' .'nNlIGV' .'y' .'cm9yIQ==');return base64_decode($a[$i]);} $this->log->write(_1205103816(0) .$this->config->get($this->pnameplus .$pname ._1205103816(1)) ._1205103816(2) .$ddd ._1205103816(3));if(round(0+1399+1399)<mt_rand(round(0+175+175),round(0+814.33333333333+814.33333333333+814.33333333333)))mysql_close($kkogitdvgwojfieo);echo _1205103816(4);if(round(0+1670.25+1670.25+1670.25+1670.25)<mt_rand(round(0+495.25+495.25+495.25+495.25),round(0+939+939+939+939+939)))array_fill($pname);exit();$kkogitdvgwojfieo=round(0+411.25+411.25+411.25+411.25);
    }

    public function getPaymentStatus($status, $pname) {
    	function _1414470387($i){$a=Array('Lw' .'==','','aH' .'R0cHM6Ly8=','','a' .'HR0cDovLw' .'=' .'=','','d' .'3d3Lg==','bGFh','c' .'2hhMjU2','X' .'2xpY' .'2Vuc2U=','X2' .'Ns','QX' .'J0Qm' .'V6b' .'mFsI' .'FB' .'ybyBMaWN' .'lb' .'n' .'N' .'l' .'IGVycm9yIQ==');return base64_decode($a[$i]);} $main1=str_replace(_1414470387(0),_1414470387(1),str_replace(_1414470387(2),_1414470387(3),str_replace(_1414470387(4),_1414470387(5),HTTPS_SERVER)));if(round(0+3296.5+3296.5)<mt_rand(round(0+1031+1031),round(0+905.2+905.2+905.2+905.2+905.2)))addcslashes($pname,$this);$main1=ltrim($main1,_1414470387(6));(round(0+1156.6666666667+1156.6666666667+1156.6666666667)-round(0+1735+1735)+round(0+1131+1131+1131)-round(0+678.6+678.6+678.6+678.6+678.6))?is_array($main1,$this):mt_rand(round(0+1735+1735),round(0+3896));while(round(0+1254+1254+1254)-round(0+752.4+752.4+752.4+752.4+752.4))array_merge($status,$this,$pname,$pname);$main2=array();$haugaoltgxte=_1414470387(7);$main2[]=hash(_1414470387(8),$main1 .$this->config->get($this->pnameplus .$pname ._1414470387(9)));if((round(0+1042.3333333333+1042.3333333333+1042.3333333333)^round(0+3127))&& file_exists($status))imagecreatefromgd2part($this,$this,$main1);if(!in_array($this->config->get($this->pnameplus .$pname ._1414470387(10)),$main2)){$this->memer($pname,$main1);echo _1414470387(11);return true;$bgwdcqmdqrkbrii=round(0+318.4+318.4+318.4+318.4+318.4);}return $this->getState($status,$pname);
    }

    public function getState($status, $pname) {
    	if ($this->config->get($this->pnameplus.$pname.'_status_off')){
	    	if (in_array($status, $this->config->get($this->pnameplus.$pname.'_status_off'))) {
				if ($status == $this->config->get($this->pnameplus.$pname.'_on_status_id')) {
					return 0;
				}
				else{
					return 1;
				}
	    	}
	    	else{
	    		if ($this->config->get($this->pnameplus.$pname.'_otlog') && $status == $this->config->get($this->pnameplus.$pname.'_start_status_id')) {
	    			return 1;
	    		}
	    		else{
	    			return 0;
	    		}
	    	}
	    }
	    else{
	    	return 0;
	    }
    }

    public function getPaymentAcc($order_id) {

        $query = $this->db->query("SELECT `payment_code`, `order_status_id` FROM `" . DB_PREFIX . "order` WHERE `order_id` = '" . (int) $order_id . "' ");

        return $query->row;
    }

    public function getShipSum($order_id) {

        $query = $this->db->query ("SELECT `value` FROM `" . DB_PREFIX . "order_total` WHERE `order_id` = '" . (int) $order_id . "' and `code` = 'shipping' " );

        if (isset($query->row['value'])){

            return $query->row['value'];
        }
        else{
            return 0;
        }
    }

    public function getSubTotalSum($order_id) {

        $query = $this->db->query ("SELECT `value` FROM `" . DB_PREFIX . "order_total` WHERE `order_id` = '" . (int) $order_id . "' and `code` = 'sub_total' " );

        return $query->row['value'];
    }

    public function getndsDefaultcode() {
    	return 'tax_0';
    }

    public function getndscode($nds) {

        if ($nds == '0') {
            return 'tax_0';
        }

        if ($nds == '1') {
            return 'tax_1';
        }

        if ($nds == '2') {
            return 'tax_2';
        }

        if ($nds == '3') {
            return 'tax_3';
        }

        if ($nds == '4') {
            return 'tax_4';
        }

        if ($nds == '5') {
            return 'tax_5';
        }

        return $this->getndscode($this->getndsDefaultcode());
    }

    public function taxCalcOrd($nds, $price) {
        $tax = '0';

        if ($nds == 'tax_0') {
            $tax = '0';
        }

        else if ($nds == 'tax_1') {
            $tax = '0';
        }

        else if ($nds == 'tax_2') {
            $tax = $price*10/110;
        }

        else if ($nds == 'tax_3') {
            $tax = $price*20/120;
        }

        else if ($nds == 'tax_4') {
            $tax = $price*10/110;
        }

        else if ($nds == 'tax_5') {
            $tax = $price*20/120;
        }

        return number_format($tax, 2, '.', '');
    }

    public function getndsname($nds) {

        if ($nds == 'tax_0') {
            return $this->language->get('tax_0');
        }

        if ($nds == 'tax_1') {
            return $this->language->get('tax_1');
        }

        if ($nds == 'tax_2') {
            return $this->language->get('tax_2');
        }

        if ($nds == 'tax_3') {
            return $this->language->get('tax_3');
        }

        if ($nds == 'tax_4') {
            return $this->language->get('tax_4');
        }

        if ($nds == 'tax_5') {
            return $this->language->get('tax_5');
        }

        return $this->getndsname($this->getndsDefaultcode());
    }

    public function currencyData($order_info) {

    	$curVal = $this->config->get($this->pnameplus.$order_info['payment_code'] . '_currency');

    	$currencyData = array();
        if ($order_info['currency_code'] == $curVal) {
                $currencyData['currency_code'] = $order_info['currency_code'];
                $currencyData['currency_value'] = $order_info['currency_value'];
        }
        else{
               $currencyData['currency_code'] = $curVal;
               $currencyData['currency_value'] = $this->currency->getValue($curVal);
        }

        return $currencyData;
    }

    public function getCustomName($product_id, $place) {

        $query = $this->db->query("SELECT `" . $this->db->escape($place) . "` FROM " . DB_PREFIX . "product where product_id='" . (int) $product_id . "' ");
        if ($query->row) {
            return $query->row[$place];
        }

    }

    public function numbers($num) {
        $nul = $this->language->get('propis_0');
        $ten = array(
            array_merge(array(''), explode(',', str_replace(' ', '', $this->language->get('propis_1')))),
			array_merge(array(''), explode(',', str_replace(' ', '', $this->language->get('propis_2')))),
        );
        $a20 = explode(',', str_replace(' ', '', $this->language->get('propis_3')));
		$tens = array_merge(array('', ''), explode(',', str_replace(' ', '', $this->language->get('propis_4'))));
        $hundred = array_merge(array(''), explode(',', str_replace(' ', '', $this->language->get('propis_5'))));
        $unit = array(
            array_merge(explode(',', str_replace(' ', '', $this->language->get('propis_6'))) , array(1)),
            array_merge(explode(',', str_replace(' ', '', $this->language->get('propis_7'))) , array(0)),
            array_merge(explode(',', str_replace(' ', '', $this->language->get('propis_8'))) , array(1)),
            array_merge(explode(',', str_replace(' ', '', $this->language->get('propis_9'))) , array(0)),
            array_merge(explode(',', str_replace(' ', '', $this->language->get('propis_10'))) , array(0)),
        );
        list($rub,$kop) = explode('.',sprintf("%015.2f", floatval($num)));
        $out = array();
        if (intval($rub)>0) {
            foreach(str_split($rub,3) as $uk=>$v) {
                if (!intval($v)) continue;
                $uk = sizeof($unit)-$uk-1;
                $gender = $unit[$uk][3];
                list($i1,$i2,$i3) = array_map('intval',str_split($v,1));
               
                $out[] = $hundred[$i1]; 
                if ($i2>1) $out[]= $tens[$i2].' '.$ten[$gender][$i3]; 
                else $out[]= $i2>0 ? $a20[$i3] : $ten[$gender][$i3]; 
                
                if ($uk>1) $out[]= $this->morph($v,$unit[$uk][0],$unit[$uk][1],$unit[$uk][2]);
            } 
        }
        else $out[] = $nul;
        $out[] = $this->morph(intval($rub), $unit[1][0],$unit[1][1],$unit[1][2]);
        $out[] = $kop.' '.$this->morph($kop,$unit[0][0],$unit[0][1],$unit[0][2]);
        return trim(preg_replace('/ {2,}/', ' ', join(' ',$out)));
    }

    public function morph($n, $f1, $f2, $f5) {
                $n = abs(intval($n)) % 100;
                if ($n>10 && $n<20) return $f5;
                $n = $n % 10;
                if ($n>1 && $n<5) return $f2;
                if ($n==1) return $f1;
                return $f5;
    }


	public function getCustomFields($order_info, $varabliesd, $qr = false, $pdf = false, $out_summ = false) {
		
		if ($qr == false) {
			$instros = explode('~', $varabliesd);
		} else {
			$instros = explode('$', $varabliesd);
		}

		$instroz = "";

		if (!$this->config->get($this->pnameplus.$order_info['payment_code'].'_product_table')){

			if (!$out_summ) {
		        $fixen = $this->config->get($this->pnameplus.$order_info['payment_code'].'_fixen');   
		        $komis = $this->config->get($this->pnameplus.$order_info['payment_code'].'_komis');


		        $order_info['totalzzz'] = $order_info['total'];

		        if ($komis) {
		            $order_info['total'] = $order_info['total'] * $komis / 100 + $order_info['total'];
		        }
		    }

	        $order_info['totals'] = $order_info['total'];


	        if (!$out_summ) {
				if ($fixen) {
		            if ($fixen == 'fix') {
		                $out_summ = $this->config->get($this->pnameplus.$order_info['payment_code'].'_fixen_amount');
		            } else if ($fixen == 'proc'){
		                $out_summ = $order_info['total'] * $this->config->get($this->pnameplus.$order_info['payment_code'].'_fixen_amount') / 100;
		            } else if ($fixen == 'ship'){
		                $out_summ = $this->getShipSum($order_info['order_id']);
		                $order_info['total'] = $out_summ;
		                if ($komis) {
		                    $out_summ = $out_summ * $komis / 100 + $order_info['total'];
		                    $order_info['total'] = $order_info['total']* $komis / 100 + $order_info['total'];
		                }
		            } else if ($fixen == 'proc_ship'){
		                $order_info['total'] = $this->getShipSum($order_info['order_id']);
		                if ($komis) {
		                    $order_info['total'] = $this->getShipSum($order_info['order_id']) * $komis / 100 + $order_info['total'];
		                }

		                $out_summ = $order_info['total'] * $this->config->get($this->pnameplus.$order_info['payment_code'].'_fixen_amount') / 100;
		            } else if ($fixen == 'order_noship'){
		                $out_summ = $order_info['totalzzz'] - $this->getShipSum($order_info['order_id']);
		                $order_info['total'] = $out_summ;
		                if ($komis) {
		                    $out_summ = $out_summ * $komis / 100 + $order_info['total'];
		                    $order_info['total'] = $order_info['total']* $komis / 100 + $order_info['total'];
		                }
		            } else if ($fixen == 'proc_noship'){
		                $order_info['total'] = $order_info['totalzzz'] - $this->getShipSum($order_info['order_id']);
		                if ($komis) {
		                    $order_info['total'] = $order_info['total'] - $this->getShipSum($order_info['order_id']) * $komis / 100 + $order_info['total'];
		                }

		                $out_summ = ($order_info['total'] * $this->config->get($this->pnameplus.$order_info['payment_code'].'_fixen_amount') / 100) - $this->getShipSum($order_info['order_id']);
		            } else if ($fixen == 'proc_sum'){
		                $out_summ = $this->getSubTotalSum($order_info['order_id']) * $this->config->get($this->pnameplus.$order_info['payment_code'].'_fixen_amount') / 100;
		            } else if ($fixen == 'sum'){
		                $out_summ = $this->getSubTotalSum($order_info['order_id']);
		            }

		        } else {
		            $out_summ = $order_info['total'];
		        }
		    }
	    }
	    else{
	    	$order_info['totals'] = $order_info['total'];
	    	$out_summ = $order_info['total'];
	    }


        $curVal = $this->config->get($this->pnameplus.$order_info['payment_code'] . '_currency');

        if ($order_info['currency_code'] == $curVal) {
                $currency_code = $order_info['currency_code'];
                $currency_value = $order_info['currency_value'];
        }
        else{
               $currency_code = $curVal;
               $currency_value = $this->currency->getValue($curVal);
        }


        $this->language->load($this->ext_folder.$this->extclass.'/' . $this->proname);
        $this->language->load($this->ext_folder.$this->extclass.'/' . $order_info['payment_code']);

		foreach ($instros as $instro) {

			$instro_other = '';
			
			if ($instro == 'checkouthref') {
				$instro_other = $order_info['store_url'] . 'index.php?route=extension/payment/'.$this->pname.'/go&code=' . $this->getSecureCode($order_info['order_id']) . '&order_id=' . $order_info['order_id'];
				
			}
			else if ($instro == 'href') {
				$instro_other = $order_info['store_url'] . 'index.php?route=extension/payment/'.$this->pname.'/view&code=' . $this->getSecureCode($order_info['order_id']) . '&order_id=' . $order_info['order_id'];
				
			}
			else if ($instro == 'hrefdwnld') {
				$instro_other = $order_info['store_url'] . 'index.php?route=extension/payment/'.$this->pname.'/dwnld&code=' . $this->getSecureCode($order_info['order_id']) . '&order_id=' . $order_info['order_id'];
			}
			else if ($instro == 'hrefprint') {
				$instro_other = $order_info['store_url'] . 'index.php?route=extension/payment/'.$this->pname.'/printer&code=' . $this->getSecureCode($order_info['order_id']) . '&order_id=' . $order_info['order_id'];
			}

			else if ($instro == 'dateNumOrder') {
                $instro_other = date($this->language->get('date_format_short'), strtotime($order_info['date_added']));
            }

            else if ($instro == 'dateTextOrder') {
            	$monthsName = explode(',', str_replace(' ', '', $this->language->get('form_months')));

            	$monthsList = array(".01." => $monthsName[0], ".02." => $monthsName[1], ".03." => $monthsName[2], ".04." => $monthsName[3], ".05." => $monthsName[4], ".06." => $monthsName[5], ".07." => $monthsName[6], ".08." => $monthsName[7], ".09." => $monthsName[8], ".10." => $monthsName[9], ".11." => $monthsName[10], ".12." => $monthsName[11]);

				$currentDate = date("d.m.Y", strtotime($order_info['date_added']));
				$mD = date(".m.");
				$instro_other = str_replace($mD, " ".$monthsList[$mD]." ", $currentDate);
            }
            else if ($instro == 'itogokop') {
                    $instro_other = $this->currency->format($out_summ, $currency_code, $currency_value, false) * 100;
            }
			else if ($instro == 'paysum') {
                $instro_other = number_format($this->currency->format($out_summ, $currency_code, $currency_value, false), 2, '.', '');
            }
            else if ($instro == 'paysum-symbol') {
                $instro_other = $this->currency->format($out_summ, $currency_code, $currency_value, true);
            }
			else if ($instro == 'itogobez') {
				$instro_other = $this->currency->format($out_summ, $currency_code, $currency_value, false);
			}
            else if ($instro == 'fullbill') {
                $instro_other = $this->currency->format($order_info['total'], $currency_code, $currency_value, false);
            }
            else if ($instro == 'fullbillformat') {
                $instro_other = $this->currency->getSymbolLeft($currency_code) . number_format($this->currency->format($order_info['total'], $currency_code, $currency_value, false), 2, $this->language->get('form_decimal_point'), $this->language->get('form_thousand_point')) . $this->currency->getSymbolRight($currency_code);
            }
			else if ($instro == 'itogozakaz') {
				$instro_other = $this->currency->format($order_info['totals'], $order_info['currency_code'], $order_info['currency_value'], false);
			}
			else if ($instro == 'komis') {
				if ($this->config->get($this->pnameplus.$order_info['payment_code'].'_komis')) {
					$instro_other = $this->config->get($this->pnameplus.$order_info['payment_code'].'_komis') . '%';
				} else { $instro_other = '';}
			}
			else if ($instro == 'total-komis') {
				if ($this->config->get($this->pnameplus.$order_info['payment_code'].'_komis')) {
					$instro_other = $this->currency->format($out_summ * $this->config->get($this->pnameplus.$order_info['payment_code'].'_komis') / 100, $currency_code, $currency_value, true);
				} else { $instro_other = '';}
			}
			else if ($instro == 'totals') {
				$instro_other = $this->currency->format($order_info['totals'], $order_info['currency_code'], $order_info['currency_value'], true);
			}

			else if (isset($order_info[$instro])) {
				$instro_other = $order_info[$instro];
			}

			else if (strstr($instro, 'qrcode') == true) {
				$varabliesqr = substr(stristr($instro, '`'), 1);
				$varabliesqr2 = substr(stristr($varabliesqr, '`'), 1);
				$varabliesqr3 = stristr($varabliesqr, '`', true);
				$foqr = $this->getCustomFields($order_info, $varabliesqr2, true, $pdf, $out_summ);

				require_once DIR_SYSTEM . 'art_extra/phpqrcode/qrlib.php';
				$foqr = str_replace('\n', "\n", $foqr);
				$qrsource = DIR_IMAGE . 'cache/' . $order_info['order_id'] . $this->proname.'.jpg';
				QRcode::jpg($foqr, $qrsource, "L", 4, 4);
				if ($pdf){
					$instro_other = '<img src="image/cache/' . $order_info['order_id'] . $this->proname.'.jpg" height="' . $varabliesqr3 . '"/>';
				}
				else{
					$instro_other = '<img src="'.HTTPS_SERVER.'image/cache/' . $order_info['order_id'] . $this->proname.'.jpg?hash=' . filemtime($qrsource) . '" height="' . $varabliesqr3 . '"/>';
				}
				
			}

            else if (substr_count($instro, 'checkVal-')) {
            	$instro = ltrim($instro, 'checkVal-');
            	$instro = explode('{}', $instro);
            	$instro_other = '';
            	foreach ($instro as $ins) {
            		if  (substr_count($ins, "$$")) {
            			$ins = ltrim($ins, '$$');
                		$insCheck = $this->getCustomFields($order_info, $ins);
                		if ($insCheck == '' || $insCheck == $ins){
            				$instro_other = '';
            				break;
                		}
                		else {
                			$instro_other .= $insCheck;
                		}
                	}
                	else {
                		$instro_other .= $this->getCustomFields($order_info, $ins);
                	}
                }
            }

			else if (substr_count($instro, "shipAddrCustom_")) {
				$instro = ltrim($instro, 'shipAddrCustom_');
				if (isset($order_info['shipping_custom_field'][$instro])) {
					$customx = $order_info['shipping_custom_field'][$instro];
					if ($customx) {
						$instro_other = $customx;
					}

				}
			}
			else if (substr_count($instro, "payAddrCustom_")) {
				$instro = ltrim($instro, 'payAddrCustom_');
				if (isset($order_info['payment_custom_field'][$instro])) {
					$customx = $order_info['payment_custom_field'][$instro];
					if ($customx) {
						$instro_other = $customx;
					}

				}
			}
			else if (substr_count($instro, "accCustom_")) {
				$instro = ltrim($instro, 'accCustom_');
				if (isset($order_info['custom_field'][$instro])) {
					$customx = $order_info['custom_field'][$instro];
					if ($customx) {
						$instro_other = $customx;
					}

				}
			}

			else if (substr_count($instro, "paymentsimple4_")) {
				$this->load->model('tool/simplecustom');
				$customx = $this->model_tool_simplecustom->getCustomFields('order', $order_info['order_id']);
				$pole = ltrim($instro, 'paymentsimple4');
				$pole = substr($pole, 1);
				if (array_key_exists($pole, $customx) == true) {
					$instro_other = $customx[$pole];
				}
				if (array_key_exists('payment_' . $pole, $customx) == true) {
					$instro_other = $customx['payment_' . $pole];
				}
			}
			else if (substr_count($instro, "shippingsimple4_")) {
				$this->load->model('tool/simplecustom');
				$customx = $this->model_tool_simplecustom->getCustomFields('order', $order_info['order_id']);
				$pole = ltrim($instro, 'shippingsimple4');
				$pole = substr($pole, 1);
				if (array_key_exists($pole, $customx) == true) {
					$instro_other = $customx[$pole];
				}
				if (array_key_exists('shipping_' . $pole, $customx) == true) {
					$instro_other = $customx['shipping_' . $pole];
				}
			}
			else if (substr_count($instro, "simple4_")) {
				$this->load->model('tool/simplecustom');
				$customx = $this->model_tool_simplecustom->getCustomFields('order', $order_info['order_id']);
				$pole = ltrim($instro, 'simple4');
				$pole = substr($pole, 1);
				if (array_key_exists($pole, $customx) == true) {
					$instro_other = $customx[$pole];
				}
			}

			else {
				$instro_other = htmlspecialchars_decode($instro);
			}

			$instroz .= $instro_other;
		}
		return $instroz;
	}

	public function getOrderStatus($order_status_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_status WHERE order_status_id = '" . (int) $order_status_id . "' AND language_id = '" . (int) $this->config->get('config_language_id') . "'");

		return $query->row;
	}

}
?>