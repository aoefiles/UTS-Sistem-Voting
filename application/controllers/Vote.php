<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vote extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Vote_model');
        $this->load->model('Mahasiswa_model');
    }

    // Halaman form voting
    public function form_vote() {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        // Cek apakah sudah memilih
        $nim = $this->session->userdata('nim');
        if ($this->Mahasiswa_model->is_already_voted($nim)) {
            $this->session->set_flashdata('message', 'Anda sudah memilih');
            redirect('dashboard');
        }

        $data['kandidats'] = $this->Vote_model->get_all_kandidats();
        $this->load->view('vote/form_vote', $data);
    }

    // Proses pemilihan
    public function proses() {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        $nim = $this->session->userdata('nim');
        $kandidat_id = $this->input->post('kandidat_id');

        if ($this->Mahasiswa_model->is_already_voted($nim)) {
            $this->session->set_flashdata('message', 'Anda sudah memilih');
            redirect('dashboard');
        }

        $this->Vote_model->record_vote($nim, $kandidat_id);
        $this->Mahasiswa_model->mark_as_voted($nim);

        $this->session->set_flashdata('message', 'Vote berhasil!');
        redirect('dashboard');
    }
}

?>