<?php
	class M_Product extends CI_Model{

		public function product($id){
			$this->db->select('*');
			$this->db->from('tbl_jasa');
			$this->db->where('id_jasa',$id);
			return $this->db->get()->row();
		}
}