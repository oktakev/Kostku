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
	
	function hapus($id){
		$where = array('fasilitas_id' => $id);
		$this->m_fasilitas->hapus_data($where,'fasilitas');
		redirect('admin/fasilitas/index');
	}
}