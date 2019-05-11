<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Order extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Order');
	}

	public function ID($id)
	{
		$order = $this->M_Order->order($id);
		$id_pesan = $this->M_Order->id();
		$data['order'] = $order;
		$data['id_pesan'] = $id_pesan;
		$this->load->view('order', $data);
	}

	public function confirm()
	{
		$id_pesan = $this->input->post("id_pesan");
		$id_jasa = $this->input->post("id_jasa");
		$jasa = $this->input->post("jasa");
		$nama = $this->input->post("nama");
		$kontak = $this->input->post("kontak");
		$alamat = $this->input->post("alamat");
		$data = array(
			'id_pesan' => $id_pesan,
			'id_jasa' => $id_jasa,
			'nama' => $nama,
			'kontak' => $kontak,
			'alamat' => $alamat
		);
		$this->M_Order->order_data($data, 'tbl_pesan');
		$this->M_Order->konfirmasi($id_pesan, $jasa, $nama, $kontak, $alamat);
		redirect('index.php/C_Main/');
	}
}