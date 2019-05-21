<?php 

class Penghuni extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_penghuni');
                $this->load->helper('url');
	}

	function index(){
		$this->load->library("lib");
		$this->load->library("libkamar");
		$this->load->model('m_penghuni');
		$data['query'] = $this->m_penghuni->myjoin();
		$this->load->view('admin/penghuni/v_data_penghuni',$data);
	}
	function edit($id){
		$where = array('data_penghuni_id' => $id);
		$data['query'] = $this->m_penghuni->myjoinEdit($where);
		$this->load->view('admin/penghuni/v_edit_penghuni',$data);
	}
	function hapus($id){
		$where = array('data_kamar_id' => $id);
		$this->m_kamar->hapus_data($where,'kamar');
		redirect('admin/kamar/index');
	}
}
