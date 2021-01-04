<?php
	$user = $this->session->userdata('user');
	// $data_header['menu'] = get_menu();
	$data_header['url'] = base_url();
	$data_header['username'] = $user['name'];
	// $data_header['ma_loaitin'] = $data['ma_loaitin']; 
 	$this->parser->parse('layout/header',$data_header);
	$this->parser->parse($template, $data);
	$this->parser->parse('layout/footer',$data_header);