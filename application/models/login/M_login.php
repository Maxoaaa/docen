<?php
 
class M_login extends CI_Model{	
	//var $tabel = sudah berada pada kontroller, $shere berada pada kontroler
	var $tabel_dashboard = 'kelengkapan_data';	
	function cek_login($table,$where){					
		return $this->db->get_where($table,$where);
	} 
  	function hak_ak($usan){    
    	$this->db->where('username',$usan);
    	$hasil=$this->db->get('t_login');
    	return $hasil->result();    	
  	}
	//fungsi listAll() untuk menampilkan tabel pada halaman dashboard
	function listBorang(){
        $query = $this->db->get($this->tabel_dashboard);
        return $query->result();
    }	

}

?>