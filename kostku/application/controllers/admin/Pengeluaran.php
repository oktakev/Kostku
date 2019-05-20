<?php 

class Pengeluaran extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_pengeluaran');
                $this->load->helper('url');
	}

	function index(){
		$this->load->library("libdate");
		$this->load->library("lib");
		$data['pengeluaran_barang'] = $this->m_pengeluaran->tampil_data()->result();
		$this->load->view('admin/pengeluaran/v_pengeluaran_barang',$data);
	}
	
	function tambah_aksi(){
		$kategori = $this->input->post('kategori');
		$keterangan = $this->input->post('keterangan');
		$biaya = $this->input->post('biaya');
		$tanggal = $this->input->post('tanggal');
		
		$data = array(
			'kategori' => $kategori,
			'keterangan'=> $keterangan,
			'biaya' => $biaya,
			'tanggal' => $tanggal
			);
		$this->m_pengeluaran->input_data($data,'pengeluaran_barang');
		redirect('admin/pengeluaran/index');
	}
	
	function edit($id){
	$where = array('pengeluaran_barang_id' => $id);
	$data['pengeluaran_barang'] = $this->m_pengeluaran->edit_data($where,'pengeluaran_barang')->result();
	$this->load->view('admin/pengeluaran/v_edit_barang',$data);
	}

	function hapus($id){
		$where = array('pengeluaran_barang_id' => $id);
		$this->m_pengeluaran->hapus_data($where,'pengeluaran_barang');
		redirect('admin/pengeluaran/index');
	}
}