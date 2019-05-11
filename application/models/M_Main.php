<?php
	class M_Main extends CI_Model{

		public function top_product(){
			$this->db->select('jasa, rating, harga, ket, id_jasa');
			$code = $this->db->get('tbl_jasa',1)->result();
			return $code;
		}
		
		public function top_product2(){
		    $this->db->select('jasa, rating, harga, ket, id_jasa');
		    $this->db->where('jasa', 'Event Organizer');
		    $code = $this->db->get('tbl_jasa')->row();
		    return $code;
		}
		
		public function top_product1(){
		    $this->db->select('jasa, rating, harga, ket, id_jasa');
		    $this->db->where('jasa', 'Make-Up Wisuda');
		    $code = $this->db->get('tbl_jasa')->row();
		    return $code;
		}
		
		public function top_product3(){
		    $this->db->select('jasa, rating, harga, ket, id_jasa');
		    $this->db->where('jasa', 'Desain & Multimedia');
		    $code = $this->db->get('tbl_jasa')->row();
		    return $code;
		}

		public function product(){
			$this->db->select('*');
			$code = $this->db->get('tbl_jasa')->result();
			return $code;
		}
	}