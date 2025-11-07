<?php
class ModelExtensionPaymentArtbeznalclone extends Model { 
	private $extpname 	= 'artbeznal';
	private $pname 		= 'artbeznal_clone';
	private $extclass   = 'payment';
    private $ext_name   = 'extension_'; // ''
    private $ext_folder = 'extension/'; // ''

	public function getMethod($address, $total) {
		$this->load->model($this->ext_folder.$this->extclass.'/'.$this->extpname);
		$method_data = $this->{'model_'.$this->ext_name.$this->extclass.'_'.$this->extpname}->secondmodel($address, $total, $this->pname);
		return $method_data;
	}		
}
?>