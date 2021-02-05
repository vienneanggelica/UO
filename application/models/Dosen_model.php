<?php

class Dosen_model extends CI_model
{
    public function getAllDosen()
    {
        $this->db->from('user');
        $this->db->where(['role_id' => 2]);
        $result = $this->db->get();
        return $result->result_array();
    }

    public function tambahDataDosen()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nip" => $this->input->post('nip', true),
            "jk" => $this->input->post('jk', true),
            "email" => $this->input->post('email', true),
            "alamat" => $this->input->post('alamat', true),
            "foto" => $this->input->post('foto', true)
        ];
        $this->db->insert('dosen', $data);
    }

    public function hapusDataDosen($nip)
    {
        //$this->db->where('nip', $nip); pakai ini atau tambahin ['nip' => $nip] seperti dibawah
        $this->db->delete('dosen', ['nip' => $nip]);
    }

    public function getDosenBynip($nip)
    {
        return $this->db->get_where('dosen', ['nip' => $nip])->row_array();
    }

    public function ubahDataDosen()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nip" => $this->input->post('nip', true),
            "jk" => $this->input->post('jk', true),
            "email" => $this->input->post('email', true),
            "alamat" => $this->input->post('alamat', true)

            // if (!empty($_FILES["foto"]["nama"])) {
            //     $this->image = $this->UploadImage();
            // } else {
            //     $this->image = $post["old_image"];
            // }

        ];
        $this->db->where('nip', $this->input->post('nip'));
        $this->db->update('dosen', $data);
    }

    public function cariDataDosen()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('nip', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('dosen')->result_array();
    }
}
