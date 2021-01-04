<?php  
	class Ctintucchitiet extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->Model('Mtrangchu');
		}
		public function index(){
			$ma_tin 		= $this->input->get('id');
			$tin_chitiet 	= $this->Mtrangchu->get_tin_chitiet($ma_tin);
			$tin_khac 		= $this->Mtrangchu->get_tin_khac($ma_tin);
			$data = [
				'tin'		=> $tin_chitiet,
				'url'		=> base_url(),
				'tin_khac'	=> $tin_khac,
			];
			$this->parser->parse('Vtintucchitiet',$data);
		}
	}
?>