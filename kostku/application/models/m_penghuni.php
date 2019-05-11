<?php 

class M_penghuni extends CI_Model{
    function tampil_data(){
        return $this->db->get('data_penghuni');
    }
}