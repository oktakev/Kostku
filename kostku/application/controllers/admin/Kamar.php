<?php 

class Kamar extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_kamar');
        $this->load->helper('url');
	}

	function index(){
		$this->load->library("libkamar");
		$this->load->model('m_kamar');
		$data['query'] = $this->m_kamar->myjoin();
		$data['groups'] = $this->m_kamar->getAllGroups();
		$this->load->view('admin/kamar/v_kamar',$data);
		}
	
	function tambah_aksi(){
		$data_lantai_id = $this->input->post('data_lantai_id');
		$no_kamar = $this->input->post('no_kamar');
		$status = $this->input->post('status');

		$data = array(
			'data_lantai_id' => $data_lantai_id,
			'no_kamar' => $no_kamar,
			'status' => $status
			);
		$this->m_kamar->input_data($data,'kamar');
		redirect('admin/kamar/index');
	}
	
	function edit($id){
		$where = array('data_kamar_id' => $id);
		$data['query'] = $this->m_kamar->edit_data($where);
		$this->load->view('admin/kamar/v_edit_kamar',$data);
	}

	function update(){
		$id = $this->input->post('data_kamar_id');
		$data_lantai_id = $this->input->post('data_lantai_id');
		$no_kamar = $this->input->post('no_kamar');
		$status = $this->input->post('status');

		$data = array(
		'data_lantai_id' => $data_lantai_id,
		'no_kamar' => $no_kamar,
		'status' => $status
		);

		$where = array(
		'data_lantai_id' => $id
		);

	$this->m_kamar->update_data($where,$data,'kamar');
	redirect('admin/kamar/index');

	}

	function hapus($id){
		$where = array('data_kamar_id' => $id);
		$this->m_kamar->hapus_data($where,'kamar');
		redirect('admin/kamar/index');
	}
	function rupiah($angka){
	$hasil_rupiah = number_format($angka,2,',','.');
	return $hasil_rupiah;
	
	echo rupiah(1000000);
	}

}