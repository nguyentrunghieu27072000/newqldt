<?php 
	class SinhvienModel extends CI_Model {
		
		public function is($data){
			$this->db->insert('tbl_sinhvien', $data);
			return $this->db->affected_rows();
		}
		public function get_Sinhvien(){
			$this->db->select('sv.*');
			$this->db->from('tbl_sinhvien AS sv');
			$result = $this->db->get()->result_array();
			return $result;
		}
		public function deleteSv($ma_sv){
			$this->db->where('ma_sv',$ma_sv);
			$this->db->delete('tbl_sinhvien');
			return $this->db->affected_rows();
		}
		public function get_SvById($ma_sv){
			$this->db->select('tbl_sinhvien.*');
			$this->db->where('ma_sv',$ma_sv);
			return $this->db->get('tbl_sinhvien')->row_array();
		}	
		public function update_Sv($data){
			$this->db->where('ma_sv',$data['ma_sv']);
			$this->db->update('tbl_sinhvien',$data);
			return $this->db->affected_rows();
			/*return $this->db->last_query();*/
			// print_r($result);
			// exit();
		}
	}
 ?>
