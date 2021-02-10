<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Soal_model extends MY_Model
{
    var $table = "soal";
    public function __construct()
    {
        parent::__construct($this->table);
    }

    public function getAllSoal($where)
    {
        // return $this->db->get('soal')->result_array();|_
        $this->db->select('*');
        $this->db->from('soal');
        $this->db->where($where);
        return $this->db->get()->result_array();
    }

    public function getAllSoalperKelas($where)
    {
        $this->db->select('*, count(id_soal) as jumlah_soal');
        $this->db->from('soal_simpan');
        $this->db->join('kelas', 'soal_simpan.id_kelas = kelas.id');
        $this->db->join('soal', 'soal_simpan.id_soal = soal.id');
        $this->db->where($where);
        $this->db->group_by('soal_simpan.id_kelas');
        return $this->db->get()->result_array();
    }

    public function getMhs($where)
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->where($where);
        return $this->db->get()->row();
    }

    public function getAllJawabanperKelas($where)
    {
        $this->db->select('*, count(id_soal) as jumlah_soal');
        $this->db->from('soal_simpan');
        $this->db->join('kelas', 'soal_simpan.id_kelas = kelas.id');
        $this->db->join('soal', 'soal_simpan.id_soal = soal.id');
        $this->db->where($where);
        $this->db->group_by('soal_simpan.id_kelas');
        return $this->db->get()->result_array();
    }

    public function getSoalPerKelas($where)
    {
        $this->db->select('*');
        $this->db->from('soal_simpan');
        $this->db->join('kelas', 'soal_simpan.id_kelas = kelas.id');
        $this->db->join('soal', 'soal_simpan.id_soal = soal.id');
        $this->db->where($where);
        return $this->db->get()->result_array();
    }

    public function getAllSimpan_Soal($where)
    {
        $this->db->select('*');
        $this->db->from('soal');
        $this->db->join('kelas', 'soal.id_kelas = kelas.id');
        $this->db->where($where);
        return $this->db->get()->result_array();
    }

    public function getAllRandom($select, $where)
    {
        $this->db->select($select);
        $this->db->where($where);
        $this->db->order_by('rand()');
        $this->db->from($this->table);
        return $this->db->get()->result_array();
    }

    public function tambahSoal($id)
    {
        $data = [
            "soal" => $this->input->post('soal', true),
            "kunci" => $this->input->post('kunci', true),
            "user_email" => $this->session->userdata('email'),
            "id_kelas" => $id
        ];
        $this->db->insert('soal', $data);
    }

    public function hapusSoal($id)
    {
        $this->db->delete('soal', ['id' => $id]);
    }

    public function getSoalById($id)
    {
        return $this->db->get_where('soal', ['id' => $id])->row_array();
    }

    public function ubahSoal()
    {
        $data = [
            "soal" => $this->input->post('soal', true),
            "kunci" => $this->input->post('kunci', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('soal', $data);
    }

    public function cariSoal()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('soal', $keyword);
        $this->db->or_like('kunci', $keyword);
        return $this->db->get('soal')->result_array();
    }


    public function getKelas()
    {
        $this->db->from('kelas');
        $result = $this->db->get();
        return $result->result_array();
    }

    public function simpanSoal($id)
    {

        $soal_id = $this->input->post('id_soal');

        foreach ($soal_id as $key) {
            $data = [
                "user_email" => $this->session->userdata('email'),
                "id_soal" => $key,
                "id_kelas" => $id,
                "mulai" => $this->input->post('mulai', true),
                "selesai" => $this->input->post('selesai', true),
                "waktu" => $this->input->post('waktu', true),
            ];
            $this->db->insert('soal_simpan', $data);
        }
    }
}
