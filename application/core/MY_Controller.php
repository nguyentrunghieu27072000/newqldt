<?php
class MY_Controller extends CI_Controller{
	protected $_session;
	public function __Construct(){
		parent::__Construct();
		$this->_session = $this->session->userdata('user');
		if (empty($this->_session)) {
			redirect(base_url(), 'refresh');
			exit();
		}
	}
} 