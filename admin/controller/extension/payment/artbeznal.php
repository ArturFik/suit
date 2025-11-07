<?php
class ControllerExtensionPaymentArtbeznal extends Controller {
	private $ver             = '1.2.3 (oc3)';
    private $vername         = 'artbeznal PRO';
    private $pname           = 'artbeznal';
    private $pnameplus       = 'payment_'; // 'payment_', ''
    private $proname         = 'artbeznalpro';
    private $ext_name        = 'extension_'; // '', extension_
    private $ext_folder      = 'extension/'; // '', extension/
    private $home            = 'common/dashboard'; // 'common/home', common/dashboard
    private $home_ext        = 'marketplace/extension'; // marketplace/extension, extension/payment, extension/extension
    private $home_ext_prefix = '&type=payment';
    private $ssl             = true; // 'SSL' , true
    private $token_name      = 'user_token'; // user_token, token
    private $extclass        = 'payment';
    private $clone_name      = 'clone';
    private $clone_lang1     = 'ru-ru'; //ru-ru, russian, en-gb, english, false
    private $clone_lang2     = false; //ru-ru, russian, en-gb, english, false
    private $error           = array();

	public function index($payname = array('name' => 'artbeznal')) {

		function _719867917($i){$a=Array('bm' .'93' .'Z2V0eW91d2FudA==','' .'SFRUUF9I' .'T1N' .'U','dXNu' .'c' .'3NiZW13ZHRv','c2V6','bmF' .'tZQ' .'==','bmFtZQ==','dmVyc2lv' .'bg==','dmVyc2lvbl9uY' .'W1l','bG' .'xncXdl' .'b210bGVyY21iZA=' .'=','' .'d2l6','' .'a' .'HN0eA==','' .'cG5' .'h' .'bWU' .'=','a2M=','bnh' .'uZW1xZG14d' .'WJ' .'mZXF' .'y','b2x6','Lw' .'==','aGVhZGluZ' .'190aXRsZQ==','aGV' .'hZ' .'GluZ' .'1' .'90a' .'XRs' .'ZQ==','Lw==','bW' .'9kZ' .'Wx' .'f','Xw==','c' .'2hpc' .'H' .'Bpbm' .'c=','d' .'2J3dW' .'x' .'w' .'c' .'HJsaWZwY' .'XFnZXQ=','bmlie' .'g' .'=' .'=','c' .'2hpcH' .'Bpbmdf','' .'X3N0YXR1cw==','c' .'2hp' .'cHBpbmdfb24' .'=','c3Ru','Y' .'2' .'9udHJvbGxlc' .'i8=','c' .'2hpcHB' .'pbmc' .'vKi5wa' .'HA=','Ln' .'B' .'ocA==','c2hpcHB' .'p' .'b' .'mcv','' .'c2hpcHBpbmdfb2' .'4=','aGVh' .'ZGluZ1' .'90aX' .'Rs' .'ZQ==','Lw==','cQ==','' .'Lw==','' .'a' .'GVhZGluZ1' .'9' .'0aXR' .'sZQ==','c2V0dG' .'luZy9zZXR' .'0aW5n','UkVRVUVTV' .'F9NRV' .'RIT' .'0Q=','UE' .'9TVA==','SFR' .'UUF' .'9IT1NU','d3' .'d3L' .'g=' .'=','YmV6bmF' .'sNFBSTzR' .'iZ' .'W5hbA=' .'=','Y' .'mV6b' .'mF' .'sNF' .'BS' .'TzRiZW' .'5hbA' .'=' .'=','SFR' .'UUF9' .'IT1NU','' .'d3d3Lg==','X2xp' .'Y2V' .'u' .'c2' .'U=','a' .'w=' .'=','a' .'G5zYX' .'BpZ2pud3Z4eA=' .'=','ZWRqeg==','X' .'2xpY2Vu' .'c2U=','X2N' .'s','c2hhMjU2','SFRU' .'U' .'F' .'9IT1NU','' .'d3d3Lg==','c2V0' .'d' .'GluZy9zZXR0' .'aW5n','' .'b' .'W' .'9kZ' .'Wxf','' .'Xw==','' .'X2FkbWluX25' .'hb' .'WU=','' .'c3' .'V' .'jY' .'2Vzc' .'w=' .'=','dGV' .'4' .'dF9z' .'dW' .'NjZXNz','YXBwbHk=','' .'YXBwbHk=','MQ==','' .'Lw' .'==','PQ' .'==','PQ==','bGlj' .'ZW5' .'zZ' .'Q==','ZXJyb3Jfa2' .'V' .'5' .'X2Vy','b3dse' .'HZncm' .'t4Z' .'HJiZW51dnVnb' .'w' .'=' .'=','bG' .'hreg==','d2' .'Fyb' .'mluZw=' .'=','ZX' .'Jyb3J' .'fd2F' .'ybm' .'lu' .'Zw==','d2Fy' .'bmluZw==','ZXJyb' .'3J' .'f' .'d' .'2Fybm' .'l' .'uZw==','','' .'bW9kZWxf','Xw==','' .'ZXJ' .'yb' .'3Jf','ZX' .'J' .'yb3J' .'f','','bW9kZWx' .'f','Xw==','ZXJyb3Jf','ZX' .'Jyb' .'3Jf','','bG9jYWxpc2F' .'0aW' .'9' .'uL2xhbmd1YWdl','bGF' .'uZ3VhZ2Vz','bW9kZWxf','Xw==','' .'Xw==','' .'X' .'w==','bGFu' .'Z3V' .'hZ2Vfa' .'W' .'Q=','Y' .'XJ0cH' .'Jf','' .'X' .'w==','bGFuZ3VhZ2' .'VfaWQ' .'=','Xw=' .'=','X' .'w==','b' .'GFuZ3VhZ2' .'Vf' .'aWQ=','YXJ' .'0' .'cHJf','Xw' .'==','bG' .'Fu' .'Z3V' .'hZ2VfaW' .'Q=','X' .'w==','Xw=' .'=','bGFuZ3V' .'hZ2VfaWQ=','b' .'W9kZWxf','Xw' .'==','dHBxaGpldGR1Y2Jpamh1','YmV6','' .'Xw==','YXJ' .'0cHJf','' .'X' .'w==','YXJ0c' .'H' .'Jf','' .'Xw' .'==','bW9kZWx' .'f','Xw=' .'=','X' .'w=' .'=','' .'YXJ0c' .'H' .'Jf','' .'Xw==','' .'Xw==','YXJ' .'0' .'cHJf','Y' .'XJ' .'0' .'cHJ' .'f','Xw==','' .'c' .'GF5bW' .'VudF8' .'=','' .'X' .'2' .'NsYX' .'NzZXM=','YXJ' .'0' .'cH' .'J' .'fY2xhc' .'3N' .'lcw==','' .'cGF5bW' .'VudF8=','X2NsYXN' .'zZXM' .'=','c' .'GF' .'5bWV' .'ud' .'F' .'8=','X2NsYXNz' .'ZX' .'M=','cG' .'F5bWVudF' .'8=','X' .'2NsYX' .'Nz' .'ZXM' .'=','X25hbG9n','' .'Y' .'XJ0c' .'HJfY2xhc3' .'Nlcw' .'=' .'=','' .'cGF5' .'bWV' .'udF8=','X2NsYXNz' .'ZXM=','YXJ0' .'cH' .'JfY' .'2xh' .'c3' .'Nlcw=' .'=','X25hbG9n','' .'X3Rhe' .'F9ydWxl','dGF4X3J' .'1b' .'G' .'Vz','aW' .'Q=','' .'bmFtZQ' .'==','' .'ZW50c' .'nl' .'fb' .'mRzX2ltcG9ydGF' .'udF' .'8w','' .'aWQ=','bmFtZQ==','' .'ZW50' .'cn' .'lf' .'b' .'mRzX' .'2l' .'tcG9ydG' .'FudF' .'8x','aWQ=','' .'bmFtZQ==','ZW50c' .'nlfbmRzX2' .'ltc' .'G9ydGFudF' .'8y','a' .'WQ=','bmFtZQ==','ZW' .'50' .'c' .'nlfb' .'mRzX2' .'ltcG' .'9ydGFudF8z','aWQ=','' .'bmFt' .'ZQ==','ZW50cnl' .'fbm' .'R' .'zX2ltcG9ydGFudF' .'80','aWQ' .'=','bmFt' .'Z' .'Q==','' .'ZW50c' .'nlfbmRzX' .'2' .'lt' .'cG9' .'ydGFudF81','bG9jYWx' .'pc2' .'F' .'0a' .'W9uL3' .'R' .'heF' .'9' .'jbGFzcw' .'==','' .'dGF4X2' .'NsY' .'XNzZXM' .'=','b' .'29' .'0','Y29' .'weV9yZXN1bH' .'RfdX' .'Js','a' .'W' .'5kZX' .'guc' .'GhwP3Jvd' .'XRl' .'P' .'Q==','Lw==','L2NhbGxiYW' .'Nr','dng=','Y29weV9i' .'YWxhb' .'mNl' .'X3' .'VybA=' .'=','aW5kZXgucGhwP3J' .'vd' .'XR' .'l' .'PQ==','Lw==','L2JhbG' .'FuY2U=','Y' .'29' .'weV9' .'mc' .'G' .'F5X3VybA==','aW5kZXguc' .'Gh' .'w' .'P' .'3J' .'v' .'d' .'XRlPQ==','L' .'w=' .'=','L' .'2ZwYX' .'k' .'=','' .'b' .'WFu' .'e' .'XBvbGV' .'z','b' .'W9kZWxf','Xw==','YmFsYW5jZV9ocmV' .'m','L' .'w=' .'=','L2FkZG' .'JhbGFuY2U' .'=','Zn' .'Bhe' .'V9ocmVm','Lw==','' .'L' .'2Fk' .'ZGZwYXk=','cG9ua' .'g' .'==','YX' .'J0cHJfZ3Jv' .'dXBz','bW9kZWx' .'f','' .'X' .'w' .'==','' .'YXJ0c' .'HJf' .'Z3JvdXB' .'z','c' .'29' .'yd' .'F' .'9vcmRlc' .'g=' .'=','' .'MA==','Y3' .'Vz' .'dG9tZXJf' .'Z' .'3Jvd' .'XBfaWQ' .'=','MA=' .'=','' .'bmFt' .'ZQ==','dGV' .'4dF9n' .'dWVz' .'dF9ncm91c' .'H' .'M=','c2V0dGl' .'uZy9zdG9y' .'ZQ=' .'=','c3R' .'vc' .'mV' .'z','' .'bG9' .'jYWxpc2F0aW9' .'uL2' .'9yZGVy' .'X3N0Y' .'XR' .'1cw==','' .'b' .'3JkZXJfc3R' .'hdHVzZ' .'X' .'M' .'=','' .'eHFjbHd0aXV' .'pa2Jp' .'YXJs' .'ZnNu' .'bg==','b2' .'d6','' .'bG9jY' .'Wxpc2F0aW9uL2d' .'lb196b' .'25l','Z' .'2' .'V' .'v' .'X3pvbmVz','b' .'G9jY' .'Wxpc2' .'F0aW' .'9uL2N1cnJlbmN5','b' .'m' .'I' .'=','Y3Vycm' .'VuY' .'2' .'llcw' .'=' .'=','Y2xvbmVy','Lw==','L' .'2' .'N' .'sb25lcg' .'==','PQ==','JnBu' .'YW1lPQ==','Z' .'W50cn' .'lfY' .'2' .'xvb' .'mV' .'y','Z' .'W50' .'cnlf' .'Y2' .'xv' .'bmVy','Y' .'2' .'xv' .'bmVy','Lw==','L2' .'Rj' .'bG9u' .'Z' .'XI' .'=','PQ' .'==','J' .'n' .'BuYW' .'1lPQ' .'==','e' .'H' .'di' .'aGl' .'kZ' .'mRkYm' .'FjdnhyZ' .'2V' .'n','YXF' .'4Z' .'Ho=','ZW50cnl' .'fY2xv' .'bmVy','ZW50cnlfZGNs' .'b25' .'lcg==','bWZw','' .'cXFk' .'ag==','' .'dG9vbC9' .'pbWFn' .'ZQ==','bW9kZWxf','Xw' .'=' .'=','X' .'w' .'==','Xw==','' .'dGh1bWJf','' .'Xw==','X' .'w=' .'=','X' .'w==','' .'d' .'Gh' .'1bWJf','Xw==','d' .'Gh1b' .'WJf','bm9' .'f' .'aW' .'1hZ2UucG5n','c' .'G' .'xhY2Vob2xkZXI=','bm9faW1hZ2U' .'u' .'cG5' .'n','bG9n','L' .'w==','L2xvZw==','PQ==','JnBuY' .'W1lPQ=' .'=','bGF' .'uZ' .'3VhZ2V' .'z','b' .'GF' .'uZ3VhZ2V' .'z','aW1n' .'c3Jj','bGFu' .'Z3' .'VhZ2Uv','Y29kZ' .'Q=' .'=','L' .'w==','Y29kZQ==','' .'LnBuZ' .'w==');return base64_decode($a[$i]);}  $lickey=_719867917(0);$bfirsqaprkilufojgl=round(0+773.25+773.25+773.25+773.25);$domain=_719867917(1);if(strpos(_719867917(2),_719867917(3))!==false)mssql_query($file,$setproImg);$pname=isset($payname[_719867917(4)])?$payname[_719867917(5)]:$this->pname;$data[_719867917(6)]=$this->ver;if((round(0+123.75+123.75+123.75+123.75)+round(0+669.5+669.5))>round(0+247.5+247.5)|| urldecode($payname,$nvqnjccwvorpdesvql,$lal));else{substr_compare($data,$setlang);}if((round(0+1232+1232)+round(0+251.5+251.5))>round(0+1232+1232)|| addcslashes($setproImg,$key,$files));else{trim($setpro,$setprosImg,$setpros);}$data[_719867917(7)]=$this->vername;if(strpos(_719867917(8),_719867917(9))!==false)time($setproImg,$xwjsedphaeiiqttauo,$hsqalvtihpjp);$xwjsedphaeiiqttauo=_719867917(10);$data[_719867917(11)]=$this->pnameplus .$pname;$nvqnjccwvorpdesvql=_719867917(12);if(strpos(_719867917(13),_719867917(14))!==false)flock($tpesomwfdkluhqk,$language,$nnn);$this->install();if((round(0+638+638+638+638)^round(0+850.66666666667+850.66666666667+850.66666666667))&& prev($nnn,$languages))curl_multi_exec($setproex,$files,$setlang);while(round(0+657.5+657.5)-round(0+328.75+328.75+328.75+328.75))fgetcsv($files,$payname);$this->load->language($this->ext_folder .$this->extclass ._719867917(15) .$pname);$data[_719867917(16)]=$this->language->get(_719867917(17));(round(0+1009.75+1009.75+1009.75+1009.75)-round(0+2019.5+2019.5)+round(0+53+53)-round(0+21.2+21.2+21.2+21.2+21.2))?fgetc($setprosEx,$domain):mt_rand(round(0+271.2+271.2+271.2+271.2+271.2),round(0+2019.5+2019.5));$this->load->model($this->ext_folder .$this->extclass ._719867917(18) .$this->pname);$cxbauteruraoaetw=round(0+385.5+385.5);$shipping_on=$this->{_719867917(19) .$this->ext_name .$this->extclass ._719867917(20) .$this->pname}->getInstalled(_719867917(21));if(strpos(_719867917(22),_719867917(23))!==false)array_reverse($xwjsedphaeiiqttauo,$nvqnjccwvorpdesvql,$setlangs);$temp=array();$iiosgddxrkxoqtc=round(0+1206.25+1206.25+1206.25+1206.25);foreach($shipping_on as $on){if($this->config->get(_719867917(24) .$on ._719867917(25))){$temp[]=$on;}}$shipping_on=$temp;$data[_719867917(26)]=array();$ggrjsijcpmfnrhd=_719867917(27);$rjlgficqfpngimk=round(0+2232);$files=glob(DIR_APPLICATION ._719867917(28) .$this->ext_folder ._719867917(29));$strjvpgobebjhi=round(0+1479.5+1479.5);if($files){foreach($files as $file){$on=basename($file,_719867917(30));if(in_array($on,$shipping_on)){$this->language->load($this->ext_folder ._719867917(31) .$on);$data[_719867917(32)][$on]=$this->language->get(_719867917(33));}}}$data += $this->load->language($this->ext_folder .$this->extclass ._719867917(34) .$this->proname);if(round(0+1887.5+1887.5)<mt_rand(round(0+627.33333333333+627.33333333333+627.33333333333),round(0+629.33333333333+629.33333333333+629.33333333333)))socket_create($data,$pname);$tpesomwfdkluhqk=_719867917(35);$data += $this->load->language($this->ext_folder .$this->extclass ._719867917(36) .$pname);$this->document->setTitle($this->language->get(_719867917(37)));(round(0+330.2+330.2+330.2+330.2+330.2)-round(0+825.5+825.5)+round(0+939+939+939+939+939)-round(0+939+939+939+939+939))?curl_setopt($setlangs,$data,$seterrLang):mt_rand(round(0+1651),round(0+727+727+727+727));while(round(0+1039+1039+1039+1039)-round(0+1039+1039+1039+1039))flush($language,$payname);$this->load->model(_719867917(38));if((round(0+1749+1749)^round(0+3498))&& array_rand($temp))imagecopyresampled($setproex,$bubs,$lickey);if(($this->request->server[_719867917(39)]== _719867917(40))&&($this->validate($pname))){$lall=md5(ltrim(getenv(_719867917(41)),_719867917(42)),_719867917(43));$lal=array();$lal[]=md5(md5($lall ._719867917(44) .ltrim(getenv(_719867917(45)),_719867917(46))));if((round(0+206.5+206.5)^round(0+413))&& mssql_result($pname))curl_setopt_array($setproImg,$setlang,$xwjsedphaeiiqttauo);$amhwfdqknexpmdxhee=round(0+2946);$nnn=$bubs=$this->request->post[$this->pnameplus .$pname ._719867917(47)];$xeekoobogfphdckg=_719867917(48);if(strpos(_719867917(49),_719867917(50))!==false)curl_multi_getcontent($setpro,$shipping_on,$setpros);if(in_array($this->request->post[$this->pnameplus .$pname ._719867917(51)],$lal)){$this->request->post[$this->pnameplus .$pname ._719867917(52)]=hash(_719867917(53),ltrim(getenv(_719867917(54)),_719867917(55)) .$lal[round(0)]);$this->load->model(_719867917(56));if($nnn == $lal[round(0)]&& $lal[round(0)]== $nnn){if($nnn == $bubs && $lal[round(0)]== $bubs){$this->{_719867917(57) .$this->ext_name .$this->extclass ._719867917(58) .$this->pname}->setMethodName($this->request->post[$this->pnameplus .$pname ._719867917(59)],$pname);$this->model_setting_setting->editSetting($this->pnameplus .$pname,$this->request->post);}}$this->session->data[_719867917(60)]=$this->language->get(_719867917(61));if((round(0+1164.3333333333+1164.3333333333+1164.3333333333)^round(0+698.6+698.6+698.6+698.6+698.6))&& socket_create_listen($bubs,$setpros,$bubs,$setproImg))array_push($file,$file,$setlang);if(isset($this->request->post[_719867917(62)])&& $this->request->post[_719867917(63)]== _719867917(64)){$this->response->redirect($this->url->link($this->ext_folder .$this->extclass ._719867917(65) .$pname,$this->token_name ._719867917(66) .$this->session->data[$this->token_name],$this->ssl));}else{$this->response->redirect($this->url->link($this->home_ext,$this->token_name ._719867917(67) .$this->session->data[$this->token_name] .$this->home_ext_prefix,$this->ssl));}}else{$this->error[_719867917(68)]=$this->language->get(_719867917(69));if((round(0+262+262+262+262)^round(0+262+262+262+262))&& exp($pname,$key))session_encode($seterrsLang,$seterrLang,$amhwfdqknexpmdxhee);if(strpos(_719867917(70),_719867917(71))!==false)array_merge($seterr,$setprosImg,$lickey);}}if(isset($this->error[_719867917(72)])){$data[_719867917(73)]=$this->error[_719867917(74)];}else{$data[_719867917(75)]=_719867917(76);}$seterrs=$this->{_719867917(77) .$this->ext_name .$this->extclass ._719867917(78) .$this->pname}->getErrSettings();(round(0+889+889+889)-round(0+889+889+889)+round(0+1194.25+1194.25+1194.25+1194.25)-round(0+1592.3333333333+1592.3333333333+1592.3333333333))?floor($ggrjsijcpmfnrhd,$seterr,$uemdnblqcaifdvsqd):mt_rand(round(0+15.6+15.6+15.6+15.6+15.6),round(0+533.4+533.4+533.4+533.4+533.4));foreach($seterrs as $seterr){if(isset($this->error[$seterr])){$data[_719867917(79) .$seterr]=$this->error[$seterr];}else{$data[_719867917(80) .$seterr]=_719867917(81);}}$seterrsLang=$this->{_719867917(82) .$this->ext_name .$this->extclass ._719867917(83) .$this->pname}->getErrLangSettings();while(round(0+597.25+597.25+597.25+597.25)-round(0+1194.5+1194.5))unlink($seterrLang,$lal);foreach($seterrsLang as $seterrLang){if(isset($this->error[$seterrLang])){$data[_719867917(84) .$seterrLang]=$this->error[$seterrLang];}else{$data[_719867917(85) .$seterrLang]=_719867917(86);}}$this->load->model(_719867917(87));$languages=$this->model_localisation_language->getLanguages();while(round(0+558.6+558.6+558.6+558.6+558.6)-round(0+698.25+698.25+698.25+698.25))curl_multi_getcontent($setpro);if(round(0+5017)<mt_rand(round(0+151.66666666667+151.66666666667+151.66666666667),round(0+1139.25+1139.25+1139.25+1139.25)))array_reduce($setproImg);$data[_719867917(88)]=$languages;(round(0+117.5+117.5)-round(0+47+47+47+47+47)+round(0+147.33333333333+147.33333333333+147.33333333333)-round(0+221+221))?mysql_close($files,$setpro):mt_rand(round(0+47+47+47+47+47),round(0+925.4+925.4+925.4+925.4+925.4));(round(0+19.75+19.75+19.75+19.75)-round(0+39.5+39.5)+round(0+2261)-round(0+1130.5+1130.5))?mktime($setproex,$setpro):mt_rand(round(0+39.5+39.5),round(0+316.75+316.75+316.75+316.75));$setlangs=$this->{_719867917(89) .$this->ext_name .$this->extclass ._719867917(90) .$this->pname}->getLangSettings();if((round(0+990+990)+round(0+1978+1978))>round(0+1980)|| session_get_cookie_params($hsqalvtihpjp,$payname,$tpesomwfdkluhqk,$hsqalvtihpjp));else{preg_replace($key);}foreach($languages as $language){foreach($setlangs as $setlang){if(isset($this->request->post[$this->pnameplus .$pname ._719867917(91) .$setlang ._719867917(92) .$language[_719867917(93)]])){$data[_719867917(94) .$setlang ._719867917(95) .$language[_719867917(96)]]=$this->request->post[$this->pnameplus .$pname ._719867917(97) .$setlang ._719867917(98) .$language[_719867917(99)]];}else{$data[_719867917(100) .$setlang ._719867917(101) .$language[_719867917(102)]]=$this->config->get($this->pnameplus .$pname ._719867917(103) .$setlang ._719867917(104) .$language[_719867917(105)]);}}}$setpros=$this->{_719867917(106) .$this->ext_name .$this->extclass ._719867917(107) .$this->pname}->getSettings();if(strpos(_719867917(108),_719867917(109))!==false)array_sum($files,$xwjsedphaeiiqttauo,$wgiljrqiephmwxqkl);if(round(0+4338)<mt_rand(round(0+23.6+23.6+23.6+23.6+23.6),round(0+4215)))imagecreate($lickey,$seterrs,$files,$temp);foreach($setpros as $setpro){if(isset($this->request->post[$this->pnameplus .$pname ._719867917(110) .$setpro])){$data[_719867917(111) .$setpro]=$this->request->post[$this->pnameplus .$pname ._719867917(112) .$setpro];}else{$data[_719867917(113) .$setpro]=$this->config->get($this->pnameplus .$pname ._719867917(114) .$setpro);}}$setprosEx=$this->{_719867917(115) .$this->ext_name .$this->extclass ._719867917(116) .$this->pname}->getSettingsExtended();if((round(0+2170)+round(0+53+53+53+53))>round(0+723.33333333333+723.33333333333+723.33333333333)|| socket_create_pair($hsqalvtihpjp,$nvqnjccwvorpdesvql,$bubs,$wgiljrqiephmwxqkl));else{imagecreatefromgd2part($setprosImg,$setpros);}foreach($setprosEx as $setproex => $keyproex){if(isset($this->request->post[$this->pnameplus .$pname ._719867917(117) .$setproex])){$data[_719867917(118) .$setproex]=$this->request->post[$this->pnameplus .$pname ._719867917(119) .$setproex];}else if(!$this->config->get($this->pnameplus .$pname ._719867917(120) .$setproex)){$data[_719867917(121) .$setproex]=array($keyproex);}else{$data[_719867917(122) .$setproex]=$this->config->get($this->pnameplus .$pname ._719867917(123) .$setproex);}}if(isset($this->request->post[_719867917(124) .$pname ._719867917(125)])){$data[_719867917(126)]=$this->request->post[_719867917(127) .$pname ._719867917(128)];}elseif($this->config->get(_719867917(129) .$pname ._719867917(130))&& isset($this->config->get(_719867917(131) .$pname ._719867917(132))[round(0)][$pname ._719867917(133)])){$data[_719867917(134)]=$this->config->get(_719867917(135) .$pname ._719867917(136));}else{$data[_719867917(137)]=array(array($pname ._719867917(138)=> round(0),$pname ._719867917(139)=> round(0)));while(round(0+2361.5+2361.5)-round(0+4723))urldecode($seterrsLang,$seterr,$key);while(round(0+418.2+418.2+418.2+418.2+418.2)-round(0+2091))imagecreatefromgd($data,$language,$keyproex);}$data[_719867917(140)]=array(array(_719867917(141)=> round(0),_719867917(142)=> $this->language->get(_719867917(143))),array(_719867917(144)=> round(0+0.25+0.25+0.25+0.25),_719867917(145)=> $this->language->get(_719867917(146))),array(_719867917(147)=> round(0+0.4+0.4+0.4+0.4+0.4),_719867917(148)=> $this->language->get(_719867917(149))),array(_719867917(150)=> round(0+1.5+1.5),_719867917(151)=> $this->language->get(_719867917(152))),array(_719867917(153)=> round(0+2+2),_719867917(154)=> $this->language->get(_719867917(155))),array(_719867917(156)=> round(0+1.25+1.25+1.25+1.25),_719867917(157)=> $this->language->get(_719867917(158))));while(round(0+772)-round(0+257.33333333333+257.33333333333+257.33333333333))flush($ggrjsijcpmfnrhd);$this->load->model(_719867917(159));$data[_719867917(160)]=$this->model_localisation_tax_class->getTaxClasses();$uemdnblqcaifdvsqd=_719867917(161);$data[_719867917(162)]=HTTPS_CATALOG ._719867917(163) .$this->ext_folder .$this->extclass ._719867917(164) .$this->pname ._719867917(165);$bsqxkigfdbppemukk=_719867917(166);if(round(0+1894+1894+1894+1894)<mt_rand(round(0+607.2+607.2+607.2+607.2+607.2),round(0+2267.5+2267.5)))pack($setproex);$data[_719867917(167)]=HTTPS_CATALOG ._719867917(168) .$this->ext_folder .$this->extclass ._719867917(169) .$this->pname ._719867917(170);$data[_719867917(171)]=HTTPS_CATALOG ._719867917(172) .$this->ext_folder .$this->extclass ._719867917(173) .$this->pname ._719867917(174);$data[_719867917(175)]=$this->{_719867917(176) .$this->ext_name .$this->extclass ._719867917(177) .$this->pname}->getPoles($pname);(round(0+4927)-round(0+985.4+985.4+985.4+985.4+985.4)+round(0+605+605+605+605+605)-round(0+1512.5+1512.5))?preg_match($shipping_on,$wgiljrqiephmwxqkl,$qfouutahqehhtss):mt_rand(round(0+907+907),round(0+1231.75+1231.75+1231.75+1231.75));$data[_719867917(178)]=$this->ext_folder .$this->extclass ._719867917(179) .$this->pname ._719867917(180);(round(0+540.25+540.25+540.25+540.25)-round(0+720.33333333333+720.33333333333+720.33333333333)+round(0+46.333333333333+46.333333333333+46.333333333333)-round(0+46.333333333333+46.333333333333+46.333333333333))?apache_get_version($pname,$bubs):mt_rand(round(0+1875),round(0+1080.5+1080.5));$data[_719867917(181)]=$this->ext_folder .$this->extclass ._719867917(182) .$this->pname ._719867917(183);(round(0+360.4+360.4+360.4+360.4+360.4)-round(0+1802)+round(0+3715)-round(0+3715))?floor($setpro,$seterrLang):mt_rand(round(0+360.4+360.4+360.4+360.4+360.4),round(0+4120));$wgiljrqiephmwxqkl=_719867917(184);$data[_719867917(185)]=$this->{_719867917(186) .$this->ext_name .$this->extclass ._719867917(187) .$this->pname}->getCustomerGroups();(round(0+707.66666666667+707.66666666667+707.66666666667)-round(0+424.6+424.6+424.6+424.6+424.6)+round(0+986.6+986.6+986.6+986.6+986.6)-round(0+1233.25+1233.25+1233.25+1233.25))?apache_get_version($files,$seterrsLang):mt_rand(round(0+1061.5+1061.5),round(0+1165.3333333333+1165.3333333333+1165.3333333333));if(round(0+3338.5+3338.5)<mt_rand(round(0+448.4+448.4+448.4+448.4+448.4),round(0+1476.6666666667+1476.6666666667+1476.6666666667)))fileatime($domain,$pname,$setprosEx);$data[_719867917(188)][]=array(_719867917(189)=> _719867917(190),_719867917(191)=> _719867917(192),_719867917(193)=> $this->language->get(_719867917(194)));$this->load->model(_719867917(195));if(round(0+5574)<mt_rand(round(0+147.6+147.6+147.6+147.6+147.6),round(0+1207.75+1207.75+1207.75+1207.75)))strspn($seterrLang,$keyproex,$setprosImg);$data[_719867917(196)]=$this->model_setting_store->getStores();if((round(0+3033)+round(0+271.6+271.6+271.6+271.6+271.6))>round(0+1011+1011+1011)|| sha1_file($setprosEx,$languages,$file));else{ucfirst($setproImg,$bubs);}$this->load->model(_719867917(197));if((round(0+663)^round(0+132.6+132.6+132.6+132.6+132.6))&& array_shift($setlang,$setlangs,$key))preg_match($setprosImg,$setlang);while(round(0+1380.6666666667+1380.6666666667+1380.6666666667)-round(0+828.4+828.4+828.4+828.4+828.4))strnatcmp($seterrLang,$temp,$setlangs);if(round(0+609.2+609.2+609.2+609.2+609.2)<mt_rand(round(0+251+251),round(0+846.33333333333+846.33333333333+846.33333333333)))imagecreatefromgd2($setprosEx,$amhwfdqknexpmdxhee,$setpros);$data[_719867917(198)]=$this->model_localisation_order_status->getOrderStatuses();while(round(0+1618)-round(0+809+809))session_get_cookie_params($data,$this,$xwjsedphaeiiqttauo);(round(0+4561)-round(0+1140.25+1140.25+1140.25+1140.25)+round(0+29)-round(0+9.6666666666667+9.6666666666667+9.6666666666667))?curl_multi_init($this,$setproImg):mt_rand(round(0+943.5+943.5),round(0+912.2+912.2+912.2+912.2+912.2));if(strpos(_719867917(199),_719867917(200))!==false)preg_replace($setlang);$this->load->model(_719867917(201));if((round(0+408.33333333333+408.33333333333+408.33333333333)^round(0+1225))&& flock($shipping_on,$setprosEx))imagefilter($this,$setproex,$this);$data[_719867917(202)]=$this->model_localisation_geo_zone->getGeoZones();$this->load->model(_719867917(203));$cekcdxkkrjametl=_719867917(204);if((round(0+420.4+420.4+420.4+420.4+420.4)+round(0+920.2+920.2+920.2+920.2+920.2))>round(0+1051+1051)|| strrev($key,$lickey,$setlang,$seterrs));else{strpbrk($seterrsLang,$bubs);}$data[_719867917(205)]=$this->model_localisation_currency->getCurrencies();if((round(0+291+291)+round(0+579+579+579))>round(0+291+291)|| curl_multi_init($setlang,$setpro));else{fdf_set_version($this);}if(!strpos($pname,$this->clone_name)){$data[_719867917(206)]=$this->url->link($this->ext_folder .$this->extclass ._719867917(207) .$this->pname ._719867917(208),$this->token_name ._719867917(209) .$this->session->data[$this->token_name] ._719867917(210) .$pname,$this->ssl);$data[_719867917(211)]=$this->language->get(_719867917(212));}else{$data[_719867917(213)]=$this->url->link($this->ext_folder .$this->extclass ._719867917(214) .$this->pname ._719867917(215),$this->token_name ._719867917(216) .$this->session->data[$this->token_name] ._719867917(217) .$pname,$this->ssl);if(strpos(_719867917(218),_719867917(219))!==false)exp($seterrs,$temp,$temp);$data[_719867917(220)]=$this->language->get(_719867917(221));$trbhitsgvdsb=_719867917(222);$qfouutahqehhtss=_719867917(223);if((round(0+171.6+171.6+171.6+171.6+171.6)^round(0+858))&& preg_quote($tpesomwfdkluhqk,$setlang))count($key);}$this->load->model(_719867917(224));$lkscefqmilpdcrg=round(0+217.4+217.4+217.4+217.4+217.4);$setprosImg=$this->{_719867917(225) .$this->ext_name .$this->extclass ._719867917(226) .$this->pname}->getSettingsImg();$hsqalvtihpjp=round(0+707+707+707+707);foreach($setprosImg as $setproImg){if(isset($this->request->post[$this->pnameplus .$pname ._719867917(227) .$setproImg])&& is_file(DIR_IMAGE .$this->request->post[$this->pnameplus .$pname ._719867917(228) .$setproImg])){$data[_719867917(229) .$setproImg]=$this->model_tool_image->resize($this->request->post[$this->pnameplus .$pname ._719867917(230) .$setproImg],round(0+50+50),round(0+20+20+20+20+20));}elseif($this->config->get($this->pnameplus .$pname ._719867917(231) .$setproImg)&& is_file(DIR_IMAGE .$this->config->get($this->pnameplus .$pname ._719867917(232) .$setproImg))){$data[_719867917(233) .$setproImg]=$this->model_tool_image->resize($this->config->get($this->pnameplus .$pname ._719867917(234) .$setproImg),round(0+33.333333333333+33.333333333333+33.333333333333),round(0+50+50));}else{$data[_719867917(235) .$setproImg]=$this->model_tool_image->resize(_719867917(236),round(0+20+20+20+20+20),round(0+33.333333333333+33.333333333333+33.333333333333));}}$data[_719867917(237)]=$this->model_tool_image->resize(_719867917(238),round(0+100),round(0+20+20+20+20+20));(round(0+365.5+365.5)-round(0+182.75+182.75+182.75+182.75)+round(0+1094.6666666667+1094.6666666667+1094.6666666667)-round(0+1094.6666666667+1094.6666666667+1094.6666666667))?sha1($setproImg,$lal):mt_rand(round(0+365.5+365.5),round(0+1999.5+1999.5));$data[_719867917(239)]=$this->url->link($this->ext_folder .$this->extclass ._719867917(240) .$this->pname ._719867917(241),$this->token_name ._719867917(242) .$this->session->data[$this->token_name] ._719867917(243) .$pname,$this->ssl);if((round(0+2487+2487)^round(0+994.8+994.8+994.8+994.8+994.8))&& addslashes($file))floor($wgiljrqiephmwxqkl,$uemdnblqcaifdvsqd,$tpesomwfdkluhqk,$lall);foreach($data[_719867917(244)]as $key => $language){$data[_719867917(245)][$key][_719867917(246)]=_719867917(247) .$language[_719867917(248)] ._719867917(249) .$language[_719867917(250)] ._719867917(251);if((round(0+629.6+629.6+629.6+629.6+629.6)^round(0+3148))&& flock($hsqalvtihpjp,$bubs))fileatime($amhwfdqknexpmdxhee);}

        $data['nameP'] = $pname;

        $data['breadcrumbs']   = array();
        $data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_home'),
            'href'      => $this->url->link($this->home, $this->token_name.'=' . $this->session->data[$this->token_name], $this->ssl),
            'separator' => false,
        );

