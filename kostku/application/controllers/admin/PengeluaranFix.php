<?php 

class PengeluaranFix extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_pfix');
                $this->load->helper('url');
	}

	function index(){
		$this->load->library('lib');
		$data['pengeluaran_fix'] = $this->M_pfix->tampil_data()->result();
		$this->load->view('admin/pengeluaranfix/v_pengeluaran',$data);
	}
	
	function tambah_aksi(){
		$nama_pengeluaran = $this->input->post('nama_pengeluaran');
		$biaya = $this->input->post('biaya');
		
		$data = array(
			'nama_pengeluaran' => $nama_pengeluaran,
			'biaya' => $biaya
			);
		
		$this->M_pfix->input_data($data,'pengeluaran_fix');
		redirect('admin/PengeluaranFix/index');
	}
	
	function edit($id){
	$where = array('fix_id' => $id);
	$data['pengeluaran_fix'] = $this->M_pfix->edit_data($where,'pengeluaran_fix')->result();
	$this->load->view('admin/pengeluaranfix/v_edit_pengeluaran',$data);
	}
	
	function update(){
	$id = $this->input->post('id');
	$nama_pengeluaran = $this->input->post('nama_pengeluaran');
	$biaya = $this->input->post('biaya');
	
	$data = array(
		'nama_pengeluaran' => $nama_pengeluaran,
		'biaya' => $biaya
	);

	$where = array(
		'fix_id' => $id
	);

	$this->M_pfix->update_data($where,$data,'pengeluaran_fix');
	redirect('admin/PengeluaranFix/index');

function hapus($id){
		$where = array('fix_id' => $id);
		$this->M_pfix->hapus_data($where,'pengeluaran_fix');
		redirect('admin/PengeluaranFix/index');
	}
}

	function hapus($id){
		$where = array('fix_id' => $id);
		$this->M_pfix->hapus_data($where,'pengeluaran_fix');
		redirect('admin/pengeluaranfix/index');
	}
}