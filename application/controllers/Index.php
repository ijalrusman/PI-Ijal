<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {


	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->db->limit('5');
		$data['berita'] = $this->db->get('berita')->result();
		$this->load->view('user/v_index',$data);
	}
		
}