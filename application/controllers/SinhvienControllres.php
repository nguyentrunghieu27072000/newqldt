<?php

class SinhvienControllres extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('SinhvienModel');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	public function index()
	{
		if($this->input->post('luu')){
			$monmoi = $this->input->post('canbomonhoc');
			pr($monmoi);
		}
		$ds_monhoc = array(
			'0' => [
				'ma_monhoc' => 1,
				'ten_monhoc' => 'tieng anh 1',
			],
			'1' => [
				'ma_monhoc' => 2,
				'ten_monhoc' => 'tieng anh 2',
			],
			'3' => [
				'ma_monhoc' => 3,
				'ten_monhoc' => 'tieng anh 3',
			],
		);
		$mon_cb = array(
			'1' => 'isset',
		);
		$data['url'] = base_url();
		$data['ds_monhoc'] = $ds_monhoc;
		$data['mon_cb']= $mon_cb;
		$this->parser->parse('Sinhvienview',$data);
	}
}
?>