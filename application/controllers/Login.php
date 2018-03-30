<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('login/m_login');
		
	}
	public function index()
	{
		$this->load->view('login/v_login');
		if($this->session->userdata('status') == "login"){
			redirect(base_url("dashboard"));
		}
	}
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			//'password' => md5($password) 
			'password' => $password
			);
		$cek = $this->m_login->cek_login("t_login",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login",
				);
 
			$this->session->set_userdata($data_session);
 			echo "string";
			redirect(base_url("dashboard"));
 
		}else{
			redirect(base_url());
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
