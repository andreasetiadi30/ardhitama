<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	//metode yg otomatis dipanggil ketika membuat objek baru
	function __construct(){
		parent::__construct();
		$this->load->model('Artikel_m', 'artikel');

		$this->load->helper('url');
		$this->load->library('session');
		
		// panggil fungsi cek login untuk semua fungsi di controller ini
		if(!$this->is_logged_in()){
			redirect('login');
		}
	}
	// session login
	// di pake buat cek session login,
	public function is_logged_in() {
        $user = $this->session->userdata('user');
        if (!isset($user)) { 
            return false; 
        } 
        else { 
            return true;
        }
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
		$result = $this->artikel->saveArtikel();
		if ($result) {
			redirect('/artikel');
		}

	}

	public function edit($idart){

		$data['content'] = 'admin/artikel/edit';
		$data['header']	= "Ubah Artikel";
		$data['artikel'] = $this->artikel->getArtikel($idart);
		$this->load->view('admin/dashboard', $data);			
	}

	public function update($idart){
		$result = $this->artikel->updateArtikel($idart);
		if ($result) {
			redirect('/artikel');
		}			

	}	

	public function delete($idart){
		$result = $this->artikel->deleteArtikel($idart);
		if ($result) {
			redirect('/artikel');
		}			

	}	

}



