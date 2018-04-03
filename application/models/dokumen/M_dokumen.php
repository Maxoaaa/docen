<?php
defined('BASEPATH') OR exit('Anda tidak boleh mengakses file ini secara langsung'); 
class M_dokumen extends CI_Model{
  var $tabel = 'dokumen';
  //user itu nama tabel
    function listAll(){
        $query = $this->db->get($this->tabel);
        return $query->result();
    }
    function listDetail($id){
        $this->load->helper('security');
        $clean_id=xss_clean($id);

        $this->db->where('standar',$clean_id);
        $hasil = $this->db->get($this->tabel);
        return $hasil->result();
    }
    public function simpanDok($data){
        return $this->db->insert($this->tabel, $data);
    }

}
?>
