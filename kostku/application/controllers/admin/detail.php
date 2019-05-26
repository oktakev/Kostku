<?php 

class Detail extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_detail_sarapan');
                $this->load->helper('url');
	}

	function index(){
		$this->load->library("lib");
		$this->load->model('m_detail_sarapan');
		$data['querydetail'] = $this->m_detail_sarapan->myjoin();
		$this->load->view('admin/sarapan/v_pesan_sarapan',$data);
	}
}
