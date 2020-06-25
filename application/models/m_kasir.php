<?php 

class m_kasir extends CI_Model{
	function tampil_data(){
		return $this->db->get('penjualan');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
		function barangs(){
       $query = $this->db->query('SELECT * FROM barang');
        return $query->result();
    }

}