<?php

class Dosen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dosen_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Dosen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dosen'] = $this->Dosen_model->getAllDosen(2);

        if ($this->input->post('keyword')) {
            $data['dosen'] = $this->Dosen_model->cariDataDosen();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dosen/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Dosen';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'nip', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/header', $data);
            $this->load->view('dosen/tambah', $data);
            $this->load->view('admin/footer', $data);
        } else {
            $this->Dosen_model->tambahDataDosen();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('dosen');
        }
    }

    public function hapus($nip)
    {
        $this->Dosen_model->hapusDataDosen($nip);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('dosen');
    }

    public function detail($nip)
    {
        $data['judul'] = 'Detail Data Dosen';
        $data['dosen'] = $this->Dosen_model->getDosenBynip($nip);
        $this->load->view('admin/header', $data);
        $this->load->view('dosen/detail', $data);
        $this->load->view('admin/footer', $data);
    }

    public function ubah($nip)
    {
        $data['judul'] = 'Form Ubah Data Dosen';
        $data['dosen'] = $this->Dosen_model->getDosenBynip($nip);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'nip', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('jk', 'jk', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/header', $data);
            $this->load->view('dosen/detail', $data);
            $this->load->view('admin/footer', $data);
        } else {
            $this->Dosen_model->ubahDataDosen();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('dosen');
        }
    }
}
