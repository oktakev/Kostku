<?php 

class M_penghuni extends CI_Model{
    public function myjoin()
    {
    	$this->db->select('
    						data_penghuni.data_penghuni_id,
    						data_penghuni.nama_lengkap,
    						data_penghuni.no_ktp,
    						data_penghuni.alamat,
    						data_penghuni.no_hp,
    						data_penghuni.status,
    						kamar.no_kamar,
    						pengaturan_biaya.biaya
    						');
    	$this->db->from('data_penghuni');
    	$this->db->join('kamar','data_penghuni.data_kamar_id = kamar.data_kamar_id');
        $this->db->join('pengaturan_biaya','data_penghuni.biaya_kost_id = pengaturan_biaya.biaya_kost_id');
    	return $this->db->get()->result();    	
    }
    public function myjoinEdit($id)
    {
        $this->db->select('
                            data_penghuni.data_penghuni_id,
                            data_penghuni.nama_lengkap,
                            data_penghuni.no_ktp,
                            data_penghuni.alamat,
                            data_penghuni.no_hp,
                            data_penghuni.status,
                            kamar.no_kamar,
                            pengaturan_biaya.biaya
                            ');
        $this->db->from('data_penghuni');
        $this->db->join('kamar','data_penghuni.data_kamar_id = kamar.data_kamar_id');
        $this->db->join('pengaturan_biaya','data_penghuni.biaya_kost_id = pengaturan_biaya.biaya_kost_id');
        $this->db->where($id);
        return $this->db->get()->result();
    }
    
}