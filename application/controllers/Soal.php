<?php
class Soal extends CI_Controller
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
        $data['title'] = 'Form Input Soal';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['kelas'] = $this->Soal_model->getKelas();
        $data['kelas'] = $this->Kelas_model->getAllKelas();
        if ($this->input->post('keyword')) {
            $data['kelas'] = $this->Kelas_model->cariDataKelas();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('soal/index', $data);
        $this->load->view('templates/footer');
    }

    public function kelas_soal($id)
    {
        $data['title'] = 'Form Input Soal';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelas'] = $this->Soal_model->getKelas();
        $data['id'] = $id;
        $data['soal'] = $this->Soal_model->getAllSimpan_Soal(['soal.user_email' => $this->session->userdata('email'), 'id_kelas' => $id]);
        if ($this->input->post('keyword')) {
            $data['soal'] = $this->Soal_model->cariSoal();
        }

        $this->form_validation->set_rules('mulai', 'Mulai', 'required');
        $this->form_validation->set_rules('selesai', 'Selesai', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('soal/kelas_soal', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Soal_model->simpanSoal($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Soal berhasil disimpan!</div>');
            redirect('soal/index');
        }
    }

    public function tambah($id)
    {
        $data['title'] = 'Form Input Soal';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('soal', 'Soal', 'required');
        $this->form_validation->set_rules('kunci', 'Kunci', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('soal/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Soal_model->tambahSoal($id);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('soal/kelas_soal/' . $id);
        }
    }

    public function hapus($id)
    {
        $this->Soal_model->hapusSoal($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('soal');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Soal';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['soal'] = $this->Soal_model->getSoalById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('soal/kelas_soal/', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['title'] = 'Form Ubah Soal';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['soal'] = $this->Soal_model->getSoalById($id);

        $this->form_validation->set_rules('soal', 'Soal', 'required');
        $this->form_validation->set_rules('kunci', 'Kunci', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('soal/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Soal_model->ubahSoal();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('soal');
        }
    }

    public function soal()
    {
        $data['title'] = 'Soal';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['soal'] = $this->db->get('soal')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/soal', $data);
        $this->load->view('templates/footer');

        $this->form_validation->set_rules('soal', 'Soal', 'required');
        $this->form_validation->set_rules('kunci', 'Kunci', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/soal', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'soal' => $this->input->post('soal'),
                'kunci' => $this->input->post('kunci'),
            ];
            $this->db->insert('soal', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Soal berhasil ditambahkan!</div>');
            redirect('user/soal');
        }
    }

    public function simpanSoal()
    {
        $data['title'] = 'Form Simpan Soal';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['soal'] = $this->Soal_model->getAllSoal(['user_email' => $this->session->userdata('email')]);

        // $this->form_validation->set_rules('user_email', 'Email', 'required');
        // $this->form_validation->set_rules('id_soal', 'Soal', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('mulai', 'Mulai', 'required');
        $this->form_validation->set_rules('selesai', 'Selesai', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('soal/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Soal_model->simpanSoal();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Soal berhasil disimpan!</div>');
            redirect('soal/index');
        }
    }

    public function ujian()
    {
        $data['title'] = 'Form Simpan Soal';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['soal'] = $this->Soal_model->getAllSoalperKelas(['soal_simpan.user_email' => $this->session->userdata('email')]);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('soal/ujian', $data);
        $this->load->view('templates/footer');
    }
}
