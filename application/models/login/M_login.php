<?php
 
class M_login extends CI_Model{	
	//var $tabel = sudah berada pada kontroller, $shere berada pada kontroler
	var $tabel_dashboard = 'kelengkapan_data';		
  function cek_login($table,$usn,$pass){
    //$query = $this->db->query('SELECT * FROM t_login WHERE (username="'.$usn.'" OR email="'.$usn.'") AND password="'.$pass.'"'); 
    //return $this->db->get($table);

     $this->db->where("email = '$usn' OR username = '$usn'");
    $this->db->where('password', $pass);
    $query = $this->db->get($table);
    return $query;
  }   
  //fungsi hak_ak dihunakan untuk menampilkan nama user pada view v_header
  function hak_ak($usan){    
    	$this->db->where('username',$usan);
    	$hasil=$this->db->get('t_login');
    	return $hasil->result();    	
  	}
	//fungsi listAll() untuk menampilkan tabel kelengkapan_data pada halaman dashboard
	function listBorang(){
        $query = $this->db->get($this->tabel_dashboard);
        return $query->result();
    }

}

?>