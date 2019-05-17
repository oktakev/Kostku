<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sarapan extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/sarapan/v_menu');
	}
}
