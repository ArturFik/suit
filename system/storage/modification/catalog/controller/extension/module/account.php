<?php
class ControllerExtensionModuleAccount extends Controller {
	public function index() {

            if(!$this->customer->isLogged()){
                return false;
            }
            

            $arr_path = explode('account/success', $_SERVER['REQUEST_URI']);
            if (isset($arr_path[1]) && empty($arr_path[1])) {
                return false;
            }
            
		$this->load->language('extension/module/account');

		$data['logged'] = $this->customer->isLogged();
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['forgotten'] = $this->url->link('account/forgotten', '', true);
		$data['account'] = $this->url->link('account/account', '', true);
		$data['edit'] = $this->url->link('account/edit', '', true);
		$data['password'] = $this->url->link('account/password', '', true);
		$data['address'] = $this->url->link('account/address', '', true);
		$data['wishlist'] = $this->url->link('account/wishlist');
		$data['order'] = $this->url->link('account/order', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['reward'] = $this->url->link('account/reward', '', true);
		$data['return'] = $this->url->link('account/return', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);
		$data['recurring'] = $this->url->link('account/recurring', '', true);


            $data['address_insert'] = $this->url->link('account/simpleaddress/insert', '', true);
            $this->request->server['HTTPS'] ? $server = $this->config->get('config_ssl') : $server = $this->config->get('config_url');
		    $data['current_url'] = str_replace(':/', '://', str_replace('//', '/', $server.$this->request->server['REQUEST_URI']));
            
		return $this->load->view('extension/module/account', $data);
	}
}