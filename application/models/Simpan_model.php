<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Soal_model extends MY_Model
{
    var $table = "soal";
    public function __construct()
    {
        parent::__construct($this->table);
    }

    public function getAllSoal()
    {
        return $this->db->get('soal')->result_array();
    }

    public function simpanSoal()
    {
        $this->db->from('simpan_soal');
        $this->db->join('soal', 'simpan_soal.id_soal = soal.id_soal');
        $this->db->join('kelas', 'simpan_soal.id_kelas = kelas.id_kelas');
        $this->db->get_where('user', ['user_email' => $this->session->userdata('email')]);

        $data = [
            "user_email" => $this->input->post('user_email', true),
            "id_soal" => $this->input->post('id_soal', true),
            "id_kelas" => $this->input->post('id_kelas', true),
            "mulai" => $this->input->post('mulai', true),
            "selesai" => $this->input->post('selesai', true),
            "waktu" => $this->input->post('waktu', true),
        ];
        $this->db->insert('soal_soal', $data);
    }
}
