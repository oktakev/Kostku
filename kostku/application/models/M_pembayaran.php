<?php 

class M_pembayaran extends CI_Model{
    public function myjoin()
    {
    	$this->db->select('
    						pembayaran.bayar_id,
    						data_penghuni.nama_lengkap,
    						data_penghuni.no_hp,
    						data_penghuni.alamat,
    						kamar.no_kamar,
    						pengaturan_biaya.biaya,
    						pembayaran.periode,
    						pembayaran.tanggal_bayar
    						');
    	$this->db->from('pembayaran');
    	$this->db->join('data_penghuni','pembayaran.data_penghuni_id = data_penghuni.data_penghuni_id');
        $this->db->join('kamar','pembayaran.data_kamar_id = kamar.data_kamar_id');
        $this->db->join('pengaturan_biaya','pembayaran.biaya_kost_id = pengaturan_biaya.biaya_kost_id');
    	return $this->db->get()->result();    	
    }

    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
   
    
   
}
