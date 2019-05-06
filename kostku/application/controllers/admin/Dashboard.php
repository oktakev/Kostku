<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			$this->session->set_flashdata('fail','Login Dulu Gan !!!');
			redirect(base_url("login"));
		}
	}
	
	public function index()
	{
		$this->load->view('dashboard');
	}
}
