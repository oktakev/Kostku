<?php 

class M_lantai extends CI_Model{
    function tampil_data(){
        return $this->db->get('lantai');
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
}