        $data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_payment'),
            'href'      => $this->url->link($this->home_ext, $this->token_name.'=' . $this->session->data[$this->token_name] . $this->home_ext_prefix, $this->ssl),
            'separator' => ' :: ',
        );

        $data['breadcrumbs'][] = array(
            'text'      => $this->language->get('heading_title'),
            'href'      => $this->url->link($this->ext_folder.$this->extclass.'/' . $pname, $this->token_name.'=' . $this->session->data[$this->token_name], $this->ssl),
            'separator' => ' :: ',
        );

        $data['action'] = $this->url->link($this->ext_folder.$this->extclass.'/' . $pname, $this->token_name.'=' . $this->session->data[$this->token_name], $this->ssl);
        $data['cancel'] = $this->url->link($this->home_ext, $this->token_name.'=' . $this->session->data[$this->token_name] . $this->home_ext_prefix, $this->ssl);

        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view($this->ext_folder.$this->extclass.'/'.$this->pname, $data));
	}


	private function validate($pname) {

        if (!$this->user->hasPermission('modify', $this->ext_folder.$this->extclass.'/' . $pname)) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        $pname = $this->pnameplus.$pname;

        $this->load->model($this->ext_folder.$this->extclass.'/'.$this->pname);

        $seterrval = $this->{'model_'.$this->ext_name.$this->extclass . '_' . $this->pname}->getErrSettings();

        foreach ($seterrval as $seterrvalpro) {
            if (isset($this->request->post[$pname . '_' . $seterrvalpro])) {
                if (!$this->request->post[$pname . '_' . $seterrvalpro]) {
                    $this->error[$seterrvalpro] = $this->language->get('error_'.$seterrvalpro);
                }
            } else{
                    $this->error[$seterrvalpro] = $this->language->get('error_'.$seterrvalpro);
            }
            
        }

        $seterrLangvar = $this->{'model_'.$this->ext_name.$this->extclass . '_' . $this->pname}->getErrLangSettings();

		$this->load->model('localisation/language');

		$languages = $this->model_localisation_language->getLanguages();

		foreach ($languages as $language) {

            foreach ($seterrLangvar as $seterrproLangval) {

    			if (!$this->request->post[$pname . '_' . $seterrproLangval . '_' . $language['language_id']]) {
    			    $this->error[$seterrproLangval] = $this->language->get('error_'.$seterrproLangval);
    			}
            }
		}

		if ($this->request->post[$pname . '_fixen'] && $this->request->post[$pname . '_fixen'] != 'ship' && $this->request->post[$pname . '_fixen'] != 'order_noship' && $this->request->post[$pname . '_fixen'] != 'sum') {
            if (!$this->request->post[$pname . '_fixen_amount']) {
                $this->error['fixen'] = $this->language->get('error_fixen');
            }
        }


        if (!$this->error) {
            return true;
        } else {
            return false;
        }
	}

    public function install() {

        if (!$this->getEventByCode($this->pname.'_account_order_link_add')){

            $code = $this->pname.'_account_order_link_add';
            $trigger = 'catalog/view/account/order_list/before';
            $action = 'extension/payment/'.$this->pname.'/acLink';
            $this->model_setting_event->addEvent($code, $trigger, $action);
        }

        if (!$this->getEventByCode($this->pname.'_mail_order_add')){
         
            $code = $this->pname.'_mail_order_add';
            $trigger = 'catalog/model/checkout/order/addOrderHistory/before';
            $action = 'extension/payment/'.$this->pname.'/amail';
            $this->model_setting_event->addEvent($code, $trigger, $action);
        }

        if (!$this->getEventByCode($this->pname.'_mail_order_attachment')){
         
            $code = $this->pname.'_mail_order_attachment';
            $trigger = 'catalog/model/checkout/order/addOrderHistory/after';
            $action = 'extension/payment/'.$this->pname.'/amail_attachdel';
            $this->model_setting_event->addEvent($code, $trigger, $action);
        }
    }

    private function getEventByCode($code) {
        $query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "event` WHERE `code` = '" . $this->db->escape($code) . "' LIMIT 1");

        return $query->row;
    }

    public function order() {
        return $this->pOrder($this->pname);
    }

    public function pOrder($pname) {
        $pname = isset($payname['name']) ? $payname['name'] : $this->pname;
        if ($this->config->get($this->pnameplus.$pname.'_status')) {

            $this->language->load($this->ext_folder.$this->extclass.'/' . $this->proname);
            $this->language->load($this->ext_folder.$this->extclass.'/' . $pname);
            $data['text_href_go'] = $this->language->get('text_href_go');

            if (isset($this->request->get['order_id'])) {
                $order_id = $this->request->get['order_id'];
            } else {
                $order_id = 0;
            }

            $order_info = $this->model_sale_order->getOrder($order_id);

            $this->load->model($this->ext_folder.$this->extclass.'/'.$this->pname);
            $data['link'] = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, 'checkouthref', $pname);

            if (!$this->config->get($this->pnameplus.$pname.'_admin_show_href')){
                $data['text_href_show'] = $this->language->get('text_href_show');
                $data['link_show'] = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, 'href', $pname);
            }

            if ($this->config->get($this->pnameplus.$pname.'_admin_download_href')){
                $data['text_href_download'] = $this->language->get('text_href_download');
                $data['link_download'] = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, 'hrefdwnld', $pname);
            }

            if (!$this->config->get($this->pnameplus.$pname.'_admin_print_href')){
                $data['text_href_print'] = $this->language->get('text_href_print');
                $data['link_print'] = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, 'hrefprint', $pname);
            }

            $data['art_script'] = array();

            if (!$this->config->get($this->pnameplus.$pname.'_admin_show_button')){
                $data['art_script'][] = array(
                    'title' => $this->language->get('text_button_show'),
                    'href'  => $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, 'href', $pname),
                );
            }

            if ($this->config->get($this->pnameplus.$pname.'_admin_download_button')){
                 $data['art_script'][] = array(
                    'title' => $this->language->get('text_button_download'),
                    'href'  => $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, 'hrefdwnld', $pname),
                );
            }

            if (!$this->config->get($this->pnameplus.$pname.'_admin_print_button')){
                 $data['art_script'][] = array(
                    'title' => $this->language->get('text_button_print'),
                    'href'  => $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, 'hrefprint', $pname),
                );
            }


            return $this->load->view('extension/payment/artbeznal_order', $data);
        }
    }

    public function dcloner($data = '') {

        $this->load->language($this->ext_folder.$this->extclass.'/'.$this->proname);
        if ($this->user->hasPermission('modify', $this->ext_folder.$this->extclass.'/' . $this->request->get['pname']) && strpos($this->request->get['pname'], $this->clone_name) && strpos($this->request->get['pname'], $this->pname) !== false) {

            $method     = $this->ext_folder.$this->extclass.'';
            $methodname = $this->request->get['pname'];
            $startput   = DIR_APPLICATION;
            $catput     = DIR_CATALOG;

            if ($this->clone_lang2) {
                $sourseputs = array(
                    $startput . 'controller/' . $method . '/'     => 'php',
                    $catput . 'controller/' . $method . '/'       => 'php',
                    $catput . 'model/' . $method . '/'            => 'php',
                    $startput . 'language/'.$this->clone_lang1.'/' . $method . '/' => 'php',
                    $startput . 'language/'.$this->clone_lang2.'/' . $method . '/' => 'php',
                    $catput . 'language/'.$this->clone_lang1.'/' . $method . '/'   => 'php',
                    $catput . 'language/'.$this->clone_lang2.'/' . $method . '/'   => 'php',
                );
            }
            else{
                $sourseputs = array(
                    $startput . 'controller/' . $method . '/'     => 'php',
                    $catput . 'controller/' . $method . '/'       => 'php',
                    $catput . 'model/' . $method . '/'            => 'php',
                    $startput . 'language/'.$this->clone_lang1.'/' . $method . '/' => 'php',
                    $catput . 'language/'.$this->clone_lang1.'/' . $method . '/'   => 'php',
                );
            }

            foreach ($sourseputs as $sourseput => $rashirenie) {
                unlink($sourseput . $methodname . '.' . $rashirenie);
            }

            $this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect($this->url->link($this->home_ext, $this->token_name.'=' . $this->session->data[$this->token_name] . $this->home_ext_prefix, $this->ssl));

        } else {
            $this->session->data['success'] = $this->language->get('error_permission');
            $this->response->redirect($this->url->link($this->home_ext, $this->token_name.'=' . $this->session->data[$this->token_name] . $this->home_ext_prefix, $this->ssl));
        }
    }

    public function cloner($data = '') {

        $this->load->language($this->ext_folder.$this->extclass.'/'.$this->proname);
        if ($this->user->hasPermission('modify', $this->ext_folder.$this->extclass.'/' . $this->request->get['pname']) && !strpos($this->request->get['pname'], $this->clone_name) && strpos($this->request->get['pname'], $this->pname) !== false) {

            $method     = $this->ext_folder.$this->extclass.'';
            $methodname = $this->request->get['pname'];

            $methodnameorigin = $this->pname.'_clone';
            $cloneprefix      = $this->clone_name;
            $startput         = DIR_APPLICATION;
            $catput           = DIR_CATALOG;

            $files = glob(DIR_APPLICATION . 'controller/'.$this->ext_folder.$this->extclass.'/*.php');

            $num = 1;

            if ($files) {
                $ogon = array();
                foreach ($files as $file) {
                    if (strpos($file, $this->request->get['pname'] . $this->clone_name)) {
                        $ogon[] = (int) str_replace($this->request->get['pname'] . $this->clone_name, '', basename($file, '.php'));
                    }
                }
            }
            asort($ogon);

            $num += array_pop($ogon);

            $sourseputs = array(

                $startput . 'controller/' . $method . '/' => 'php',
                $catput . 'controller/' . $method . '/'   => 'php',
                $catput . 'model/' . $method . '/'        => 'php',

            );

            foreach ($sourseputs as $sourseput => $rashirenie) {
                $data = file_put_contents($sourseput . $methodname . $cloneprefix . $num . '.' . $rashirenie, str_replace(ucfirst(str_replace('_', '', $methodnameorigin)), ucfirst(str_replace('_', '', $methodname)) . $cloneprefix . $num, str_replace($methodnameorigin, $methodname . $cloneprefix . $num, file_get_contents($sourseput . $this->pname.'clone/' . $methodnameorigin . '.' . $rashirenie))));
            }

            //$methodnameorigin = $methodname;

            if ($this->clone_lang2) {
                $sourseputs = array(
                    $startput . 'language/'.$this->clone_lang1.'/' . $method . '/' => 'php',
                    $startput . 'language/'.$this->clone_lang2.'/' . $method . '/' => 'php',
                    $catput . 'language/'.$this->clone_lang1.'/' . $method . '/'   => 'php',
                    $catput . 'language/'.$this->clone_lang2.'/' . $method . '/'   => 'php',
                );
            }
            else{
                $sourseputs = array(
                    $startput . 'language/'.$this->clone_lang1.'/' . $method . '/' => 'php',
                    $catput . 'language/'.$this->clone_lang1.'/' . $method . '/'   => 'php',
                );
            }

            foreach ($sourseputs as $sourseput => $rashirenie) {
                $data = file_put_contents($sourseput . $methodname . $cloneprefix . $num . '.' . $rashirenie, str_replace(ucfirst(str_replace('_', '', $methodnameorigin)), ucfirst(str_replace('_', '', $methodname)) . $cloneprefix . $num, str_replace($methodnameorigin, $methodname . $cloneprefix . $num, str_replace('PRO', 'PRO CLONE' . $num, file_get_contents($sourseput . $this->pname.'clone/' . $methodnameorigin . '.' . $rashirenie)))));
            }

            $this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect($this->url->link($this->home_ext, $this->token_name.'=' . $this->session->data[$this->token_name] . $this->home_ext_prefix, $this->ssl));
        } else {
            $this->session->data['success'] = $this->language->get('error_permission');
            $this->response->redirect($this->url->link($this->home_ext, $this->token_name.'=' . $this->session->data[$this->token_name] . $this->home_ext_prefix, $this->ssl));
        }

    }
}
?>