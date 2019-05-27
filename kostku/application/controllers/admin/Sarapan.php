<?php 

class Sarapan extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_menu_sarapan');
        $this->load->helper('url');
	}

	function index(){
		$data['menu_sarapan'] = $this->m_menu_sarapan->tampil_data()->result();
		$this->load->view('admin/sarapan/v_menu',$data);
	}
	
	function tambah_aksi(){
		$nama_menu = $this->input->post('nama_menu');
		$harga = $this->input->post('harga');
		$data = array(
			'nama_menu' => $nama_menu,
			'harga' => $harga
			);
		$this->m_menu_sarapan->input_data($data,'menu_sarapan');
		redirect('admin/sarapan/index');
	}
	
	function edit($id){
	$where = array('menu_sarapan_id' => $id);
	$data['menu_sarapan'] = $this->m_menu_sarapan->edit_data($where,'menu_sarapan')->result();
	$this->load->view('admin/sarapan/v_edit_menu',$data);
	}

	function update(){
	$biaya_kost_id = $this->input->post('menu_sarapan_id');
	$nama_pengaturan = $this->input->post('nama_menu');
	
	$data = array(
		'nama_menu' => $nama_menu
	);

	$where = array(
		'menu_sarapan_id' => $menu_sarapan_id
	);

	$this->m_menu_sarapan->update_data($where,$data,'menu_sarapan');
	redirect('admin/sarapan/index');
}
	
	function hapus($id){
		$where = array('menu_sarapan_id' => $id);
		$this->m_menu_sarapan->hapus_data($where,'menu_sarapan');
		redirect('admin/sarapan/index');
	}
}