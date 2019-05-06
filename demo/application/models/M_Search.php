<?php
	class M_Search extends CI_Model{

		public function search($keyword){
			$this->db->select('*');
			$this->db->from('tbl_jasa');
			$this->db->like('jasa',$keyword);
			return $this->db->get()->result();
		}
}