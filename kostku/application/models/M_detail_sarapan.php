<?php 

class M_detail_sarapan extends CI_Model{
    public function myjoin()
    {
    	$this->db->select('
    						pesan_sarapan.pesan_sarapan_id,
    						data_penghuni.nama_lengkap,
                            kamar.no_kamar,
    						menu_sarapan.nama_menu,
                            menu_sarapan.harga,
                            pesan_sarapan.tanggal,
                            pesan_sarapan.status
    						');
    	$this->db->from('pesan_sarapan');
    	$this->db->join('data_penghuni','pesan_sarapan.data_penghuni_id = data_penghuni.data_penghuni_id');
    	$this->db->join('kamar','pesan_sarapan.data_kamar_id = kamar.data_kamar_id');
        $this->db->join('menu_sarapan','pesan_sarapan.menu_sarapan_id = menu_sarapan.menu_sarapan_id');
        return $this->db->get()->result();
    	
    }
    public function detailjoin($id)
    {
        $this->db->select('
                            pesan_sarapan.pesan_sarapan_id,
                            data_penghuni.nama_lengkap,
                            kamar.no_kamar,
                            menu_sarapan.nama_menu,
                            menu_sarapan.harga,
                            pesan_sarapan.tanggal,
                            pesan_sarapan.status
                            ');
        $this->db->from('pesan_sarapan');
        $this->db->join('data_penghuni','pesan_sarapan.data_penghuni_id = data_penghuni.data_penghuni_id');
        $this->db->join('kamar','pesan_sarapan.data_kamar_id = kamar.data_kamar_id');
        $this->db->join('menu_sarapan','pesan_sarapan.menu_sarapan_id = menu_sarapan.menu_sarapan_id');
        $this->db->where($id);   
        return $this->db->get()->result();
        
    }
}
