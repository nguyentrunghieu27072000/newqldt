<?php  
	class Ctrangchu extends MY_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->Model('Mtrangchu');
		}
		public function index(){
			$ma_lopmon = 'TTNN21-2018:20190708093638';
			$ds_sv_lopmon = $this->Mtrangchu->lay_sinhvien_lopmon($ma_lopmon);
			$temp['data'] = [
				'ds_sv' 	=> $ds_sv_lopmon['ds_sv'],
				'ds_diem' 	=> $ds_sv_lopmon['ds_diem'],
			];
			$temp['template'] = 'Vtrangchu';
			$this->load->view('layout/content',$temp);
		}
	}
?>