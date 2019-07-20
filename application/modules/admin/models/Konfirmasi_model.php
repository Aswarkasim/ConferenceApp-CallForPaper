<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Konfirmasi_model extends CI_Model
{

    function listingKonf()
    {
        $this->db->select('tbl_konfirmasi_pembayaran.*,
                            tbl_peserta.nama_no_title,
                            tbl_peserta.institusi')
            ->from('tbl_konfirmasi_pembayaran');
        $this->db->join('tbl_peserta', 'tbl_peserta.id_peserta = tbl_konfirmasi_pembayaran.id_peserta', 'LEFT');
        return $this->db->get()->result();
    }

    function listingKonfOne($id_peserta)
    {
        $this->db->select('tbl_konfirmasi_pembayaran.*,
                            tbl_peserta.nama_no_title,
                            tbl_peserta.institusi')
            ->from('tbl_konfirmasi_pembayaran');
        $this->db->join('tbl_peserta', 'tbl_peserta.id_peserta = tbl_konfirmasi_pembayaran.id_peserta', 'LEFT');
        $this->db->where('tbl_peserta.id_peserta', $id_peserta);
        return $this->db->get()->row();
    }
}
