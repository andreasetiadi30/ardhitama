<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
        parent::__construct();

		$this->load->helper('url');
    }

	public function index()
	{	
		$data['content'] = 'admin/home';
		return $this->load->view('admin/dashboard', $data);
	}

}
