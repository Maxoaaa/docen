<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddDocument extends CI_Controller {

	function __construct(){
    parent::__construct();      
    	if($this->session->userdata('status') != "login"){
      		redirect(base_url("login"));
    	}   
  	}
	public function index()
	{
		$this->load->model("login/M_login");
      $usan = $this->session->userdata('nama');
      $kue = $this->M_login->hak_ak($usan);
    //panggil fungsi listAll dari User_model        
        $data_profil = array(           
          'da' => $kue,
          'nama_admin'=>$usan
        );
		$this->load->view('dashboard/v_header',$data_profil);
		$this->load->view('dashboard/daftarfile/add_file_view');
		$this->load->view('dashboard/v_footer');
	}
}
