<?php 

class M_detail_sarapan extends CI_Model{
    public function myjoin()
    {
    	$this->db->select('
    						detail_pesan_sarapan.detail_id,
    						data_penghuni.nama_lengkap,
                            kamar.no_kamar,
    						menu_sarapan.nama_menu,
                            menu_sarapan.harga,
    						');
    	$this->db->from('detail_pesan_sarapan');
    	$this->db->join('data_penghuni','detail_pesan_sarapan.data_penghuni_id = data_penghuni.data_penghuni_id');
    	$this->db->join('kamar','detail_pesan_sarapan.data_kamar_id = kamar.data_kamar_id');
        $this->db->join('menu_sarapan','detail_pesan_sarapan.menu_sarapan_id = menu_sarapan.menu_sarapan_id');
        return $this->db->get()->result();
    	
    }
    public function detailjoin($id)
    {
        $this->db->select('
                            detail_pesan_sarapan.detail_id,
                            data_penghuni.nama_lengkap,
                            kamar.no_kamar,
                            menu_sarapan.nama_menu,
                            menu_sarapan.harga
                            ');
        $this->db->from('detail_pesan_sarapan');
        $this->db->join('data_penghuni','detail_pesan_sarapan.data_penghuni_id = data_penghuni.data_penghuni_id');
        $this->db->join('kamar','detail_pesan_sarapan.data_kamar_id = kamar.data_kamar_id');
        $this->db->join('menu_sarapan','detail_pesan_sarapan.menu_sarapan_id = menu_sarapan.menu_sarapan_id');
        $this->db->where($id);   
        return $this->db->get()->result();
        
    }
}
