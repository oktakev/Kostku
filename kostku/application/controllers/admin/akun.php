<?php 
class Akun extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_akun');
                $this->load->helper('url');
	}
	function index(){
		$this->load->library("libdate");
		$data['akun'] = $this->m_akun->tampil_data()->result();
		$this->load->view('admin/member/v_akun',$data);
	}
	
}
