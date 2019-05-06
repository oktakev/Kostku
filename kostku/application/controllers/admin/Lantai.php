<?php 

class Lantai extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_lantai');
                $this->load->helper('url');
	}

	function index(){
		$data['lantai'] = $this->m_lantai->tampil_data()->result();
		$this->load->view('admin/v_lantai',$data);
	}
	
	function tambah_aksi(){
		$nama_lantai = $this->input->post('nama_lantai');
		
		$data = array(
			'nama_lantai' => $nama_lantai
			);
		$this->m_lantai->input_data($data,'lantai');
		redirect('admin/lantai/index');
	}
	
	function edit($id){
	$where = array('data_lantai_id' => $id);
	$data['lantai'] = $this->m_lantai->edit_data($where,'lantai')->result();
	$this->load->view('admin/v_lantai',$data);
	}
	
	function hapus($id){
		$where = array('data_lantai_id' => $id);
		$this->m_lantai->hapus_data($where,'lantai');
		redirect('admin/lantai/index');
	}
}