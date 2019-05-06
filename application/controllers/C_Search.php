<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Search extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Search');
	}

	public function index()
	{
		$keyword = $this->input->post('keyword');
		$products = $this->M_Search->search($keyword);
		$data['products'] = $products;
		$this->load->view('search',$data);
	}
}