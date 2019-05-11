<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Product');
	}

	public function ID($id)
	{
		$product = $this->M_Product->product($id);
		$data['product'] = $product;
		$this->load->view('product', $data);
	}
}