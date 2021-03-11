<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_m extends CI_Model {
	function __construct(){
        parent::__construct();
    }
	// public function getAllArtikel(){
	// 	$result = $this->db->get('articles');
	// 	return $result->result();
	// }

	public function getAllArtikel(){
		$result = $this->db->get('articles');
		return $result->result();
	}

	public function saveArtikel(){
		$data = array(
		'idart' => $this->input->post('idart'),
		'title' => $this->input->post('title'),
		'article' => $this->input->post('article'),
		);

		return $this->db->insert('articles',$data);

	}

	public function getArtikel($idart){
		$this->db->where('idart',$idart);
		$result = $this->db->get('articles');
		return $result->row();
	}	

	public function updateArtikel($idart){
		$data = array(
		'title' => $this->input->post('title'),
		'article' => $this->input->post('article')
		);

		$this->db->where('idart',$idart);
		return $this->db->update('articles',$data);		
	}

	public function deleteArtikel($idart){
		$this->db->where('idart', $idart);
		return $this->db->delete('articles');
	}				



}

?>
