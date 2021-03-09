<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

//metode yg otomatis dipanggil ketika membuat objek baru

function __construct(){
	parent::__construct();
	// $this->load->model('Penilaian_m', 'penilaian');
}

	public function index(){	
		$data['content'] = 'admin/artikel/index';
		// $data['penilaian'] = $this->dataap->getAllDataap();
		$this->load->view('admin/dashboard', $data);
	}
	 
	public function create(){
		$data['content'] = 'admin/artikel/create';
		$data['header']	= "Tambah Artikel";
		$this->load->view('admin/dashboard', $data);
	}

	public function edit(){
		$data['content'] = 'admin/artikel/edit';
		$data['header']	= "Ubah Artikel";
		// $data['dataap'] = $this->dataap->getDataap($iddataap);
		$this->load->view('admin/dashboard', $data);			
	}

}



