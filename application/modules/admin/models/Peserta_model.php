<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta_model extends CI_Model{

  public function listing(){
    $this->db->select('tbl_peserta.*,
    tbl_konfirmasi_pembayaran.status_pembayaran')
            ->from('tbl_peserta')
            ->join('tbl_konfirmasi_pembayaran', 'tbl_konfirmasi_pembayaran.id_peserta = tbl_peserta.id_peserta', 'LEFT');
    return $this->db->get()->result();

  }

  public function detail($id_peserta){
    $this->db->select('tbl_peserta.*,
                       tbl_konfirmasi_pembayaran.id_pembayaran,
                       tbl_konfirmasi_pembayaran.status_pembayaran,
                       tbl_konfirmasi_pembayaran.jumlah_bayar,
                       tbl_konfirmasi_pembayaran.dari_bank,
                       tbl_konfirmasi_pembayaran.destinasi_bank,
                       tbl_konfirmasi_pembayaran.bukti_pembayaran')
             ->from('tbl_peserta')
             ->join('tbl_konfirmasi_pembayaran', 'tbl_konfirmasi_pembayaran.id_peserta = tbl_peserta.id_peserta', 'LEFT')
             ->where('tbl_peserta.id_peserta', $id_peserta);
    return $this->db->get()->row();
  }

}
