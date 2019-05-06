<?php
	class M_Order extends CI_Model{

		public function order($keyword){
			$this->db->select('*');
			$this->db->from('tbl_jasa');
			$this->db->where('id_jasa',$keyword);
			return $this->db->get()->row();
		}

		public function id()
		{
			$this->db->select('Right(tbl_pesan.id_pesan,3) as kode ',false);
			$this->db->order_by('id_pesan','desc');
			$this->db->limit(1);
			$query = $this->db->get('tbl_pesan');
			if ($query->num_rows()<>0){
				$data = $query->row();
				$kode = intval($data->kode)+1;
			}else{
				$kode = 1;
			}
			$kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
			$kodejadi  = "ID".$kodemax;
			return $kodejadi;
		}

		public function order_data($data, $table)
		{
			$this->db->insert($table, $data);
		}

		public function konfirmasi($id_pesan, $id_jasa, $nama, $kontak, $alamat)
		{
		    $formUrl = 'https://docs.google.com/a/vcu.edu/forms/d/e/1FAIpQLSeXSoBG48IXuYKKo7qMFl_YPK8He-uk8OrGv1LOTOOrgG1ncQ/formResponse?usp=pp_url&entry.102446358=';
		    $answer1 = $id_pesan;
		    $url2 = '&entry.1454452556=';
		    $answer2 = $id_jasa;
		    $url3 = '&entry.1332887292=';
		    $answer3 = $nama;
		    $url4 = '&entry.1321842003=';
		    $answer4 = $kontak;
		    $url5 = '&entry.232717856=';
		    $answer5 = $alamat;
		    $submit = '&submit=Submit';
		    $fullUrl = $formUrl.$answer1.$url2.$answer2.$url3.$answer3.$url4.$answer4.$url5.$answer5.$submit;
			redirect($fullUrl);
		}
	}