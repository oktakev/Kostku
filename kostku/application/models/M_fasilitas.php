<?php 

class M_fasilitas extends CI_Model{
    function tampil_data(){
        return $this->db->get('fasilitas');
    }
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
    function edit_data($where,$table){      
    return $this->db->get_where($table,$where);
    }
    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function myjoin()
    {
        $this->db->select('
                            lapor_fasilitas.lapor_fasilitas_id,
                            lapor_fasilitas.keluhan,
                            lapor_fasilitas.status,
                            fasilitas.nama_fasilitas,
                            data_penghuni.nama_lengkap
                            ');
        $this->db->from('lapor_fasilitas');
        $this->db->join('fasilitas','lapor_fasilitas.fasilitas_id = fasilitas.fasilitas_id');
        $this->db->join('data_penghuni','lapor_fasilitas.data_penghuni_id = data_penghuni.data_penghuni_id');
        return $this->db->get()->result();
    }
}