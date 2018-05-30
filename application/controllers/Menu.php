<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	function __construct(){
		parent::__construct();
		//$this->load->model('login/m_login');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}		
	} 
	public function index()
	{		
		$usan = $this->session->userdata('nama');
		$kue = $this->M_login->hak_ak($usan);    	 
        
        $dataHalaman = array(             
          'da' => $kue,          
        );
		$this->load->view('dashboard/v_menu',$dataHalaman);
	}
}
