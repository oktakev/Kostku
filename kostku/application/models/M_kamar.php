<?php 

class M_kamar extends CI_Model{
    public function myjoin()
    {
    	$this->db->select('*');
    	$this->db->from('lantai');
    	$this->db->join('kamar','lantai.data_lantai_id = kamar.data_lantai_id');
    	return $this->db->get()->result();
    	
    }
}