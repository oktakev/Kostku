<?php 

class Fasilitas extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_fasilitas');
                $this->load->helper('url');
	}

	function index(){
		$data['fasilitas'] = $this->m_fasilitas->tampil_data()->result();
		$this->load->view('admin/fasilitas/v_fasilitas',$data);
	}

	function tambah_aksi(){
		$nama_fasilitas = $this->input->post('nama_fasilitas');
		
		$data = array(
			'nama_fasilitas' => $nama_fasilitas
			);
		$this->m_fasilitas->input_data($data,'fasilitas');
		redirect('admin/fasilitas/index');
	}
	
	function edit($id){
	$where = array('fasilitas_id' => $id);
	$data['fasilitas'] = $this->m_fasilitas->edit_data($where,'fasilitas')->result();
	$this->load->view('admin/fasilitas/v_edit_fasilitas',$data);
	}

	function update(){
	$id = $this->input->post('fasilitas_id');
	$nama_lantai = $this->input->post('nama_fasilitas');
	
	$data = array(
		'nama_fasilitas' => $nama_fasilitas
	);

	$where = array(
		'fasilitas_id' => $id
	);

	$this->m_fasilitas->update_data($where,$data,'fasilitas');
	redirect('admin/fasilitas/index');
	
	
	function hapus($id){
		$where = array('fasilitas_id' => $id);
		$this->m_fasilitas->hapus_data($where,'fasilitas');
		redirect('admin/fasilitas/index');
	}
}
	
	function hapus($id){
		$where = array('fasilitas_id' => $id);
		$this->m_fasilitas->hapus_data($where,'fasilitas');
		redirect('admin/fasilitas/index');
	}

	function laporan(){
		$this->load->model('m_fasilitas');
		$data['query'] = $this->m_fasilitas->myjoin();
		$this->load->view('admin/fasilitas/v_list_laporan',$data);
	}

	function edit_laporan($id){
		$where = array('lapor_fasilitas_id' => $id);
		$data['query'] = $this->m_fasilitas->myjoinEdit($where);
		$this->load->view('admin/fasilitas/v_edit_laporan',$data);
	}
}