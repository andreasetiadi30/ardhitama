<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
        parent::__construct();

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


	public function index()
	{	
		$data['content'] = 'admin/home';
		return $this->load->view('admin/dashboard', $data);
	}

}
