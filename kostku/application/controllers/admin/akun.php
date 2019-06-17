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
	function tambahakun(){
		$this->load->view('admin/member/v_buat_akun');
	}

	function add(){
		date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
		$now = date('Y-m-d H:i:s');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->db->set('tanggal', 'NOW()', FALSE);


		$data = array(
			'username' => $username,
			'password' => md5($password),
			);

		$this->m_akun->input_data($data,'akun');
		redirect('admin/akun/index');
	}
	
}
