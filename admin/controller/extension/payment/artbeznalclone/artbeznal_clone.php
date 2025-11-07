<?php
class ControllerExtensionPaymentArtbeznalclone extends Controller {
	private $expname 	= 'artbeznal';
	private $pname 		= 'artbeznal_clone';
	private $extclass   = 'payment';
    private $ext_folder = 'extension/'; // ''
	public function index() {
    
		$this->load->controller($this->ext_folder.$this->extclass.'/'.$this->expname, array('name' => $this->pname));

	}

	public function order() {
    
		return $this->load->controller($this->ext_folder.$this->extclass.'/'.$this->expname.'/pOrder', array('name' => $this->pname));

	}
}
?>