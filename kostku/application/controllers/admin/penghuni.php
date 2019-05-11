<?php 

class Penghuni extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_penghuni');
                $this->load->helper('url');
	}

	function index(){
		$data['data_penghuni'] = $this->m_penghuni->tampil_data()->result();
		$this->load->view('admin/penghuni/v_data_penghuni',$data);
	}
}