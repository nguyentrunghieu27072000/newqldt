<?php
 class Mlogin extends CI_Model{
     public function check_login($username,$pass){
        $arr = array(
            'username' => $username,
            'password' => sha1($pass),
        );
        $this->db->where($arr);
        return $this->db->get('tbl_dangnhap')->row_array();
     }
 }