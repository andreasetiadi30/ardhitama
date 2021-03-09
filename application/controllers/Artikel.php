<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

//metode yg otomatis dipanggil ketika membuat objek baru

function __construct(){
	parent::__construct();
	$this->load->model('Artikel_m', 'artikel');
}

	public function index(){	
		$data['content'] = 'admin/artikel/index';
		$data['artikel'] = $this->artikel->getAllArtikel();
		$this->load->view('admin/dashboard', $data);
	}
	 
	public function create(){
		$data['content'] = 'admin/artikel/create';
		$data['header']	= "Tambah Artikel";
		$this->load->view('admin/dashboard', $data);
	}

	public function store(){
		$result = $this->dataap->saveArtikel();
		if ($result) {
			redirect('/admin/artikel/index');
		}

	}

	public function edit(){
		$data['content'] = 'admin/artikel/edit';
		$data['header']	= "Ubah Artikel";
		$data['artikel'] = $this->artikel->getArtikel($idart);
		$this->load->view('admin/dashboard', $data);			
	}

	public function update($idart){
		$result = $this->artikel->updateArtikel($idart);
		if ($result) {
			redirect('/admin/artikel/index');
		}			

	}	

	public function delete($idart){
		$result = $this->artikel->deleteArtikel($idart);
		if ($result) {
			redirect('/admin/artikel/index');
		}			

	}	

}



