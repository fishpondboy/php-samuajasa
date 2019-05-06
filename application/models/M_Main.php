<?php
	class M_Main extends CI_Model{

		public function top_product(){
			$this->db->select('jasa, rating, harga, ket, id_jasa');
			$code = $this->db->get('tbl_jasa',3)->result();
			return $code;
		}

		public function product(){
			$this->db->select('*');
			$code = $this->db->get('tbl_jasa')->result();
			return $code;
		}
	}