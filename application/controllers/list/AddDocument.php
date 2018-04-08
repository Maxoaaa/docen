<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddDocument extends CI_Controller {

	function __construct(){
    parent::__construct();      
    	if($this->session->userdata('status') != "login"){
      		redirect(base_url("login"));
    	}   
  	 $this->load->model("login/M_login");
      $this->load->model("dokumen/M_dokumen");
    }
    
	public function index()
	{	
      $usan = $this->session->userdata('nama');
      $kue = $this->M_login->hak_ak($usan);
      $jenisDOK = $this->M_dokumen->list_jns_dok();
      $authorisasi = $this->M_dokumen->list_author_dok(); 
        $data_profil = array(           
          'da' => $kue,
          'nama_admin'=>$usan,
          'query_tampil' => $jenisDOK,
          'query_tampil2' => $authorisasi
        );          
		$this->load->view('dashboard/v_header',$data_profil);
		$this->load->view('dashboard/daftarfile/add_file_view');
		$this->load->view('dashboard/v_footer');
	}
    public function savedok()
    {      
      if($this->input->post('btnUpload') == "Upload"){
            $_no_dok = $this->input->post('no_surat', TRUE);
            $_nama_dok = $this->input->post('nama_surat', TRUE);
            $_kel_dok = $this->input->post('kelompok', TRUE);
            $_jenis_dok = $this->input->post('jenis', TRUE);
            $_authorisasi = $this->input->post('authorisasi', TRUE);
            $_upload = $this->input->post('Upload', TRUE);

            $this->load->model('dokumen/M_dokumen');
                //kumpulkan sesuai inputan kedalam array
            //$data = array();
            //foreach($_kel_dok AS $key => $val){
            
          //}
            $count=count($_kel_dok);
            for ($i=0; $i <=$count-1 ; $i++) {       
              $data = array(
                'no_surat' => $_no_dok,
                'nama_dok' => $_nama_dok,              
                'standar' => $_kel_dok[$i],           
                'jenis_dok'=> $_jenis_dok,
                'author'=> $_authorisasi,
                'file'=> $_upload
              );       
              $query= $this->M_dokumen->simpanDok($data);
            }            
                //panggil fungsi simpanUser pada User_model
            //$query= $this->M_dokumen->simpanDok($data);
           if ($query) {
              redirect(base_url('dashboard'));
            //print_r($stan);
           }
           else{
              redirect(base_url('dashboard'));
           }
      }
            
  }
  
}
