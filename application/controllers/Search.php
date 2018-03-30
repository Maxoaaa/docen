<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	function __construct(){
		parent::__construct(); 
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	public function index()
	{
		$this->load->model("dokumen/M_dokumen");
    	$query = $this->M_dokumen->listAll(); 

	    $dataHalaman = array(
	      'query' => $query
	    );
		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('dashboard/pencarian/search_file_view');
		$this->load->view('dashboard/v_footer');
	}

}
