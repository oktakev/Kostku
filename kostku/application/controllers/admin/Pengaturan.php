<?php 

class Pengaturan extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_pengaturan_biaya');
        $this->load->helper('url');
	}

	function index(){
		$this->load->library("lib");
		$data['pengaturan_biaya'] = $this->m_pengaturan_biaya->tampil_data()->result();
		$this->load->view('admin/pengaturanb/v_pengaturanb',$data);
	}
	
	function tambah_aksi(){
		$nama_pengaturan = $this->input->post('nama_pengaturan');
		$data = array(
			'nama_pengaturan' => $nama_pengaturan
			);
		$this->m_pengaturan_biaya->input_data($data,'pengaturan_biaya');
		redirect('admin/pengaturan/index');
	}
	
	function edit($id){
	$where = array('biaya_kost_id' => $id);
	$data['pengaturan_biaya'] = $this->m_pengaturan_biaya->edit_data($where,'pengaturan_biaya')->result();
	$this->load->view('admin/pengaturanb/v_edit_pengaturanb',$data);
	}

	function update(){
	$biaya_kost_id = $this->input->post('biaya_kost_id');
	$nama_pengaturan = $this->input->post('nama_pengaturan');
	
	$data = array(
		'nama_pengaturan' => $nama_pengaturan
	);

	$where = array(
		'biaya_kost_id' => $biaya_kost_id
	);

	$this->m_pengaturan_biaya->update_data($where,$data,'pengaturan_biaya');
	redirect('admin/pengaturanb/index');
}
	
	function hapus($id){
		$where = array('biaya_kost_id' => $id);
		$this->m_pengaturan_biaya->hapus_data($where,'pengaturan_biaya');
		redirect('admin/pengaturan/index');
	}
}