<?php

class c_kasir extends CI_Controller {

	function __construct(){
		parent :: __construct();
		$this->load->model('m_login');
		$this->load->model('m_kasir');

	}
	public function index()
	{
		
		 $data['dd_bidang'] = $this->m_kasir->barangs(); 
		$this->load->view('kasir/v_penjualan',$data);
	}

	function simpan(){

		$data=array(
			'nama_kasir' => $this->input->post('nama_kasir'),
			'nama_barang' => $this->input->post('nama_barang'),
			'harga_barang' => $this->input->post('harga_barang'),
			'jumlah_barang' => $this->input->post('jumlah_barang'),
			'total_harga' => $this->input->post('total_harga'),
			'Merek' => $this->input->post('Merek'),
		);

		$this->m_kasir->input_data($data,'penjualan');
		$this->index();
	}
}