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
		$_cari = $this->input->get('q', TRUE);
		$usan = $this->session->userdata('nama');
		$kue = $this->M_login->hak_ak($usan);    	
        $query = $this->M_dokumen->list_search($_cari);
        //$query_modal = $this->M_dokumen->list_detail($cari);        
        //$judul_standar['natalo']= $id;  
        
        $dataHalaman = array( 
          'list_pencarian' => $query,
          //'query_modal' => $query_modal,          
          'da' => $kue,          
        );
		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('dashboard/pencarian/search_file_view');
		$this->load->view('dashboard/v_footer');
	}
	public function page() 
	{		
		$usan = $this->session->userdata('nama');
		$kue = $this->M_login->hak_ak($usan);    	 
        
        $dataHalaman = array(             
          'da' => $kue,          
        );
		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('dashboard/pencarian/halaman_pencarian');
		$this->load->view('dashboard/v_footer');
	}
	
	

}
