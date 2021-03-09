<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();

		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('LoginModel');

		// panggil fungsi cek login untuk semua fungsi di controller ini

		// var_dump($this->is_logged_in());
		// exit();

	}

	public function index()
	{
		$this->load->view('login');
	}

	public function submit()
	{
		if( isset($_POST['login'] ) ){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$query = $this->LoginModel->login($username, $password);
			if ($query->num_rows() > 0) {

				$dataSession = array(
					'user' => $this->input->post('username'),
					'pass' => $this->input->post('password')
				);
				$this->session->set_userdata( $dataSession );
				
				echo "<script>alert('Login Berhasil');</script>";
				redirect('admin/index');
			} else {
				echo "<script>alert('Username dan Password tidak cocok');</script>";
				$this->load->view('login');
			}
		}
		else{
			echo "<script>alert('Ada Kesalahan');</script>";
			$this->load->view('login');
		}
	}

	public function Logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}
