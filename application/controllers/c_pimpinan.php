<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_pimpinan extends CI_Controller {
	

	function __construct(){
		parent::__construct();
		$this->load->model('m_pimpinan');
		$this->load->library('pdf');
	}
	function index(){
		$this->load->view('pimpinan/inc/navbar');
		$this->load->view('pimpinan/inc/wrapper');
		$this->load->view('pimpinan/home');
		$this->load->view('pimpinan/inc/footer');
		
	}

	
	function grafik(){
		$data['data']=$this->m_pimpinan->data_penjualan();
		$this->load->view('pimpinan/inc/navbar');
		$this->load->view('pimpinan/inc/wrapper');
		$this->load->view('pimpinan/v_report',$data);
		$this->load->view('pimpinan/inc/footer');
		
	}
	function laporan(){
 $pdf = new FPDF('l','mm','A5');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(190,7,'Laporan Sistem Informasi Penjualan Makanan',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'Jumlah Penjualan Makanan',0,1,'C');
        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(22,6,'Nama Kasir',1,0);
        $pdf->Cell(60,6,'Nama Barang',1,0);
        $pdf->Cell(27,6,'Harga Barang',1,0);
        $pdf->Cell(27,6,'Jumlah Barang',1,0);
        $pdf->Cell(25,6,'Total Harga',1,0);
        $pdf->Cell(25,6,'Merek',1,1);

        $pdf->SetFont('Arial','',10);

        $mahasiswa = $this->db->get('penjualan')->result();
        foreach ($mahasiswa as $row){
            $pdf->Cell(22,6,$row->nama_kasir,1,0);
            $pdf->Cell(60,6,$row->nama_barang,1,0);
            $pdf->Cell(27,6,$row->harga_barang,1,0);
            $pdf->Cell(27,6,$row->jumlah_barang,1,0); 
            $pdf->Cell(25,6,$row->total_harga,1,0); 
            $pdf->Cell(25,6,$row->Merek,1,1); 
        }

        $pdf->Output();
	}
	

}
