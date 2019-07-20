<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Beranda_model extends CI_Model
{

    function listingAbstrak($id_reviewer, $is_read)
    {
        $this->db->select('tbl_abstrak.*,
                           tbl_subtema.subtema,
                           tbl_peserta.nama_no_title,
                           tbl_peserta.institusi,
                           tbl_subtema.id_subtema,
                           tbl_subtema.id_reviewer')
            ->from('tbl_abstrak')
            ->join('tbl_peserta', 'tbl_peserta.id_peserta = tbl_abstrak.id_peserta', 'LEFT')
            ->join('tbl_subtema', 'tbl_subtema.id_subtema = tbl_abstrak.id_subtema', 'LEFT')
            ->where('tbl_subtema.id_reviewer', $id_reviewer)
            ->where('tbl_abstrak.is_read', $is_read);
        return $this->db->get()->result();
    }

    function detailAbstrak($where)
    {
        $this->db->select('tbl_abstrak.*,
                        tbl_peserta.id_peserta,
                        tbl_peserta.nama_no_title,
                        tbl_peserta.institusi,
                        tbl_komentar_abstrak.komentar,
                        tbl_subtema.subtema')
            ->from('tbl_abstrak')
            ->join('tbl_peserta', 'tbl_peserta.id_peserta = tbl_abstrak.id_peserta', 'LEFT')
            ->join('tbl_subtema', 'tbl_subtema.id_subtema = tbl_abstrak.id_subtema', 'LEFT')
            ->join('tbl_komentar_abstrak', 'tbl_komentar_abstrak.id_komentar_abstrak = tbl_abstrak.id_komentar_abstrak', 'LEFT')
            ->where('tbl_abstrak.id_abstrak', $where);
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

    function listingPaper($id_reviewer, $is_read)
    {
        $this->db->select('tbl_paper.*,
                           tbl_abstrak.judul,
                           tbl_subtema.subtema,
                           tbl_peserta.nama_no_title,
                           tbl_peserta.institusi,
                           tbl_subtema.id_subtema,
                           tbl_subtema.id_reviewer')
            ->from('tbl_paper')
            ->join('tbl_peserta', 'tbl_peserta.id_peserta = tbl_paper.id_peserta', 'LEFT')
            ->join('tbl_subtema', 'tbl_subtema.id_subtema = tbl_paper.id_subtema', 'LEFT')
            ->join('tbl_abstrak', 'tbl_abstrak.id_abstrak = tbl_paper.id_abstrak', 'LEFT')
            ->where('tbl_subtema.id_reviewer', $id_reviewer)
            ->where('tbl_paper.is_read', $is_read);
        return $this->db->get()->result();
    }

    function detailPaper($where)
    {
        $this->db->select('tbl_paper.*,
                            tbl_peserta.id_peserta,
                            tbl_peserta.nama_no_title,
                            tbl_peserta.institusi,
                            tbl_komentar_paper.komentar,
                            tbl_subtema.subtema,
                            tbl_abstrak.judul')
            ->from('tbl_paper')
            ->join('tbl_peserta', 'tbl_peserta.id_peserta = tbl_paper.id_peserta', 'LEFT')
            ->join('tbl_subtema', 'tbl_subtema.id_subtema = tbl_paper.id_subtema', 'LEFT')
            ->join('tbl_abstrak', 'tbl_abstrak.id_abstrak = tbl_paper.id_abstrak', 'LEFT')
            ->join('tbl_komentar_paper', 'tbl_komentar_paper.id_komentar_paper = tbl_paper.id_komentar_paper', 'LEFT')
            ->where('tbl_paper.id_paper', $where);
        return $this->db->get()->row();
    }

    function komentarPaper($id_paper)
    {
        $this->db->select('tbl_komentar_paper.*,
                            tbl_paper.id_paper')
            ->from('tbl_komentar_paper')
            ->join('tbl_paper', 'tbl_paper.id_paper = tbl_komentar_paper.id_paper', 'LEFT')
            ->where('tbl_komentar_paper.id_paper', $id_paper);
        return $this->db->get()->result();
    }
}
