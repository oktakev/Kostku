<?php 

class M_pesansarapan extends CI_Model{
    public function myjoin()
    {
    	$this->db->select('
    						pesan_sarapan.pesan_sarapan_id,
    						data_penghuni.nama_lengkap,
                            kamar.no_kamar,
    						pesan_sarapan.tanggal
    						');
    	$this->db->from('pesan_sarapan');
    	$this->db->join('data_penghuni','pesan_sarapan.data_penghuni_id = data_penghuni.data_penghuni_id');
    	$this->db->join('kamar','pesan_sarapan.data_kamar_id = kamar.data_kamar_id');
        return $this->db->get()->result();
    	
    }
}

//SELECT k.no_kamar, dp.data_penghuni_id, k.data_kamar_id, dp.nama_lengkap FROM data_penghuni dp 
//JOIN kamar k ON dp.data_kamar_id=k.data_kamar_id