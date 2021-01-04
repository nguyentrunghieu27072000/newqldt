<?php
 	function pr($data){
 		echo '<pre>';
 		print_r($data);
 		echo '</pre>';
 		exit();
 	}
 	function get_menu(){
 		$CI = & get_instance();
 		$CI->load->model('Mtrangchu');
 		$menu = $CI->Mtrangchu->get_menu();
 		return $menu;
	 }
	 function public_url($string=''){
		return base_url('public/' .$string);
	}