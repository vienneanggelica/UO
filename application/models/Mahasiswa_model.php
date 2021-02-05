<?php

class Mahasiswa_model extends CI_model
{
    public function getAllMahasiswa($role_id)
    {
        // return $this->db->get_where('user', ['role_id' => $role_id])->row_array();
        $this->db->from('user');
        $this->db->where(['role_id' => 3]);
        $result = $this->db->get();
        return $result->result_array();
    }

    public function getDataMahasiswaRow($email)
    {
        return $this->db->get_where('mahasiswa', ['email' => $email])->row_array();
    }

    public function insertDataMahasiswa($data)
    {
        $this->db->insert('mahasiswa', $data);
    }
    public function tambahDataMahasiswa()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "ni" => $this->input->post('ni', true),
            "jk" => $this->input->post('jk', true),
            "prodi" => $this->input->post('prodi', true),
            "kelas" => $this->input->post('kelas', true),
            "email" => $this->input->post('email', true),
            "alamat" => $this->input->post('alamat', true),
            "foto" => $this->input->post('foto', true)
        ];
        $this->db->insert('mahasiswa', $data);
    }

    public function hapusDataMahasiswa($ni)
    {
        //$this->db->where('ni', $ni); pakai ini atau tambahin ['ni' => $ni] seperti dibawah
        $this->db->delete('mahasiswa', ['ni' => $ni]);
    }

    public function getMahasiswaByni($ni)
    {
        return $this->db->get_where('mahasiswa', ['ni' => $ni])->row_array();
    }

    public function ubahDataMahasiswa()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "ni" => $this->input->post('ni', true),
            "jk" => $this->input->post('jk', true),
            "prodi" => $this->input->post('prodi', true),
            "kelas" => $this->input->post('kelas', true),
            "email" => $this->input->post('email', true),
            "alamat" => $this->input->post('alamat', true)

        ];
        $this->db->where('ni', $this->input->post('ni'));
        $this->db->update('mahasiswa', $data);
    }

    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('name', $keyword);
        $this->db->or_like('prodi', $keyword);
        $this->db->or_like('ni', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }

    public function getKelas()
    {
        $this->db->from('kelas');
        $result = $this->db->get();
        return $result->result_array();
    }
}
