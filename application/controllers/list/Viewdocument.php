<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Viewdocument extends CI_Controller {

  function __construct(){
    parent::__construct();      
    if($this->session->userdata('status') != "login"){
      redirect(base_url("login"));
    }   
    $this->load->model("dokumen/M_dokumen");
    $this->load->model("login/M_login");
  }

	public function index($id=""){ 
		
      $usan = $this->session->userdata('nama');
      $kue = $this->M_login->hak_ak($usan);
      $jenis_dokumen = $this->M_dokumen->list_jns_dok();      
        $total_dok1 = $this->M_dokumen->total_dok($id,'Formulir');
        $total_dok2 = $this->M_dokumen->total_dok($id,'Ijazah Dosen');
        $total_dok3 = $this->M_dokumen->total_dok($id,'Pedoman');
        $total_dok4 = $this->M_dokumen->total_dok($id,'Sertifikat');
        $total_dok5 = $this->M_dokumen->total_dok($id,'SK Pendirian PS');
        $total_dok6 = $this->M_dokumen->total_dok($id,'SK Presiden');
        $total_dok7 = $this->M_dokumen->total_dok($id,'SK Rektor');
        $total_dok8 = $this->M_dokumen->total_dok($id,'SK Yayasan Pendidikan Jaya');
        $total_dok9 = $this->M_dokumen->total_dok($id,'Surat Keputusan');
        $total_dok10 = $this->M_dokumen->total_dok($id,'Surat Tugas');
        $query = $this->M_dokumen->listDetail($id); //untuk menampilkan data pada entry_doku_view
        //$judul_standar['natalo']= $id;  
        $judul_standar = array(
          'natalo' =>  $id
        );
        $dataHalaman = array( 
          'query' => $query,
          'da' => $kue,
          'nama_admin'=>$usan,
          'query_tampil2' => $jenis_dokumen,
          'jumlah_dok1'=>$total_dok1,
          'jumlah_dok2'=>$total_dok2,
          'jumlah_dok3'=>$total_dok3,
          'jumlah_dok4'=>$total_dok4,
          'jumlah_dok5'=>$total_dok5,
          'jumlah_dok6'=>$total_dok6,
          'jumlah_dok7'=>$total_dok7,
          'jumlah_dok8'=>$total_dok8,
          'jumlah_dok9'=>$total_dok9,
          'jumlah_dok10'=>$total_dok10
        );
              
   	$this->load->view('dashboard/v_header',$dataHalaman); 
		$this->load->view('dashboard/daftarfile/entry_file_view',$judul_standar);
		$this->load->view('dashboard/v_footer');
	}
	public function dokudoku($id="",$tor=""){
    $this->load->model("dokumen/M_dokumen");
    $this->load->model("login/M_login");
      $usan = $this->session->userdata('nama'); 
      $kue = $this->M_login->hak_ak($usan);  
      $where = array(
      'standar' => $id,      
      'jenis_dok' => $tor
      );   
        $query = $this->M_dokumen->listDetail($where);     
        //$cek = $this->M_dokumen->listDetail($where)->num_rows();  
        //$cek = $this->M_dokumen->listDetail($where)->count_all_results();  
        
        $judul_standar = array(
          'natalo' =>  $id
        ); 
        $dataHalaman = array( 
          'query' => $query,
          'da' => $kue,
          'nama_admin'=>$usan,
         // 'cek_data' => $cek
        );
        

    $this->load->view('dashboard/v_header',$dataHalaman);
    $this->load->view('dashboard/daftarfile/entry_doku_view',$judul_standar);
    $this->load->view('dashboard/v_footer');
  }
  
}
