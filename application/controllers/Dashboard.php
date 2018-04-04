<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		//$this->load->model('login/m_login');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}		
	}
	public function index()
	{
		$this->load->model("login/M_login");
    	$query = $this->M_login->listBorang(); 
    	$usan = $this->session->userdata('nama') ;
    	$kue = $this->M_login->hak_ak($usan);     	    		   
	    $array2 = array(
	    	'query' => $query,
		    'da' => $kue,
		    'nama_admin'=>$usan
	    );
		$this->load->view('dashboard/v_header',$array2);
		$this->load->view('dashboard/v_dashboard');
		$this->load->view('dashboard/v_footer');
	}

}
