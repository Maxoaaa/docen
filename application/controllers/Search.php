<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	function __construct(){
		parent::__construct(); 
		$this->load->model("login/M_login");
		$this->load->model("dokumen/M_dokumen");
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	} 
	public function index($id="")
	{
		$usan = $this->session->userdata('nama');
      $kue = $this->M_login->hak_ak($usan);
    //panggil fungsi listAll dari User_model
        $query = $this->M_dokumen->listDetail($id);     
        //$judul_standar['natalo']= $id;  
        
        $dataHalaman = array( 
          'query' => $query,
          'da' => $kue,
          'nama_admin'=>$usan
        );
		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('dashboard/pencarian/search_file_view');
		$this->load->view('dashboard/v_footer');
	}

}
