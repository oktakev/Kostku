<?php 

class Pengeluaran extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_pengeluaran');
                $this->load->helper('url');
	}

	function index(){
		$data['pengeluaran'] = $this->m_pengeluaran->tampil_data()->result();
		$this->load->view('admin/pengeluaran/v_pengeluaran_barang',$data);
	}
	
	function tambah_aksi(){
		$nama_pengeluaran = $this->input->post('nama_pengeluaran');
		
		$data = array(
			'kategori' => $nama_pengeluaran,
			'keterangan'=> $kategori,
			'biaya' => $biaya,
			'tanggal' => $tanggal
			);
		$this->m_pengeluaran->input_data($data,'pengeluaran');
		redirect('admin/pengeluaran/index');
	}
	
	function edit($id){
	$where = array('v_pengeluaran_barang_id' => $id);
	$data['pengeluaran'] = $this->m_pengeluaran->edit_data($where,'pengeluaran')->result();
	$this->load->view('admin/pengeluaran/v_edit_pengeluaran_barang',$data);
	}

	function hapus($id){
		$where = array('data_pengeluaran_id' => $id);
		$this->m_pengeluaran->hapus_data($where,'pengeluaran');
		redirect('admin/pengeluaran/index');
	}
}