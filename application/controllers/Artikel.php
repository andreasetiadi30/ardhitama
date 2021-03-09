<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	//metode yg otomatis dipanggil ketika membuat objek baru
	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('session');
		// $this->load->model('Penilaian_m', 'penilaian');
		
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



