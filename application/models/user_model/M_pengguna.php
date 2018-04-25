<?php 
defined('BASEPATH') OR exit('Anda tidak boleh mengakses file ini secara langsung'); 
class M_pengguna extends CI_Model{
  var $tabel = 't_login';
  var $tabelauthor = 'hak_akses';
  //'user' itu nama tabel
    function listAll(){
        $query = $this->db->get($this->tabel);
        return $query->result();
    }
    function listAuthor(){
        $query = $this->db->get($this->tabelauthor);
        return $query->result();
    }
    function listDetail($id){
        $this->load->helper('security');
        $clean_id=xss_clean($id);

        $this->db->where('id',$clean_id);
        $hasil = $this->db->get($this->tabel);
        return $hasil->result();
    }
    public function simpanUser($data){
        return $this->db->insert($this->tabel, $data);
    }
    function simpanUpdateUser($data,$id){
          $this->db->where('id',$id);
          $hasil = $this->db->update($this->tabel,$data);
          return $hasil; 
    }
    function hapus_data($table,$where){
      $this->db->where($where);
      $this->db->delete($table);
    }



}
?>
