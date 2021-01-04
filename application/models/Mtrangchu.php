<?php
class Mtrangchu extends CI_Model{
	public function lay_sinhvien_lopmon($ma_lopmon){
		$this->db->from('tbl_dangkymon');
		$this->db->join('tbl_sinhvien','tbl_sinhvien.ma_sv = tbl_dangkymon.ma_sv');
		$this->db->where('ma_lopmon',$ma_lopmon);
		$ds_sinhvien = $this->db->get()->result_array();
		$ds_dkm = array_column($ds_sinhvien,'ma_dkm');
		$ds_sv_diem = array(
			'ds_sv' 	=> $ds_sinhvien,
			'ds_diem' 	=> $this->lay_diem_quatrinh($ds_dkm),
		);
		return $ds_sv_diem;
	}
	public function lay_diem_quatrinh($ds_dkm){
		$this->db->from('tbl_ketquaquatrinh');
		$this->db->where_in('ma_dkm',$ds_dkm);
		$ds_diem = $this->db->get()->result_array();
		$arr_diem = array();
		foreach($ds_diem as $diem){
			$arr_diem[$diem['ma_kqqt']] = $diem['diem_kqqt'];
		}
		return $arr_diem;
	}
}