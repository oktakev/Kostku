<?php 

class Monitor extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('');
                $this->load->helper('url');
	}

	function index(){
		$this->load->view('admin/pembayaran/v_monitor');
	}
}