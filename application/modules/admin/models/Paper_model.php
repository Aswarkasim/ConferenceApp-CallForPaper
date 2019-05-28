<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Paper_model extends CI_Model {

    function listing(){
        $this->db->select('tbl_paper.*,
                            tbl_peserta.id_peserta,
                            tbl_peserta.nama_with_title,
                            tbl_peserta.nama_no_title,
                            tbl_peserta.institusi,
                            tbl_peserta.partisipan,
                            tbl_subtema.subtema')
                ->from('tbl_paper')
                ->join('tbl_peserta', 'tbl_peserta.id_peserta = tbl_paper.id_peserta','LEFT')
                ->join('tbl_subtema', 'tbl_subtema.id_subtema = tbl_paper.id_subtema','LEFT');
        return $this->db->get()->result();
    }

    function listingOneAll($table, $field, $where){
        $this->db->select('tbl_paper.*,
                            tbl_peserta.id_peserta,
                            tbl_peserta.nama_no_title,
                            tbl_peserta.nama_with_title,
                            tbl_peserta.institusi,
                            tbl_peserta.partisipan,
                            tbl_subtema.subtema')
                    ->from('tbl_paper')
                    ->join('tbl_peserta', 'tbl_peserta.id_peserta = tbl_paper.id_peserta','LEFT')
                    ->join('tbl_subtema', 'tbl_subtema.id_subtema = tbl_paper.id_subtema','LEFT')
                    ->where($field, $where);
        return $this->db->get()->result();
    }

    function listingOne($table, $field, $where){
        $this->db->select('tbl_paper.*,
                            tbl_peserta.id_peserta,
                            tbl_peserta.nama_no_title,
                            tbl_peserta.nama_with_title,
                            tbl_peserta.institusi,
                            tbl_peserta.partisipan,
                            tbl_subtema.subtema')
                    ->from('tbl_paper')
                    ->join('tbl_peserta', 'tbl_peserta.id_peserta = tbl_paper.id_peserta','LEFT')
                    ->join('tbl_subtema', 'tbl_subtema.id_subtema = tbl_paper.id_subtema','LEFT')
                    ->where($field, $where);
        return $this->db->get()->row();
    }

}