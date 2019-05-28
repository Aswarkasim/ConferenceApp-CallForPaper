<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model{

  public function listing($table, $order=null){
    $query = $this->db->select('*')
                      ->from($table)
                      ->get();
    return $query->result();
  }

  public function listingOne($table, $field, $where){
    $query = $this->db->select('*')
                      ->from($table)
                      ->where($field, $where)
                      ->get();
    return $query->row();
  }



  function getId($table, $where){
    return $this->db->get_where($where, $table);
}

  public function listingOneAll($table, $field, $where){
      $query = $this->db->select('*')
                        ->from($table)
                        ->where($field, $where)
                        ->get();
      return $query->result();
  }

  public function add($table, $data){
    $this->db->insert($table, $data);
  }

  public function edit($table, $field, $where,$data){
    $this->db->where($field, $where);
    $this->db->update($table, $data);
  }

  public function delete($table, $field, $where){
    $this->db->where($field, $where);
    $this->db->delete($table);
  }

  function listingSubtema(){
    $this->db->select('tbl_subtema.*,
                        tbl_reviewer.nama_reviewer')
                ->from('tbl_subtema')
                ->join('tbl_reviewer', 'tbl_reviewer.id_reviewer = tbl_subtema.id_reviewer','LEFT');
    return $this->db->get()->result();
}

}
