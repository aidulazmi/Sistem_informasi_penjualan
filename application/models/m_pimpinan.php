<?php
class m_pimpinan extends CI_Model{

	function data_penjualan(){
        $query = $this->db->query("SELECT Merek,SUM(jumlah_barang) AS jumlah_barang FROM penjualan GROUP BY Merek");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

}