<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
 
	function __construct(){
		parent::__construct();
		//$this->load->model('login/m_login');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model("login/M_login");
		$this->load->model("dokumen/M_dokumen");
	}
	public function index(){
		$badgeku = $this->input->post('badgeku', TRUE);
    	$query = $this->M_login->listBorang(); 
    	$usan = $this->session->userdata('nama') ;
    	$kue = $this->M_login->hak_ak($usan);     	        		    	
	    $pencapaian1=$this->M_dokumen->progress_bar(1); 
	    $pencapaian2=$this->M_dokumen->progress_bar(2); 	    
	    $pencapaian3=$this->M_dokumen->progress_bar(3); 
	    $pencapaian4=$this->M_dokumen->progress_bar(4); 
	    $pencapaian5=$this->M_dokumen->progress_bar(5); 
	    $pencapaian6=$this->M_dokumen->progress_bar(6); 
	    $pencapaian7=$this->M_dokumen->progress_bar(7); 
	    $pencapaian8=$this->M_dokumen->progress_bar(8); 
	    $pencapaian9=$this->M_dokumen->progress_bar(9); 
    	    	
	    $array2 = array(
	    	'query' => $query,
		    'da' => $kue,
		    'nama_admin'=>$usan,
		    'capai1'=>$pencapaian1,
		    'capai2'=>$pencapaian2,		    
		    'capai3'=>$pencapaian3,
		    'capai4'=>$pencapaian4,
		    'capai5'=>$pencapaian5,
		    'capai6'=>$pencapaian6,
		    'capai7'=>$pencapaian7,
		    'capai8'=>$pencapaian8,
		    'capai9'=>$pencapaian9,
		    'pai1'=>7
	    ); 
	     
		$this->load->view('dashboard/v_header',$array2);
		$this->load->view('dashboard/v_dashboard');
		$this->load->view('dashboard/v_footer');
	}

}
