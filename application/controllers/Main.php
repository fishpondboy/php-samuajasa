<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Main');
	}

	public function index()
	{
		$top_product = $this->M_Main->top_product();
		$top_product1 = $this->M_Main->top_product1();
		$top_product2 = $this->M_Main->top_product2();
		$top_product3 = $this->M_Main->top_product3();
		$product = $this->M_Main->product();
		$data['top_product'] = $top_product;
		$data['top_product1'] = $top_product1;
		$data['top_product2'] = $top_product2;
		$data['top_product3'] = $top_product3;
		$data['product'] = $product;
		$this->load->view('index', $data);
	}
}
