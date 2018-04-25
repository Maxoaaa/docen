<?php
defined('BASEPATH') OR exit('Anda tidak boleh mengakses file ini secara langsung');

class Users extends CI_Controller {
  function __construct(){
    parent::__construct();
    if($this->session->userdata('status') != "login"){
      redirect(base_url("login"));
    }    
  }
  public function index() {//memuat tampilan list semua user
    $usan = $this->session->userdata('nama') ;      
    $kue = $this->M_login->hak_ak($usan); 
    $query = $this->M_pengguna->listAll();
    $queryauthor = $this->M_pengguna->listAuthor(); 
    $dataHalamanku = array(
        'query' => $query,
        'da' => $kue,
        //'nama_admin'=>$usan,
        'q' => $query,
        'query_author'=>$queryauthor
      );
    $this->load->view('dashboard/v_header',$dataHalamanku);
    $this->load->view('pengguna/v_user');    
    $this->load->view('dashboard/v_footer');
  }
    public function inputData(){
      //  echo " Ini Input Data";
        $this->load->view('admin/header_view');
        $this->load->view('admin/user_inputData_view'); 
    }
    public function saveupdateuser(){
        if ($this->input->post('btnSimpan') == "Simpan") {
          $_username = $this->input->post('username', TRUE);
          $_email = $this->input->post('email', TRUE);
          $_password = $this->input->post('password', TRUE);
          $_cpassword = $this->input->post('cpassword', TRUE);
          $_authorisasi = $this->input->post('authorisasi', TRUE);
          $id = $this->input->post('id', TRUE);
          if ($_authorisasi == 'admin') {
            $hakakses=10;
          }else if ($_authorisasi =='dosen') {
            $hakakses=3;
          }
          if($_password == ""){
            $data = array(
              'username' => $_username,
              'email'=> $_email,
              'author'=> $_authorisasi
            );
          }
          else{
            if ($_password == $_cpassword) {
              //kumpulkan seua inputan kedalam array
              $data = array(
                'username' => $_username,
                'email'=> $_email,
                'password'=> $_password,                
                'author'=> $_authorisasi,
                'hak_akses'=>$hakakses
              );              
              $query= $this->M_pengguna->simpanUpdateUser($data,$id);
            }
            else{
              //jika password tidak sama
            }
          }
          //load model user         
          $query= $this->M_pengguna->simpanUpdateUser($data,$id);
          if ($query) {
            redirect('pengguna/users');
          }
          else{
            $this->session->set_flashdata('notification_password', '<div class="col-xs-5 alert alert-danger alert-dismissible pull-right">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><i class="icon fa fa-ban"></i> Password konfirmasi tidak cocok!</p>
                
                  </div>');
            redirect('pengguna/users');
          }
        }
    } 
    public function saveUser(){
      //echo "test";
        //jika button simpan diklik
        if($this->input->post('btnSimpan') == "Simpan"){
          $_username = $this->input->post('username', TRUE);
          $_email = $this->input->post('email', TRUE);
          $_password = $this->input->post('password', TRUE);
          $_cpassword = $this->input->post('cpassword', TRUE);
          $_authorisasi = $this->input->post('authorisasi', TRUE);
          if ($_authorisasi == 'admin') {
            $hakakses=10;
          }else if ($_authorisasi =='dosen') {
            $hakakses=3;
          }
          if ($_password == $_cpassword) {
              //jika password sama dengan confirm password
              //enkripsi password dgn SHA1
              //$salt = "T1F";
              //$_password = $_password.$salt;
              //$_salonPass = sha1($_password);
              //load model user
              //kumpulkan seua inputan kedalam array
              $data = array(                
                'username'=> $_username,
                'email'=> $_email,
                'password'=> $_password,
                'author'=>$_authorisasi,
                'hak_akses'=>$hakakses
              );               
              $query= $this->M_pengguna->simpanUser($data);
              if ($query) {
                redirect('pengguna/users');
              }
              else{
                redirect('pengguna/users');
              }
          }
          else{
            //jikapassword tidak sama degan confirm password
            $this->session->set_flashdata('notification_password', '<div class="col-xs-5 alert alert-danger alert-dismissible pull-right">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><i class="icon fa fa-ban"></i> Password konfirmasi tidak cocok!</p>
                
                  </div>');
            redirect('pengguna/users');
          }
        }
    }
    public function deleteUser($id){
      $where = array('id' => $id);
      $this->M_pengguna->hapus_data('t_login',$where);
      redirect('pengguna/users');
    }

}


 ?>
