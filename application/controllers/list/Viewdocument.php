<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class ViewDocument extends CI_Controller {

  function __construct(){
    parent::__construct();      
    if($this->session->userdata('status') != "login"){
      redirect(base_url("login"));
    }      
  }

	public function index($id=""){ 
		
      $usan = $this->session->userdata('nama');
      $kue = $this->M_login->hak_ak($usan);
      $jenis_dokumen = $this->M_dokumen->list_jns_dok();      
        $total_dok1 = $this->M_dokumen->total_dokb($id,1);
        $total_dok2 = $this->M_dokumen->total_dokb($id,2);
        $total_dok3 = $this->M_dokumen->total_dokb($id,3);
        $total_dok4 = $this->M_dokumen->total_dokb($id,4);
        $total_dok5 = $this->M_dokumen->total_dokb($id,5);
        $total_dok6 = $this->M_dokumen->total_dokb($id,6);
        $total_dok7 = $this->M_dokumen->total_dokb($id,7);
        $total_dok8 = $this->M_dokumen->total_dokb($id,8);
        $total_dok9 = $this->M_dokumen->total_dokb($id,9);
        $total_dok10 = $this->M_dokumen->total_dokb($id,10);
        $total_dok11 = $this->M_dokumen->total_dokb($id,11);
        $total_dok12 = $this->M_dokumen->total_dokb($id,12);
        $total_dok13 = $this->M_dokumen->total_dokb($id,13);
        $total_dok14 = $this->M_dokumen->total_dokb($id,14);
        $total_dok15 = $this->M_dokumen->total_dokb($id,15);
        $total_dok16 = $this->M_dokumen->total_dokb($id,16);
        $total_dok17 = $this->M_dokumen->total_dokb($id,17);
        $total_dok18 = $this->M_dokumen->total_dokb($id,18);
        $total_dok19 = $this->M_dokumen->total_dokb($id,19);
        $total_dok20 = $this->M_dokumen->total_dokb($id,20);
        $query = $this->M_dokumen->listDetail($id); //untuk menampilkan data pada entry_doku_view
        //$judul_standar['natalo']= $id;  
        $judul_standar = array(
          'natalo' =>  $id
        );
        $dataHalaman = array( 
          'query' => $query,
          'da' => $kue,
          //'nama_admin'=>$usan,
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
          'jumlah_dok10'=>$total_dok10,
          'jumlah_dok11'=>$total_dok11,
          'jumlah_dok12'=>$total_dok12,
          'jumlah_dok13'=>$total_dok13,
          'jumlah_dok14'=>$total_dok14,
          'jumlah_dok15'=>$total_dok15,
          'jumlah_dok16'=>$total_dok16,
          'jumlah_dok17'=>$total_dok17,
          'jumlah_dok18'=>$total_dok18,
          'jumlah_dok19'=>$total_dok19,
          'jumlah_dok20'=>$total_dok20
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
          //'nama_admin'=>$usan,
         // 'cek_data' => $cek
        );
        

    $this->load->view('dashboard/v_header',$dataHalaman);
    $this->load->view('dashboard/daftarfile/entry_doku_view',$judul_standar);
    $this->load->view('dashboard/v_footer');
  }
  
}
