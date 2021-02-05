<?php
class Ujian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Soal_model');
        $this->load->model('Kelas_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Form Simpan Soal';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['soal'] = $this->Soal_model->getAllSoalperKelas(['soal_simpan.user_email' => $this->session->userdata('email')]);
        $data['jawaban'] = $this->Soal_model->getAllJawabanperKelas(['soal_simpan.user_email' => $this->session->userdata('email')]);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('ujian/index', $data);
        $this->load->view('templates/footer');
    }
}
