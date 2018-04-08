<?php
defined('BASEPATH') OR exit('Anda tidak boleh mengakses file ini secara langsung'); 
class M_dokumen extends CI_Model{
  var $tabel = 'dokumen';
  var $tabel_jenis= 'jenis_dokumen';
  var $tabel_author= 'author'; 
  //terletak di dashboard index
    public function listAll(){
        return $this->db->get($this->tabel);        
    } 
    function progress_bar($plus){
        $query = $this->db->query('SELECT COUNT(*) AS ma FROM dokumen WHERE standar='.$plus);
        return $query->result();
    } 
    function total_doka($id,$jenis_dokumen){
        $query = $this->db->query('SELECT COUNT(*) AS ma FROM dokumen INNER JOIN jenis_dokumen ON dokumen.jenis_dok=jenis_dokumen.jenis_dokumen WHERE standar='.$id.' and jenis_dok="'.$jenis_dokumen.'"');
        return $query->result();
    }
    function total_dok($id,$jenis_dokumen){
        $query = $this->db->query('SELECT COUNT(*) AS ma FROM dokumen WHERE standar='.$id.' and jenis_dok="'.$jenis_dokumen.'"');
        return $query->result();
    } 
    function listDetail($where){
        $this->load->helper('security');
        $clean_id=xss_clean($where);

        $hasil =$this->db->get_where($this->tabel,$clean_id);        
        return $hasil->result();
    }
    public function simpanDok($data){
        return $this->db->insert($this->tabel, $data);
    } 
    function list_jns_dok(){
        $query = $this->db->get($this->tabel_jenis);
        return $query->result();
    }
    function list_author_dok(){
        $query = $this->db->get($this->tabel_author);
        return $query->result();
    }  

}
?>
