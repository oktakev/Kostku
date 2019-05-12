<?php 

class Penghuni extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_penghuni');
                $this->load->helper('url');
	}

	function index(){
		$this->load->model('m_penghuni');
		$data['query'] = $this->m_penghuni->myjoin();
		$this->load->view('admin/penghuni/v_data_penghuni',$data);
		}
}