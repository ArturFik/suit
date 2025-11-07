<?php
// All rights reserved ART&PR studio -> https://store.pe-art.ru
class ControllerExtensionPaymentArtbeznal extends Controller {
    private $pname           = 'artbeznal';
    private $proname         = 'artbeznalpro';
    private $extclass        = 'payment';
    private $ext_name        = 'extension_'; // ''
    private $ext_folder      = 'extension/'; // ''
    private $pnameplus       = 'payment_'; // payment_ , ''


    public function index ($payname = array('name' => 'artbeznal')) {

        $pname = isset($payname['name']) ? $payname['name'] : $this->pname;
        $data['pname'] = $pname;
        $data['instructionat'] = false;
        if ($this->config->get($this->pnameplus.$pname.'_instruction_attach')){
            $data['instructionat'] = true;
            $this->load->model('checkout/order');
            $order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);
            $this->load->model($this->ext_folder.$this->extclass.'/'.$this->pname);
            $data['instr'] = htmlspecialchars_decode($this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, $this->config->get($this->pnameplus.$pname.'_instruction_' . $this->config->get('config_language_id'))));
        }

        return $this->load->view($this->ext_folder.$this->extclass.'/'.$this->pname, $data);
    }
	
    public function confirm($payname = array('name' => 'artbeznal')) {
        $json = array();

        if (strpos($this->session->data['payment_method']['code'], $this->pname) !== false) {
            $pname = isset($payname['name']) ? $payname['name'] : $this->pname;
            $comment = '';
            $otlog = false;
            $this->language->load($this->ext_folder.$this->extclass.'/' . $this->proname);
            $this->language->load($this->ext_folder.$this->extclass.'/' . $pname);
            $this->load->model('checkout/order');
            $this->load->model($this->ext_folder.$this->extclass.'/'.$this->pname);

            $order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);

            if (!$this->config->get($this->pnameplus.$pname.'_success_page')){
                $pay_url = htmlspecialchars_decode($this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, '~checkouthref~').'&first=1'); 
            }
            else{
                $pay_url = $this->url->link('checkout/success', '', true);
            }

            if ($this->config->get($this->pnameplus.$pname.'_otlog') == 'stock'){
                if ($this->cart->hasStock()) { 
                    $otlog = false;
                }
                else{
                    $otlog = true;
                    $pay_url = $this->url->link('checkout/success', '', true);
                }
            }
            else if ($this->config->get($this->pnameplus.$pname.'_otlog') == 'pay'){
                $otlog = true;
                $pay_url = $this->url->link('checkout/success', '', true);
            }
            else{
                $otlog = false;
            }

            if (!$otlog){
                $ostatus = $this->config->get($this->pnameplus.$pname.'_on_status_id');
                $comment = sprintf($this->language->get('stock'), $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, '~checkouthref~')); 
            }
            else{
                $ostatus = $this->config->get($this->pnameplus.$pname.'_start_status_id');
                $comment = $this->language->get('no_stock');
            }

            if ($this->config->get($this->pnameplus.$pname.'_mail_instruction_attach')){
                if ($this->config->get($this->pnameplus.$pname.'_otlog') != 'stock'){
                    $comment = '';
                }
                $comment .= htmlspecialchars_decode($this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, $this->config->get($this->pnameplus.$pname.'_mail_instruction_' . $this->config->get('config_language_id'))));
            }

            $this->model_checkout_order->addOrderHistory($this->session->data['order_id'], $ostatus, $comment, true);

            $json['redirect'] = $pay_url;
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));     
    }

    public function go() {

        $order_info = $this->linkChecker($this->request->get, true);

        $this->language->load($this->ext_folder.$this->extclass.'/' . $this->proname);
        $this->language->load($this->ext_folder.$this->extclass.'/' . $order_info['payment_code']);

        if (isset($this->session->data['order_id']) && isset($this->request->get['first'])) {
            $this->cart->clear();

            unset($this->session->data['shipping_method']);
            unset($this->session->data['shipping_methods']);
            unset($this->session->data['payment_method']);
            unset($this->session->data['payment_methods']);
            unset($this->session->data['guest']);
            unset($this->session->data['comment']);
            unset($this->session->data['order_id']);
            unset($this->session->data['coupon']);
            unset($this->session->data['reward']);
            unset($this->session->data['voucher']);
            unset($this->session->data['vouchers']);
            unset($this->session->data['totals']);
        }

        $this->document->setTitle($this->language->get('art_heading_title'));

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home', '', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_basket'),
            'href' => $this->url->link('checkout/cart', '', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_checkout'),
            'href' => $this->url->link('checkout/checkout', '', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_success'),
            'href' => $this->url->link('checkout/success', '', true)
        );

        if (isset($this->request->get['first'])) {

            $data['heading_title'] = $this->language->get('heading_title_first');
        }
        else{
            $data['heading_title'] = $this->language->get('art_heading_title');
        }

        $data['text_message'] ='';

        if (isset($this->request->get['order_id'])) {

            $this->load->model($this->ext_folder.$this->extclass.'/'.$this->pname);

            if ($this->config->get($this->pnameplus.$order_info['payment_code'].'_success_page_custom_attach')) {
                $data['text_message'] .= htmlspecialchars_decode($this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, $this->config->get($this->pnameplus.$order_info['payment_code'].'_success_page_custom_' . $this->config->get('config_language_id'))));
            }
            else{
                $data['text_message'] .= $this->language->get('default_dext');
                if (!$this->config->get($this->pnameplus.$order_info['payment_code'].'_customer_show_href')) {
                    $data['text_message'] .= sprintf($this->language->get('default_dext_show'), htmlspecialchars_decode($this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, 'href')));
                }
                if ($this->config->get($this->pnameplus.$order_info['payment_code'].'_customer_download_href')) {
                    $data['text_message'] .= sprintf($this->language->get('default_dext_download'), htmlspecialchars_decode($this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, 'hrefdwnld')));
                }
                if (!$this->config->get($this->pnameplus.$order_info['payment_code'].'_customer_print_href')) {
                    $data['text_message'] .= sprintf($this->language->get('default_dext_print'), htmlspecialchars_decode($this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, 'hrefprint')));
                }
                if ($this->config->get($this->pnameplus.$order_info['payment_code'].'_email_attach')){
                    $data['text_message'] .= $this->language->get('email_pdf');
                }
            }
            
        }

        if ($this->customer->isLogged()) {
            $data['text_message'] .= sprintf($this->language->get('text_customer'), $this->url->link('account/account', '', true), $this->url->link('account/order', '', true), $this->url->link('account/download', '', true), $this->url->link('information/contact', '', true));
        } else {
            $data['text_message'] .= sprintf($this->language->get('text_guest'), $this->url->link('information/contact', '', true));
        }

        $data['button_continue'] = $this->language->get('button_continue');

        $data['continue'] = $this->url->link('common/home');

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view($this->ext_folder.$this->extclass.'/'.$this->pname.'_success', $data));

    }

    private function linkChecker($request_data, $status = false) {

        if (!isset($request_data['code'])) {
            echo "No data";
            die;
        }

        if (!isset($request_data['order_id'])) {
            echo "No data";
            die;
        }

        $this->load->model('checkout/order');
        $order_info = $this->model_checkout_order->getOrder($request_data['order_id']);
        if ($order_info['order_id'] == 0) {
            echo 'No order';
            die;
        }

        $this->load->model($this->ext_folder.$this->extclass.'/'.$this->pname);
        $platp = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getSecureCode($order_info['order_id']);
        if ($request_data['code'] != $platp) {
            $this->response->redirect($this->url->link('error/not_found', '', true));
        }

        if (strpos($order_info['payment_code'], $this->pname) === false) {
            $this->response->redirect($this->url->link('error/not_found'));
        }

        if (!$this->config->get($this->pnameplus.$order_info['payment_code'] . '_status')) {
            $this->response->redirect($this->url->link('error/not_found'));
        }

        if ($status) {
            $paystat = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getPaymentStatus($order_info['order_status_id'], $order_info['payment_code']);
            if ($paystat == 1) {
                $this->response->redirect($this->url->link('error/not_found', '', true));
            }
        }

        return $order_info;

    }

    public function getForm($order_info, $style = 'pdf') {
        $this->language->load($this->ext_folder.$this->extclass.'/' . $this->proname);
        $this->language->load($this->ext_folder.$this->extclass.'/' . $order_info['payment_code']);

        $this->load->model($this->ext_folder.$this->extclass.'/'.$this->pname);

        $data['style'] = $style;
        $data['form_name'] = sprintf($this->language->get('form_name'), $order_info['order_id']);

        $data['etext'] = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, $this->config->get($this->pnameplus.$order_info['payment_code'].'_etext_' . $this->config->get('config_language_id')));

        $data['inn'] = $this->config->get($this->pnameplus.$order_info['payment_code'].'_inn_' . $this->config->get('config_language_id'));
        $data['rs'] = $this->config->get($this->pnameplus.$order_info['payment_code'].'_rs_' . $this->config->get('config_language_id'));
        $data['bank'] = $this->config->get($this->pnameplus.$order_info['payment_code'].'_bank_' . $this->config->get('config_language_id'));
        $data['bankuser'] = $this->config->get($this->pnameplus.$order_info['payment_code'].'_bankuser_' . $this->config->get('config_language_id'));
        $data['bik'] = $this->config->get($this->pnameplus.$order_info['payment_code'].'_bik_' . $this->config->get('config_language_id'));
        $data['ks'] = $this->config->get($this->pnameplus.$order_info['payment_code'].'_ks_' . $this->config->get('config_language_id'));
        $data['kpp'] = $this->config->get($this->pnameplus.$order_info['payment_code'].'_kpp_' . $this->config->get('config_language_id'));

        $data['form_inn'] = $this->language->get('form_inn');
        $data['form_bik'] = $this->language->get('form_bik');
        $data['form_ks'] = $this->language->get('form_ks');
        $data['form_bank'] = $this->language->get('form_bank');
        $data['form_rs'] = $this->language->get('form_rs');
        $data['form_bankuser'] = $this->language->get('form_bankuser');
        $data['form_kpp'] = $this->language->get('form_kpp');
        $data['form_products_item_number'] = $this->language->get('form_products_item_number');
        $data['form_products'] = $this->language->get('form_products');
        $data['form_products_counts'] = $this->language->get('form_products_counts');
        $data['form_products_unit'] = $this->language->get('form_products_unit');
        $data['form_products_price'] = $this->language->get('form_products_price');
        $data['form_products_amount'] = $this->language->get('form_products_amount');
        $data['form_unit'] = $this->language->get('form_unit');
        $data['form_totalcheck'] = $this->language->get('form_totalcheck');
        $data['form_totalpay'] = $this->language->get('form_totalpay');
        $data['form_allTextQBill'] = $this->language->get('form_allTextQBill');
        $data['form_allTextSumBill'] = $this->language->get('form_allTextSumBill');


        $data['qr'] = '';
        if ($style == 'pdf'){
            $pdfna = true;
        }
        else{
            $pdfna = false;
        }


        $invoice = $this->config->get($this->pnameplus.$order_info['payment_code'].'_invoi');
        if ($invoice == 'invoi_zakaz') {
            $data['invoi'] = sprintf($this->language->get('form_invoi'), $order_info['order_id']);
        }
        else if ($invoice == 'invoi_zakazdc') {
            $data['invoi'] = sprintf($this->language->get('form_invoi_date'), $order_info['order_id'], $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, 'dateTextOrder'));
        }
        else if ($invoice == 'invoi_noinvoice') {
            $data['invoi'] = sprintf($this->language->get('form_invoi'), $order_info['invoice_prefix'] . $order_info['invoice_no']);
        }
        else if ($invoice == 'invoi_noinvoiced') {
            $data['invoi'] = sprintf($this->language->get('form_invoi_date'), $order_info['invoice_prefix'] . $order_info['invoice_no'], $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, 'dateTextOrder'));
        }
        else {
            $data['invoi'] = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, $this->config->get($this->pnameplus.$order_info['payment_code'].'_invoi_custom_' . $this->config->get('config_language_id')));
        }

        if ($this->config->get($this->pnameplus.$order_info['payment_code'].'_qr_attach')) {
            if ($this->config->get($this->pnameplus.$order_info['payment_code'].'_qr')) {
                $data['qr'] = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, '~qrcode`120`' . $this->config->get($this->pnameplus.$order_info['payment_code'].'_qr_custom_' . $this->config->get('config_language_id')) . '~', '', $pdfna);
            } else {


                if ($this->config->get($this->pnameplus.$order_info['payment_code'].'_kpp_' . $this->config->get('config_language_id'))){
                   $kpp =  '|KPP=' . $this->config->get($this->pnameplus.$order_info['payment_code'].'_kpp_' . $this->config->get('config_language_id'));
                }
                else{
                    $kpp = ''; 
                }

                $itogokop = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, 'itogokop');

                $data['qr'] = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, '~qrcode`120`ST00012|Name=' . $this->config->get($this->pnameplus.$order_info['payment_code'].'_bank_' . $this->config->get('config_language_id')) . '|PersonalAcc=' . $this->config->get($this->pnameplus.$order_info['payment_code'].'_rs_' . $this->config->get('config_language_id')) . '|BankName=' . $this->config->get($this->pnameplus.$order_info['payment_code'].'_bankuser_' . $this->config->get('config_language_id')) . '|BIC=' . $this->config->get($this->pnameplus.$order_info['payment_code'].'_bik_' . $this->config->get('config_language_id')) . '|CorrespAcc=' . $this->config->get($this->pnameplus.$order_info['payment_code'].'_ks_' . $this->config->get('config_language_id')) . $kpp . '|PayeeINN=' . $this->config->get($this->pnameplus.$order_info['payment_code'].'_inn_' . $this->config->get('config_language_id')) . '|Purpose='.$data['invoi'].'|Sum=$itogokop$~', '', $pdfna);

            }
        }


        $data['form_seller'] = $this->language->get('form_seller');
        $data['form_buyer'] = $this->language->get('form_buyer');

        if ($this->config->get($this->pnameplus.$order_info['payment_code'].'_seller') == 'seller_default') {
            $data['seller'] = $data['bank'] . ', ' . $data['form_inn'] . ' ' . $data['inn'] . ', ';
            if ($data['kpp']){
                $data['seller'] .= $data['form_kpp'] . ' ' . $data['kpp'] . ', ';
            }
            $data['seller'] .= $this->config->get($this->pnameplus.$order_info['payment_code'].'_ur_' . $this->config->get('config_language_id'));
        }
        else{
            $data['seller'] = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, $this->config->get($this->pnameplus.$order_info['payment_code'].'_seller_custom_' . $this->config->get('config_language_id')));
        }

        if ($this->config->get($this->pnameplus.$order_info['payment_code'].'_whois') == 'whois_company') {

            $data['buyer'] = $order_info['payment_company'] . ', ' . $order_info['payment_postcode'] . ', ' . $order_info['payment_city'] . ', ' . $order_info['payment_address_1'] . ' ' . $order_info['payment_address_2'];

        }
        else if ($this->config->get($this->pnameplus.$order_info['payment_code'].'_whois') == 'whois_fio') {
             $data['buyer'] = $order_info['payment_firstname'] . ' ' . $order_info['payment_lastname'] . ', ' . $order_info['payment_postcode'] . ', ' . $order_info['payment_city'] . ', ' . $order_info['payment_address_1'] . ' ' . $order_info['payment_address_2'];
        }
        else {
            $data['buyer'] = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, $this->config->get($this->pnameplus.$order_info['payment_code'].'_whois_custom_' . $this->config->get('config_language_id')));;
        }
        

        $totalcheck = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, 'fullbill');


        $data['totalcheck'] = number_format($totalcheck, 2, $this->language->get('form_decimal_point'), $this->language->get('form_thousand_point'));

        $data['totalpay'] = number_format($this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, 'paysum'), 2, $this->language->get('form_decimal_point'), $this->language->get('form_thousand_point'));

        if (!$this->config->get($this->pnameplus.$order_info['payment_code'].'_product_table')){

            $data['product_table'] = true;

            if ($this->config->get($this->pnameplus.$order_info['payment_code'].'_onepos')) {
                $receipt = $this->getReceipt($order_info, $totalcheck);
                $data['products'] = $this->getOnePos($order_info, $totalcheck);
                $data['form_nds'] = $this->language->get('form_nonds');
                $data['nds'] = $this->language->get('form_nonds_symbol'); 
            }
            else{
                $receipt = $this->getReceipt($order_info, $totalcheck);
                $data['products'] = $receipt['products'];
  
                if ($receipt['tax']){
                    $data['form_nds'] = $this->language->get('form_nds'); 
                    $data['nds'] = number_format($receipt['totalTax'], 2, $this->language->get('form_decimal_point'), $this->language->get('form_thousand_point'));
                }
                else {
                    $data['form_nds'] = $this->language->get('form_nonds');
                    $data['nds'] = $this->language->get('form_nonds_symbol'); 
                }
            }

        }
        else {
            $data['product_table'] = false;
            $productsStandard = $this->getProductsStandard($order_info);
            $data['products'] = $productsStandard['products'];
            $data['vouchers'] = $productsStandard['vouchers'];
            $data['totals'] = $productsStandard['totals'];

        }

        $data['totalcheckformat'] = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, 'fullbillformat');

        $data['numbers'] = $this->mbucfirst($this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->numbers($totalcheck));

        $data['comment'] = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, $this->config->get($this->pnameplus.$order_info['payment_code'].'_comment_' . $this->config->get('config_language_id')));

        $form_footer = $this->config->get($this->pnameplus.$order_info['payment_code'].'_footer');
        if ($form_footer == 'simple') {
            $data['form_footer'] = $form_footer;
            $data['footer_simple'] = $this->config->get($this->pnameplus.$order_info['payment_code'].'_footer_simple');
        }
        else if ($form_footer == 'custom') {
            $data['form_footer'] = $form_footer;
            $data['footer_custom'] = htmlspecialchars_decode($this->config->get($this->pnameplus.$order_info['payment_code'].'_footer_custom_' . $this->config->get('config_language_id')));
        }
        else{
            $data['form_footer'] = '';
            $data['ruk_name'] = $this->config->get($this->pnameplus.$order_info['payment_code'].'_ruk_name_' . $this->config->get('config_language_id'));
            $data['ruk_fio'] = $this->config->get($this->pnameplus.$order_info['payment_code'].'_ruk_fio_' . $this->config->get('config_language_id'));
            $data['buh_name'] = $this->config->get($this->pnameplus.$order_info['payment_code'].'_buh_name_' . $this->config->get('config_language_id'));
            $data['buh_fio'] = $this->config->get($this->pnameplus.$order_info['payment_code'].'_buh_fio_' . $this->config->get('config_language_id'));
        }


        $mytemplate = $this->config->get($this->pnameplus.$order_info['payment_code'].'_mytemplate_' . $this->config->get('config_language_id'));
        if (!$mytemplate){
            return $this->load->view($this->ext_folder.$this->extclass.'/'.$this->pname.'_form', $data);
        }
        else{
            return $this->load->view($this->ext_folder.$this->extclass.'/'.$mytemplate, $data);
        }    

    }

    private function getOnePos($order_info, $totalcheck, $taxes = '') {
        $name = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, $this->config->get($this->pnameplus.$order_info['payment_code'].'_onepos_name_' . $this->config->get('config_language_id')));
        if (!$name){
            $name = $this->language->get('form_onepos');
        }
        $price = number_format($totalcheck, 2, $this->language->get('form_decimal_point'), $this->language->get('form_thousand_point'));
        $okassa[] = array(
            'quantity' => 1,
            'name' => $name,
            'taxType'  => $taxes,
            'price' => $price,
            'option'   => '',
            'model'   => $this->language->get('form_model_onepos'),
            'total'  =>  $price,
            'tax' => $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->taxCalcOrd($taxes, $price)
        );

        return $okassa;
    }

    private function getReceipt($order_info, $totalcheck) {

        $currency = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->currencyData($order_info);

        $amount = $totalcheck;

        $okassacheck = '';
        $options = '';
        $okassa = array();

        if ($this->config->get($this->pnameplus.$order_info['payment_code'] . '_customShip_' . $this->config->get('config_language_id')) != '') {

            $order_info['shipping_method'] = $this->config->get($this->pnameplus.$order_info['payment_code'] . '_customShip_' . $this->config->get('config_language_id'));

        }

        if ($this->config->get($this->pnameplus.$order_info['payment_code'] . '_customName')) {

            $customname = $this->config->get($this->pnameplus.$order_info['payment_code'] . '_customName');

        }

        $this->load->model('account/order');
        $cart_products = $this->model_account_order->getOrderProducts($order_info['order_id']);

        //vouchers
        $vouchersbuy = $this->model_account_order->getOrderVouchers($order_info['order_id']);
        foreach ($vouchersbuy as $voucherbuy) {
            $cart_products[] = array(
                'quantity'   => 1,
                'name'       => $voucherbuy['description'],
                'price'      => $voucherbuy['amount'],
                'product_id' => 0,
                'model'      => $this->language->get('form_model_voucher'),
            );

        }
        //vouchers end

        $totals   = $this->model_account_order->getOrderTotals($order_info['order_id']);
        $tax      = 0;
        $voucher  = 0;
        $shipping = 0;
        $subtotal = 0;
        $coupon   = 0;
        foreach ($totals as $total) {
            switch ($total['code']) {
                case 'tax':$tax = $total['value'];
                    break;
                case 'shipping':$shipping = $total['value'];
                    break;
                case 'sub_total':$subtotal = $total['value'];
                    break;
                case 'coupon':$coupon = $total['value'];
                    break;
                case 'voucher':$voucher = $total['value'];
                    break;
            }
        }


        $ndsship = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getndsDefaultcode();
        if ($this->config->get($this->pnameplus.$order_info['payment_code'] . '_shipping_tax')) {
            $ndsship = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getndscode($this->config->get($this->pnameplus.$order_info['payment_code'] . '_shipping_tax'));
        }

        // coupon free shipping
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "coupon_history` WHERE order_id = '" . (int) $order_info['order_id'] . "'");

        if (isset($query->rows)) {
            foreach ($query->rows as $row) {
                $sipcoup = $this->db->query("SELECT `shipping` FROM `" . DB_PREFIX . "coupon` WHERE coupon_id = '" . (int) $row['coupon_id'] . "'");
                if ($sipcoup->row['shipping'] == 1) {
                    $couponship = true;
                }
            }
        }

        if ($shipping < 0){
            $shipping = 0;
        }

        if (isset($couponship)) {
            $shipping = 0;
        }

        // coupon free shipping end


        if ($this->config->get($this->pnameplus . $order_info['payment_code'].'_fixen') == 'ship'){

            $shipping = number_format($this->currency->format($totalcheck, $currency['currency_code'], $currency['currency_value'], false), 2, '.', '');

            $okassa['cartItems'][] = array(
                'quantity' => 1,
                'name' => $order_info['shipping_method'],
                'taxType'            => $ndsship,
                'option'            => '',
                'price' => $shipping,
                'total'  =>  $shipping,
                'tax' => $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->taxCalcOrd($ndsship, $shipping),
                'model' => '',
            );


        }

        else if ($this->config->get($this->pnameplus . $order_info['payment_code'].'_fixen') == 'proc_ship'){

            $shipping = number_format($this->currency->format($totalcheck, $currency['currency_code'], $currency['currency_value'], false), 2, '.', '');

            $okassa['cartItems'][] = array(
                'quantity' => 1,
                'name' => $order_info['shipping_method'],
                'taxType'            => $ndsship,
                'option'            => '',
                'price' => $shipping,
                'total'  =>  $shipping,
                'tax' => $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->taxCalcOrd($ndsship, $shipping),
                'model' => '',
            );

        }


        if ($this->config->get($this->pnameplus . $order_info['payment_code'].'_fixen') != 'ship' && $this->config->get($this->pnameplus . $order_info['payment_code'].'_fixen') != 'proc_ship'){

            if ($this->config->get($this->pnameplus . $order_info['payment_code'].'_fixen') == 'order_noship' || $this->config->get($this->pnameplus . $order_info['payment_code'].'_fixen') == 'proc_noship'){

                $shipping = 0;

            }

            if ($this->config->get($this->pnameplus . $order_info['payment_code']. '_shipinprod')) {

                $this->config->set($this->pnameplus . $order_info['payment_code']. '_show_free_shipping', false);
                $shipping = 0;
            }

            $ndsval = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getndsDefaultcode();

            if ($this->config->get($this->pnameplus.$order_info['payment_code'] . '_nds')) {
                if ($this->config->get($this->pnameplus.$order_info['payment_code'] . '_nds_important')) {
                    $ndsval = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getndscode($this->config->get($this->pnameplus.$order_info['payment_code'] . '_nds_important'));
                }
                else if ($this->config->get($this->pnameplus.$order_info['payment_code'] . '_nds') == 'tovar') {
                    $ndson = true;
                    $this->load->model('catalog/product');
                }
            }

            $moden       = ($totalcheck - $this->currency->format($shipping, $currency['currency_code'], $currency['currency_value'], false)) / $this->currency->format($subtotal, $currency['currency_code'], $currency['currency_value'], false);
            $alldiscount = false;

            foreach ($cart_products as $cart_product) {

                if (isset($cart_product['order_product_id']) && $this->config->get($this->pnameplus.$order_info['payment_code'] . '_product_options')){

                    $options = $this->getOptions($order_info['order_id'], $cart_product['order_product_id']);
                }
                else {
                    $options = '';
                }

                if (isset($customname)) {
                    $res = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomName($cart_product['product_id'], $customname);
                    if ($res != '') {
                        $cart_product['name'] = $res;
                    }
                }


                $tovprice = number_format($this->currency->format($cart_product['price'], $currency['currency_code'], $currency['currency_value'], false) * $moden, 2, '.', '');
                if ($tovprice < 0) {
                    $alldiscount = true;
                    break;
                }

                $tovprice = $tovprice;

                $ndsvalue = $ndsval;
                if (isset($ndson)) {
                    foreach ($this->config->get($this->pnameplus.$order_info['payment_code'] . '_classes') as $tax_rule) {

                        $product_info = $this->model_catalog_product->getProduct($cart_product['product_id']);
                        if (isset($tax_rule[$order_info['payment_code'] . '_nalog']) && isset($product_info['tax_class_id']) && $tax_rule[$order_info['payment_code'] . '_nalog'] == $product_info['tax_class_id']) {
                            $ndsvalue = (int)$this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getndscode($tax_rule[$order_info['payment_code'] . '_tax_rule']);

                            if ($ndsvalue == '') {
                                $ndsvalue = $this->config->get($this->pnameplus.$order_info['payment_code'] . '_nds_tovar_default');
                            }
                        }
                    }
                }

                $okassa['cartItems'][] = array(
                    'name'           => $cart_product['name'],
                    'quantity'       => $cart_product['quantity'],
                    'total'            =>  number_format($tovprice*$cart_product['quantity'], 2, '.', ''),
                    'taxType'            => $ndsvalue,
                    'option'            => $options,
                    'price' =>  number_format($tovprice, 2, '.', ''),
                    'tax' => $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->taxCalcOrd($ndsvalue, number_format($tovprice*$cart_product['quantity'], 2, '.', '')),
                    'model' => $cart_product['model'],
                );

            }

            if ($alldiscount == true) {

                $posnum = 0;
                $moden  = $totalcheck / ($this->currency->format($subtotal, $currency['currency_code'], $currency['currency_value'], false) + $this->currency->format($shipping, $currency['currency_code'], $currency['currency_value'], false));

                foreach ($cart_products as $cart_product) {

                    if (isset($cart_product['order_product_id']) && $this->config->get($this->pnameplus.$order_info['payment_code'] . '_product_options')){

                        $options = $this->getOptions($order_info['order_id'], $cart_product['order_product_id']);
                    }
                    else {
                        $options = '';
                    }

                    if (isset($customname)) {
                        $res = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomName($cart_product['product_id'], $customname);
                        if ($res != '') {
                            $cart_product['name'] = $res;
                        }
                    }

                    $tovprice = number_format($this->currency->format($cart_product['price'], $currency['currency_code'], $currency['currency_value'], false) * $moden, 2, '.', '');

                    $tovprice = $tovprice;

                    $ndsvalue = $ndsval;
                    if (isset($ndson)) {
                        foreach ($this->config->get($this->pnameplus.$order_info['payment_code'] . '_classes') as $tax_rule) {

                            $product_info = $this->model_catalog_product->getProduct($cart_product['product_id']);
                            if (isset($tax_rule[$order_info['payment_code'] . '_nalog']) && isset($product_info['tax_class_id']) && $tax_rule[$order_info['payment_code'] . '_nalog'] == $product_info['tax_class_id']) {
                                $ndsvalue = (int)$this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getndscode($tax_rule[$order_info['payment_code'] . '_tax_rule']);
                                
                                if ($ndsvalue == '') {
                                    $ndsvalue =  $this->config->get($this->pnameplus.$order_info['payment_code'] . '_nds_tovar_default');
                                }
                            }
                        }
                    }

                    $okassa['cartItems'][] = array(
                        'name'       => $cart_product['name'],
                        'quantity'       => $cart_product['quantity'],
                        'total'            => number_format($tovprice*$cart_product['quantity'], 2, '.', ''),
                        'taxType'            => $ndsvalue,
                        'option'            => $options,
                        'price' =>  number_format($tovprice, 2, '.', ''),
                        'tax' => $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->taxCalcOrd($ndsvalue, number_format($tovprice*$cart_product['quantity'], 2, '.', '')),
                        'model' => $cart_product['model'],
                    );

                }

                if ($shipping > 0 && $order_info['shipping_code'] != '' || $this->config->get($this->pnameplus.$order_info['payment_code'] . '_show_free_shipping') && $order_info['shipping_code'] != '') {
                    $posnum += 1;

                    $shipping1 = number_format($this->currency->format($shipping, $currency['currency_code'], $currency['currency_value'], false) * $moden, 2, '.', '');

                    $shipping1 = $shipping1;

                    $okassa['cartItems'][] = array(
                        'name'       => $order_info['shipping_method'],
                        'quantity'    => 1,
                        'total'  => $shipping1,
                        'taxType'            => $ndsship,
                        'option'            => '',
                        'price' => $shipping1,
                        'tax' => $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->taxCalcOrd($ndsship, $shipping1),
                        'model' => '',
                    );
                }

            }

            //kopeyka wars
            $checkitogo = 0;
            $quantity = 0;
            foreach ($okassa['cartItems'] as $okas) {

                $checkitogo += $okas['total'];
                $quantity += $okas['quantity'];

            }

            if ($alldiscount == true) {

                $proverkacheck = $amount - $checkitogo;

            } else {

                $shipping1 = number_format($this->currency->format($shipping, $currency['currency_code'], $currency['currency_value'], false), 2, '.', '');

                $shipping1 = $shipping1;

                $proverkacheck = ($amount - $shipping1) - $checkitogo;

            }

            if ($proverkacheck != 0.00) {
                $correctsum = $proverkacheck;
                
                $itemnum = -1;
                $kopwar  = false;
                foreach ($okassa['cartItems'] as $item) {
                    $itemnum += 1;
                    if ($item['quantity'] == 1 && $item['total'] > 0) {
                        $okassa['cartItems'][$itemnum]['total'] = number_format($okassa['cartItems'][$itemnum]['total'] + $correctsum, 2, '.', '');
                        $okassa['cartItems'][$itemnum]['tax'] = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->taxCalcOrd($okassa['cartItems'][$itemnum]['taxType'], $okassa['cartItems'][$itemnum]['total']);
                        $kopwar = true;
                        break;
                    }

                }

                if ($kopwar == false) {
                    $orderNotCorrect = false;
                    $itemnum = -1;
                    foreach ($okassa['cartItems'] as $item) {
                        if ($item['total'] > 0) {
                            $itemnum += 1;
                            $itemPrice = $okassa['cartItems'][$itemnum]['total']/$okassa['cartItems'][$itemnum]['quantity'] + $correctsum;
                            if ($itemPrice >= 0) {
                            $okassa['cartItems'][$itemnum]['total'] = number_format($okassa['cartItems'][$itemnum]['total'] - $okassa['cartItems'][$itemnum]['total']/$okassa['cartItems'][$itemnum]['quantity'], 2, '.', '');
                            $okassa['cartItems'][$itemnum]['quantity'] -= 1;
                            $okassa['cartItems'][$itemnum]['tax'] = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->taxCalcOrd($okassa['cartItems'][$itemnum]['taxType'], $okassa['cartItems'][$itemnum]['total']);
                            $copyprod[] = array(
                                'name'       => $okassa['cartItems'][$itemnum]['name'],
                                'quantity'   => 1,
                                'total'  => number_format($itemPrice, 2, '.', ''),
                                'taxType'        => $okassa['cartItems'][$itemnum]['taxType'],
                                'option'            => $okassa['cartItems'][$itemnum]['option'],
                                'price' => number_format($itemPrice, 2, '.', ''),
                                'tax' => $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->taxCalcOrd($okassa['cartItems'][$itemnum]['taxType'], number_format($itemPrice, 2, '.', '')),
                                'model' => $okassa['cartItems'][$itemnum]['model'],
                            );
                            array_splice($okassa['cartItems'], 1, 0, $copyprod);
                            $kopwar = true;
                            break;
                            }
                            else{
                                $this->log->write('54fz error: Positions in order '.$order_info['order_id'].' may be INCORRECT, check you order in product price and sum product price and product quantity.');
                                $orderNotCorrect = true;
                                break;
                            }
                        }
                    }
                }
            }
            //kopeyka wars end

            if ($shipping > 0 && $alldiscount == false && $order_info['shipping_code'] != '' || $this->config->get($this->pnameplus.$order_info['payment_code'] . '_show_free_shipping') && $alldiscount == false && $order_info['shipping_code'] != '') {

                $shipping1 = number_format($this->currency->format($shipping, $currency['currency_code'], $currency['currency_value'], false), 2, '.', '');

                $shipping1 = $shipping1;

                $okassa['cartItems'][] = array(
                    'name'       => $order_info['shipping_method'],
                    'quantity'   => 1,
                    'total'  => $shipping1,
                    'taxType'        => $ndsship,
                    'option'            => '',
                    'price' => $shipping1,
                    'tax' => $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->taxCalcOrd($ndsship, $shipping1),
                    'model' => '',
                );
            }

        }

        $okassa['cartItemsFormat']['products'] = array();
        $okassa['cartItemsFormat']['totalTax'] = 0;
        $NDS = false;
        foreach ($okassa['cartItems'] as $item) {
           $okassa['cartItemsFormat']['products'][] = array(
                    'name'       => $item['name'],
                    'quantity'   => $item['quantity'],
                    'total'      => number_format($item['total'], 2, $this->language->get('form_decimal_point'), $this->language->get('form_thousand_point')),
                    'taxType'    => $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getndsname($item['taxType']),
                    'option'     => $item['option'],
                    'price'      => number_format($item['price'], 2, $this->language->get('form_decimal_point'), $this->language->get('form_thousand_point')),
                    'tax'        => $item['tax'],
                    'model'      => $item['model'],
            );
            if ($item['taxType'] != 'tax_0') {
                $NDS = true;
            }
            $okassa['cartItemsFormat']['totalTax'] += $item['tax'];
        }

        if ($NDS) {
            $okassa['cartItemsFormat']['tax'] = true;
            
        }
        else{
            $okassa['cartItemsFormat']['tax'] = false;
        }

        return $okassa['cartItemsFormat'];

    }

    private function getProductsStandard($order_info) {

        $data['products'] = array();

        $this->load->model('account/order');
        $this->load->model('catalog/product');

        $currency = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->currencyData($order_info);

        $products = $this->model_account_order->getOrderProducts($order_info['order_id']);

        foreach ($products as $product) {
            $option_data = array();

            if ($this->config->get($this->pnameplus.$order_info['payment_code'] . '_product_options')){

                $options = $this->model_account_order->getOrderOptions($order_info['order_id'], $product['order_product_id']);

                foreach ($options as $option) {
                    if ($option['type'] != 'file') {
                        $value = $option['value'];
                    } else {
                        $upload_info = $this->model_tool_upload->getUploadByCode($option['value']);

                        if ($upload_info) {
                            $value = $upload_info['name'];
                        } else {
                            $value = '';
                        }
                    }

                    $option_data[] = array(
                        'name'  => $option['name'],
                        'value' => (utf8_strlen($value) > 20 ? utf8_substr($value, 0, 20) . '..' : $value)
                    );
                }
            }
            else {
                $option_data = '';
            }

            $product_info = $this->model_catalog_product->getProduct($product['product_id']);

            $data['products'][] = array(
                'name'     => $product['name'],
                'model'    => $product['model'],
                'option'   => $option_data,
                'quantity' => $product['quantity'],
                'price'    => $this->currency->format($product['price'] + ($this->config->get('config_tax') ? $product['tax'] : 0), $currency['currency_code'], $currency['currency_value']),
                'total'    => $this->currency->format($product['total'] + ($this->config->get('config_tax') ? ($product['tax'] * $product['quantity']) : 0), $currency['currency_code'], $currency['currency_value'])
            );
        }

        // Voucher
        $data['vouchers'] = array();

        $vouchers = $this->model_account_order->getOrderVouchers($this->request->get['order_id']);

        foreach ($vouchers as $voucher) {
            $data['vouchers'][] = array(
                'description' => $voucher['description'],
                'amount'      => $this->currency->format($voucher['amount'], $currency['currency_code'], $currency['currency_value'])
            );
        }

        // Totals
        $data['totals'] = array();

        $totals = $this->model_account_order->getOrderTotals($this->request->get['order_id']);

        foreach ($totals as $total) {
            $data['totals'][] = array(
                'title' => $total['title'],
                'text'  => $this->currency->format($total['value'], $currency['currency_code'], $currency['currency_value']),
            );
        }

        return $data;

    }

    private function getOptions($order_id, $order_product_id) {

        $options = $this->model_account_order->getOrderOptions($order_id, $order_product_id);
        $opti = array();
        if ($options){
            foreach ($options as $option) {
              $opti[] = sprintf($this->language->get('form_option'), $option['name'], $option['value']);
            }
        }
        return $opti;

    }

    private function mbucfirst($str, $encoding='UTF-8') {
        $str = mb_ereg_replace('^[\ ]+', '', $str);
        $str = mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding).
               mb_substr($str, 1, mb_strlen($str), $encoding);
        return $str;
    }

    public function view() {
        $order_info = $this->linkChecker($this->request->get, true);
        $this->response->setOutput($this->getForm($order_info, 'html'));
    }


    public function printer() {
        $order_info = $this->linkChecker($this->request->get, true);
        $this->response->setOutput($this->getForm($order_info, 'printer'));
    }

    public function dwnld() {
        $order_info = $this->linkChecker($this->request->get, true);
        $html = $this->getForm($order_info, 'pdf');
        $this->load->controller($this->ext_folder.$this->extclass.'/'.$this->pname.'clone/'.$this->pname.'pdf/getPDF', array('html' => $html, 'order_id' => $order_info['order_id']));
    }


    public function aclink(&$route, &$args, &$output) {

        $this->load->model($this->ext_folder.$this->extclass.'/'.$this->pname);

        foreach ($args['orders'] as $order) {
            $imquery = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getPaymentAcc($order['order_id']);

            if (strpos($imquery['payment_code'], $this->pname) !== false && $this->config->get($this->pnameplus.$imquery['payment_code'].'_status')){

                $paystat = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getState($imquery['order_status_id'], $imquery['payment_code']);

                if (!$paystat){

                    $this->language->load($this->ext_folder.$this->extclass.'/' . $this->proname);
                    $this->language->load($this->ext_folder.$this->extclass.'/' . $imquery['payment_code']);

                    $data['order_id'] = $order['order_id'];
                    $this->load->model('checkout/order');
                    $order_info = $this->model_checkout_order->getOrder($order['order_id']);
                    $data['href']     = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, 'checkouthref');
                    $data['pay_text'] = $this->language->get('pay_text');

                    $args['content_top'] .= $this->load->view($this->ext_folder.$this->extclass.'/'.$this->pname.'_aclink', $data);               
                }
            }
        }
    }

    public function amail(&$route, &$args) {

        if (isset($args[0])) {
            $order_id = $args[0];
        } else {
            $order_id = 0;
        }

        if (isset($args[1])) {
            $order_status_id = $args[1];
        } else {
            $order_status_id = 0;
        }

        if (isset($args[3])) {
            $notify = $args[3];
        } else {
            $notify = '';
        }

        $order_info = $this->model_checkout_order->getOrder($order_id);

        if ($order_info) {
            if ($order_info['order_status_id'] && $order_status_id) {
                $this->load->model($this->ext_folder.$this->extclass.'/'.$this->pname);
                $imquery = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getPaymentAcc($order_id);
                if (strpos($imquery['payment_code'], $this->pname) !== false && $this->config->get($this->pnameplus.$imquery['payment_code'].'_status')){
                    if ($this->config->get($this->pnameplus.$imquery['payment_code'].'_on_status_id') == $order_status_id && $order_info['payment_code'] == $imquery['payment_code']){
                        $this->language->load($this->ext_folder.$this->extclass.'/' . $this->proname);
                        $this->language->load($this->ext_folder.$this->extclass.'/' . $imquery['payment_code']);
                        $merchant_url = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getCustomFields($order_info, 'checkouthref');
                        $merchant_url = "<a href=' " . $merchant_url . "'>" . $merchant_url . "</a>";
                        $merchant_url = html_entity_decode($merchant_url, ENT_QUOTES, 'UTF-8');
                        $message      = sprintf($this->language->get('text_link'), $merchant_url);

                        $args[2] = $message . $args[2];
                    }
                }
            }
        }
    }

    public function amail_attachdel(&$route, &$args) {

        if (isset($args[0])) {
            $order_id = $args[0];
        } else {
            $order_id = 0;
        }

        if (isset($args[1])) {
            $order_status_id = $args[1];
        } else {
            $order_status_id = 0;
        }

        $this->load->model($this->ext_folder.$this->extclass.'/'.$this->pname);
        $order_info = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->pname}->getPaymentAcc($order_id);

        if ($order_info) {

            if (strpos($order_info['payment_code'], $this->pname) !== false && $this->config->get($this->pnameplus.$order_info['payment_code'].'_status') && $this->config->get($this->pnameplus.$order_info['payment_code'].'_email_attach') && $this->config->get($this->pnameplus.$order_info['payment_code'].'_on_status_id') == $order_status_id){
                $attachment = DIR_UPLOAD . 'invoice-order_' . $order_id . '.pdf';
                if (file_exists($attachment)) {
                    unlink($attachment);
                }
            }
        }
    }
}
?>