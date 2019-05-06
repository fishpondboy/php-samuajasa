<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Main extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Main');
	}

	public function index()
	{
		$top_product = $this->M_Main->top_product();
		$product = $this->M_Main->product();
		$data['top_product'] = $top_product;
		$data['product'] = $product;
		$this->load->view('index', $data);
	}
}
