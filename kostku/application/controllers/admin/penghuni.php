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
	function update(){
	$id = $this->input->post('data_penghuni_id');
	$nama_lengkap = $this->input->post('nama_lengkap');
	$no_ktp = $this->input->post('no_ktp');
	$alamat = $this->input->post('alamat');
	$no_hp = $this->input->post('no_hp');
	
	$data = array(
		'nama_lengkap' => $nama_lengkap,
		'no_ktp' => $no_ktp,
		'alamat' => $alamat,
		'no_hp' => $no_hp
	);

	$where = array(
		'data_penghuni_id' => $id
	);

	$this->m_penghuni->update_data($where,$data,'data_penghuni');
	redirect('admin/penghuni/index');
}
	function hapus($id){
		$where = array('data_kamar_id' => $id);
		$this->m_kamar->hapus_data($where,'kamar');
		redirect('admin/kamar/index');
	}
}
