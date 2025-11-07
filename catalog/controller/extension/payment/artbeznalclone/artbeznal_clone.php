<?php
class ControllerExtensionPaymentArtbeznalclone extends Controller {
	private $extpname 	= 'artbeznal';
	private $pname 		= 'artbeznal_clone';
	private $extclass   = 'payment';
    private $ext_folder = 'extension/'; // ''
	
	public function index() {
        return $this->load->controller($this->ext_folder.$this->extclass.'/'.$this->extpname, array('name' => $this->pname));
	}
	
	public function confirm() {
	    $this->load->controller($this->ext_folder.$this->extclass.'/'.$this->extpname.'/confirm', array('name' => $this->pname));
	}
}
?>