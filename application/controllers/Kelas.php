<?php
class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelas_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Form Input Kelas';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelas'] = $this->Kelas_model->getAllKelas();
        if ($this->input->post('keyword')) {
            $data['kelas'] = $this->Kelas_model->cariDataKelas();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kelas/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Input Kelas';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('kelas', 'Kelas', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kelas/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kelas_model->tambahDataKelas();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('kelas');
        }
    }

    public function hapus($id)
    {
        $this->Kelas_model->hapusDataKelas($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('kelas');
    }

    // public function detail($id)
    // {
    //     $data['title'] = 'Detail Kelas';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $data['soal'] = $this->Soal_model->getSoalById($id);
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('soal/detail', $data);
    //     $this->load->view('templates/footer');
    // }

    public function ubah($id)
    {
        $data['title'] = 'Form Ubah Kelas';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelas'] = $this->Kelas_model->getKelasById($id);

        $this->form_validation->set_rules('kelas', 'Kelas', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kelas/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kelas_model->ubahDataKelas();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('kelas');
        }
    }
}
