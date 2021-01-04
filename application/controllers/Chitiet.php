<?php  
	class Chitiet extends MY_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->Model('Mtrangchu');
		}
		public function index(){
			$ma_loaitin = $this->input->get('id');
			$ds_tin = $this->Mtrangchu->get_tin_loaitin($ma_loaitin);
			$loaitin = $this->Mtrangchu->get_ten_loaitin($ma_loaitin);
			$temp['data'] = [
				'ds_tin'	=> $ds_tin,
				'loaitin' 	=> $loaitin,
				'ma_loaitin'=> $ma_loaitin,
			];
			$temp['template'] = 'Vchitiet';
			$this->load->view('layout/content',$temp);
		}
	}
?>