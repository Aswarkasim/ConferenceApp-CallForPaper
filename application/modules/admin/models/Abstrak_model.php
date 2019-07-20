<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Abstrak_model extends CI_Model
{

    function listing()
    {
        $this->db->select('tbl_abstrak.*,
                            tbl_peserta.id_peserta,
                            tbl_peserta.nama_no_title,
                            tbl_peserta.institusi,
                            tbl_subtema.subtema')
            ->from('tbl_abstrak')
            ->join('tbl_peserta', 'tbl_peserta.id_peserta = tbl_abstrak.id_peserta', 'LEFT')
            ->join('tbl_subtema', 'tbl_subtema.id_subtema = tbl_abstrak.id_subtema', 'LEFT');
        return $this->db->get()->result();
    }

    function listingOneAll($table, $field, $where)
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
        return $this->db->get()->result();
    }

    function listingOne($table, $field, $where)
    {
        $this->db->select('tbl_abstrak.*,
                            tbl_peserta.id_peserta,
                            tbl_peserta.nama_no_title,
                            tbl_peserta.institusi,
                            tbl_peserta.institusi,
                            tbl_komentar_abstrak.komentar,
                            tbl_subtema.subtema')
            ->from('tbl_abstrak')
            ->join('tbl_peserta', 'tbl_peserta.id_peserta = tbl_abstrak.id_peserta', 'LEFT')
            ->join('tbl_subtema', 'tbl_subtema.id_subtema = tbl_abstrak.id_subtema', 'LEFT')
            ->join('tbl_komentar_abstrak', 'tbl_komentar_abstrak.id_komentar_abstrak = tbl_abstrak.id_komentar_abstrak', 'LEFT')
            ->where($field, $where);
        return $this->db->get()->row();
    }
}
