<?php

class Waktu_model extends CI_model {
    public function getAllWaktu()
    {
        return $this->db->get('waktu')->result_array();
    }

    public function tambahDataWaktu() {
        $data = [
            "mulai" => $this->input->post('mulai', true),
            "selesai" => $this->input->post('selesai', true),
            "random_code" => $this->input->post('random_code', true),
        ];
        $this->db->insert('waktu', $data);
    }

    public function getWaktuById($id)
    {
        return $this->db->get_where('waktu', ['id' => $id])->row_array();
    }

    public function cariDataWaktu()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('mulai', $keyword);
        $this->db->or_like('selesai', $keyword);
        return $this->db->get('waktu')->result_array();
    }

}