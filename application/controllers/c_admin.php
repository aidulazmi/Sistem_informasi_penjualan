<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin extends CI_Controller {


	function __construct(){
		parent::__construct();		
		$this->load->model('m_barang');
		$this->load->model('m_pembelian');
		$this->load->model('m_login');
}
	//memanggil tampilan pertama kali
	public function index()
	{
		
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/inc/wrapper');
		$this->load->view('admin/home');
		$this->load->view('admin/inc/footer');

	}
	  function home(){
        if($this->m_login->is_logged_in())
            {
                //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
               $this->load->view('admin/inc/navbar');
        $this->load->view('admin/inc/wrapper');
        $this->load->view('admin/home');
        $this->load->view('admin/inc/footer');
            }else{
                $this->index();

    }
}

	function tampil_barang(){
		$data['user'] = $this->m_barang->tampil_data()->result();
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/inc/wrapper');
		$this->load->view('admin/v_barang',$data);
		$this->load->view('admin/inc/footer');

	}
		function tampil_beli(){
		$data['user'] = $this->m_pembelian->tampil_data()->result();
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/inc/wrapper');
		$this->load->view('admin/v_pembelian',$data);
		$this->load->view('admin/inc/footer');

	}
	
	function hapus_barang($id_barang){
		$where = array('id_barang' => $id_barang);
		$this->m_barang->hapus_data($where,'barang');
		redirect('c_admin/tampil_barang');
	}
		function hapus_beli($id_beli){
		$where = array('id_beli' => $id_beli);
		$this->m_barang->hapus_data($where,'pembelian');
		redirect('c_admin/tampil_beli');
	}

	function tambah_barang(){
			$this->load->view('admin/inc/navbar');
		$this->load->view('admin/inc/wrapper');
		$this->load->view('admin/v_t_barang');
		$this->load->view('admin/inc/footer');
	}
		function tambah_beli(){
			 $data['dd_bidang'] = $this->m_pembelian->n_barang(); 
			$this->load->view('admin/inc/navbar');
		$this->load->view('admin/inc/wrapper');
		$this->load->view('admin/v_t_beli',$data);
		$this->load->view('admin/inc/footer');
	}

	function simpan_barang(){
		

		$nama_barang = $this->input->post('nama_barang');
		$tanggal_masuk = $this->input->post('tanggal_masuk');
		$tgl_expr = $this->input->post('tgl_expr');
		$jumlah_stock = $this->input->post('jumlah_stock');
		$harga_beli = $this->input->post('harga_beli');
		$harga_jual = $this->input->post('harga_jual');
		$Merek = $this->input->post('Merek');

		$data = array(
			
			'nama_barang' => $nama_barang,
			'tanggal_masuk' => $tanggal_masuk,
			'tgl_expr' => $tgl_expr,
			'jumlah_stock' => $jumlah_stock,
			'harga_jual' => $harga_beli,
			'harga_beli' => $harga_jual,
			'Merek' => $Merek
			);
		$this->m_barang->input_data($data,'barang');
		redirect('c_admin/tampil_barang');
}

		function simpan_beli(){

		$nama_barang = $this->input->post('nama_barang');
		$jumlah_pembelian = $this->input->post('jumlah_pembelian');
		$total = $this->input->post('total');

		$data = array(
			
			'nama_barang' => $nama_barang,
			'jumlah_pembelian' => $jumlah_pembelian,
			'total' => $total
			);
		$this->m_pembelian->input_data($data,'pembelian');
		redirect('c_admin/tampil_beli');
}

		
		function edit_beli ($id_beli){
             $data['dd_bidang'] = $this->m_pembelian->n_barang(); 
            $where = array('id_beli' => $id_beli);
            $data['user'] = $this->m_pembelian->edit_data($where,'pembelian')->result();
         $this->load->view('admin/inc/navbar');
		$this->load->view('admin/inc/wrapper');
		$this->load->view('admin/v_e_beli',$data);
		$this->load->view('admin/inc/footer');
		}





		function update_beli(){
		$id_beli = $this->input->post('id_beli');
		$nama_barang = $this->input->post('nama_barang');
		$jumlah_pembelian = $this->input->post('jumlah_pembelian');
		$total = $this->input->post('total');


		$data = array(

			'nama_barang' => $nama_barang,
			'jumlah_pembelian' => $jumlah_pembelian,
			'total' => $total
			);

	$where = array(
		'id_beli' => $id_beli
	);

	$this->m_pembelian->update_data($where,$data,'pembelian');
	redirect('c_admin/tampil_beli');
}



function edit_barang($id_barang){
	$data['dd_bidang'] = $this->m_pembelian->n_barang(); 
		$where = array('id_barang' => $id_barang);
		$data['user'] = $this->m_barang->edit_data($where,'barang')->result();
		 $this->load->view('admin/inc/navbar');
		$this->load->view('admin/inc/wrapper');
		$this->load->view('admin/v_e_barang',$data);
		$this->load->view('admin/inc/footer');
}

function update_barang(){
		$id_barang = $this->input->post('id_barang');
	
		$nama_barang = $this->input->post('nama_barang');
		$tanggal_masuk = $this->input->post('tanggal_masuk');
		$tgl_expr = $this->input->post('tgl_expr');
		$jumlah_stock = $this->input->post('jumlah_stock');
		$harga_beli = $this->input->post('harga_beli');
		$harga_jual = $this->input->post('harga_jual');
$Merek = $this->input->post('Merek');

		$data = array(

			'nama_barang' => $nama_barang,
			'tanggal_masuk' => $tanggal_masuk,
			'tgl_expr' => $tgl_expr,
			'jumlah_stock' => $jumlah_stock,
			'harga_jual' => $harga_beli,
			'harga_beli' => $harga_jual,
			'Merek' => $Merek
			);

	$where = array(
		'id_barang' => $id_barang
	);

	$this->m_barang->update_data($where,$data,'barang');
	redirect('c_admin/tampil_barang');
}
}
