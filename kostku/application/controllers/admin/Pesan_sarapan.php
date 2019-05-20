<?php 

class Pesan_sarapan extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_pesansarapan');
                $this->load->helper('url');
	}

	function index(){
		$this->load->library("libdate");
		$this->load->model('m_pesansarapan');
		$data['query'] = $this->m_pesansarapan->myjoin();
		$this->load->view('admin/sarapan/v_pesan_sarapan',$data);
	}
	function detail(){
		$this->load->model('m_detail_sarapan');
		$data['query'] = $this->m_pesansarapan->myjoin();
		$this->load->view('admin/sarapan/v_pesan_sarapan',$data);
	}
}
