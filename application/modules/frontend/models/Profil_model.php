<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Profil_model extends CI_Model
{

        function listingUserAbstrak($field, $where)
        {
                $this->db->select('tbl_abstrak.*,
                                tbl_peserta.id_peserta,
                                tbl_peserta.nama_no_title,
                                tbl_peserta.institusi,
                                tbl_subtema.subtema')
                        ->from('tbl_abstrak')
                        ->join('tbl_peserta', 'tbl_peserta.id_peserta = tbl_abstrak.id_peserta', 'LEFT')
                        ->join('tbl_subtema', 'tbl_subtema.id_subtema = tbl_abstrak.id_subtema', 'LEFT')
                        ->where($field, $where);
                return $this->db->get()->row();
        }

        function komentarAbstrak($id_abstrak)
        {
                $this->db->select('tbl_komentar_abstrak.*,
                                  tbl_abstrak.id_abstrak')
                        ->from('tbl_komentar_abstrak')
                        ->join('tbl_abstrak', 'tbl_abstrak.id_abstrak = tbl_komentar_abstrak.id_abstrak', 'LEFT')
                        ->where('tbl_komentar_abstrak.id_abstrak', $id_abstrak);
                return $this->db->get()->result();
        }

        function listingUserPaper($field, $where)
        {
                $this->db->select('tbl_paper.*,
                                tbl_peserta.id_peserta,
                                tbl_peserta.nama_no_title,
                                tbl_abstrak.judul,
                                tbl_subtema.subtema')
                        ->from('tbl_paper')
                        ->join('tbl_peserta', 'tbl_peserta.id_peserta = tbl_paper.id_peserta', 'LEFT')
                        ->join('tbl_subtema', 'tbl_subtema.id_subtema = tbl_paper.id_subtema', 'LEFT')
                        ->join('tbl_abstrak', 'tbl_abstrak.id_abstrak = tbl_paper.id_abstrak', 'LEFT')
                        ->where($field, $where);
                return $this->db->get()->row();
        }


        function listingUserPayment($table, $field, $where)
        {
                $this->db->select('tbl_konfirmasi_pembayaran.*,
                                    tbl_peserta.nama_no_title')
                        ->from('tbl_konfirmasi_pembayaran')
                        ->join('tbl_peserta', 'tbl_peserta.id_peserta = tbl_konfirmasi_pembayaran.id_peserta', 'LEFT')
                        ->where($field, $where);
                return $this->db->get()->row();
        }
}

function paperUpload()
{ }
