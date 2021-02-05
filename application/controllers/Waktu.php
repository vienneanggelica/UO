<?php

class Waktu extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Waktu_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Waktu';
        $data['waktu'] = $this->Waktu_model->getAllWaktu();
        if($this->input->post('keyword')) {
            $data['waktu'] = $this->Waktu_model->cariDataWaktu();
        }
        $data['judul'] = 'Form Tambah Data Waktu';

        $this->form_validation->set_rules('mulai', 'Mulai', 'required');
        $this->form_validation->set_rules('selesai', 'Selesai', 'required');
        $this->form_validation->set_rules('random_code', 'random_code', 'required');

        if($this->form_validation->run() == FALSE){
        $this->load->view('admin/header', $data);
        $this->load->view('waktu/index', $data);
        $this->load->view('admin/footer');
        } else {
            $this->Waktu_model->tambahDataWaktu();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('waktu');
        }
    }

}