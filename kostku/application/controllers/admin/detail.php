<?php 

class Detail extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_detail_sarapan');
                $this->load->helper('url');
	}

	function pesanan($id){
		$this->load->library("lib");
		$where = array('detail_id' => $id);
		$data['query'] = $this->m_detail_sarapan->detailjoin($where);
		$this->load->view('admin/sarapan/v_detail_sarapan',$data);
	}
}