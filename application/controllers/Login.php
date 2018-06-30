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
			redirect(site_url("dashboard"));
		}
	}
	function aksi_login(){
		/*$tomo=$this->session->set_userdata('HAKAK_SES',$hakakses++);
				if (isset($tomo)) {
					$this->load->view('v_notfound');
					$this->load->view('dashboard/v_footer');
				}*/
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		/*$where = array(
			'username' => $username,			
			//'password' => md5($password) 
			'password' => $password
			); */ 
		$cek = $this->m_login->cek_login("t_login",$username,$password)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login",
				);
 
			$this->session->set_userdata($data_session);
			redirect(site_url("menu"));
 
		}else{				
			$this->session->set_flashdata('notification', 'Username dan Password tidak ditemukan');	
			//$this->session->set_userdata('HAKAK_SES',1);		
			//		redirect(site_url());
			//jika terdapat session bernama "HAKAK_SES"
			 if($this->session->has_userdata('HAKAK_SES'))
            {
                //jika user gagal masuk selama 3 kali atau lebih
                if($this->session->userdata('HAKAK_SES')>3 || $this->session->userdata('HAKAK_SES')==3){
                        //set nilai session "auth" ke 4
                        $this->session->set_userdata('HAKAK_SES',4);
                        //jalankan function blokir_user
                        $this->load->view('v_notfound');
						$this->load->view('dashboard/v_footer');
                }
                //jika tidak
                else{
                        //session "auth" ditambah 1
                        $_SESSION['HAKAK_SES']=$_SESSION['HAKAK_SES']+1;
                        //jalankan function login()
                        redirect(site_url());
                }
            }
            //jika tidak ada session "HAKAK_SES"
            else{
                    //daftarkan session "HAKAK_SES", dan beri nilai 1
                    $this->session->set_userdata('HAKAK_SES',1);
                    //jalankan function login()
                    redirect(site_url());
            }


			//$tomo=$this->session->set_userdata('HAKAK_SES',$hakakses);
			/*	if ($hakakses>=2) {
					$this->load->view('v_notfound');
					$this->load->view('dashboard/v_footer');
				}else{
					redirect(site_url());
				}*/
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(site_url('login'));
	}
}
