<?php 

class M_kamar extends CI_Model{

    public function myjoin()
    {
    	$this->db->select('*');
    	$this->db->from('lantai');
    	$this->db->join('kamar','lantai.data_lantai_id = kamar.data_lantai_id');
    	return $this->db->get()->result();
    	
    }
    
    function getAllGroups()
    {
        $query = $this->db->query('SELECT data_lantai_id, nama_lantai FROM lantai');
        return $query->result();
	}

    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
     function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    function edit_data($where,$table){      
        $this->db->select('*');
        $this->db->from('lantai');
        $this->db->join('kamar','lantai.data_lantai_id = kamar.data_lantai_id');
        return $this->db->get()->result();
    }
}