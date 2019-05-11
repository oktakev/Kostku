<?php 

class Kamar extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_kamar');
                $this->load->helper('url');
	}

	function index(){
		$this->load->model('m_kamar');
		$data['query'] = $this->m_kamar->myjoin();
		$this->load->view('admin/kamar/v_kamar',$data);
		}
	
	function tambah_aksi(){
		$nama_lantai = $this->input->post('nama_lantai');
		$no_kamar = $this->input->post('no_kamar');
		$status = $this->input->post('status');

		$data = array(
			'nama_lantai' => $nama_lantai,
			'no_kamar' => $no_kamar,
			'status' => $status
			);
		$this->m_kamar->input_data($data,'kamar');
		redirect('admin/kamar/index');
	}
	
	function edit($id){
		$where = array('data_lantai_id' => $id);
		$data['lantai'] = $this->m_lantai->edit_data($where,'lantai')->result();
		$this->load->view('admin/lantai/v_edit_lantai',$data);
	}
	
	function hapus($id){
		$where = array('data_lantai_id' => $id);
		$this->m_lantai->hapus_data($where,'lantai');
		redirect('admin/lantai/index');
	}
}