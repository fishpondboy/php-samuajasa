<?php
class M_Search extends CI_Model
{

	public function search($keyword)
	{
		$this->db->select('*');
		$this->db->from('tbl_jasa');
		$this->db->like('jasa', $keyword);
		return $this->db->get()->result();
	}

	public function saran($jasa, $ket)
	{
		$formUrl = 'https://docs.google.com/a/vcu.edu/forms/d/e/1FAIpQLSezo94K8gxwpMMEdssqgCMlTlMgo8B-VlJKRDmSQ153WVOjWw/formResponse?usp=pp_url&entry.1841333950=';
		$answer1 = $jasa;
		$url2 = '&entry.1771259527=';
		$answer2 = $ket;
		$submit = '&submit=Submit';
		$fullUrl = $formUrl.$answer1.$url2.$answer2.$submit;
		redirect($fullUrl);
	}
}
