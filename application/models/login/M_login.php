<?php

class M_login extends CI_Model{	
	//var $tabel = sudah berada pada kontroller, $shere berada pada kontroler
	var $tabel_dashboard = 'kelengkapan_data';		
  //fungsi untuk melakukan login menggunakan username ataupun email
  function cek_login($table,$usn,$pass){
     $this->db->where("(email = '$usn' OR username = '$usn') AND password= '$pass'");
    //$this->db->where('password', $pass);
    $query = $this->db->get($table);
    return $query;
  }   
  //fungsi hak_ak dihunakan untuk menampilkan nama user pada view v_header
  function hak_ak($usan){          
    	$this->db->where("username='$usan' OR email='$usan'");
    	$hasil=$this->db->get('t_login');
    	return $hasil->result();    	
  }
	//fungsi listAll() untuk menampilkan tabel kelengkapan_data pada halaman dashboard
	function listBorang(){
        $query = $this->db->get($this->tabel_dashboard);
        return $query->result();
  }
  function haku_ak($usano){
        $this->db->where("username='$usano' OR email='$usano'");
      $hasil=$this->db->get('t_login');
      return $hasil->result();
   }


}

?>