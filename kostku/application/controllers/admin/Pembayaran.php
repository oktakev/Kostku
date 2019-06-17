<?php 

class Pembayaran extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_pembayaran');
                $this->load->helper('url');
	}

	function index(){
		$this->load->library("libdate");
		$this->load->library("lib");
		$this->load->model('m_pembayaran');
		$data['query'] = $this->m_pembayaran->myjoin();
		$this->load->view('admin/pembayaran/v_pembayaran',$data);
	}
}
