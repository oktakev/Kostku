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

    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    public function myjoin()
    {
        $this->db->select('
                            lapor_fasilitas.lapor_fasilitas_id,
                            lapor_fasilitas.keluhan,
                            lapor_fasilitas.status,
                            fasilitas.nama_fasilitas,
                            member.username
                            ');
        $this->db->from('lapor_fasilitas');
        $this->db->join('fasilitas','lapor_fasilitas.fasilitas_id = fasilitas.fasilitas_id');
        $this->db->join('member','lapor_fasilitas.user_id = member.user_id');
        return $this->db->get()->result();
    }
    public function myjoinEdit($id)
    {
        $this->db->select('
                            lapor_fasilitas.lapor_fasilitas_id,
                            lapor_fasilitas.keluhan,
                            lapor_fasilitas.status,
                            fasilitas.nama_fasilitas,
                            member.username
                            ');
        $this->db->from('lapor_fasilitas');
        $this->db->join('fasilitas','lapor_fasilitas.fasilitas_id = fasilitas.fasilitas_id');
        $this->db->join('member','lapor_fasilitas.user_id = member.user_id');
        $this->db->where($id);
        return $this->db->get()->result();
    }
}