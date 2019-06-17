<?php 

class M_akun extends CI_Model{
    function tampil_data(){
        return $this->db->get('akun');
    }

    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
   
    
   
}
