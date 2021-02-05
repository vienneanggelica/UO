<?php

class Kelas_model extends CI_model
{
    public function getAllKelas()
    {
        return $this->db->get('kelas')->result_array();
    }

    public function tambahDataKelas()
    {
        $data = [
            "kelas" => $this->input->post('kelas', true)
        ];
        $this->db->insert('kelas', $data);
    }

    public function hapusDataKelas($id)
    {
        //$this->db->where('no_bp', $no_bp); pakai ini atau tambahin ['no_bp' => $no_bp] seperti dibawah
        $this->db->delete('kelas', ['id' => $id]);
    }

    public function getKelasById($id)
    {
        return $this->db->get_where('kelas', ['id' => $id])->row_array();
    }

    public function ubahDataKelas()
    {
        $data = [
            "kelas" => $this->input->post('kelas', true)

        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kelas', $data);
    }

    public function cariDataKelas()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('kelas', $keyword);
        return $this->db->get('kelas')->result_array();
    }
}
