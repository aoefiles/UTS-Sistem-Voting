<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }

    // Halaman login
    public function login() {
        // Cek jika sudah login
        if ($this->session->userdata('logged_in')) {
            redirect('vote/form_vote');
        }

        // Validasi form login
        if ($this->input->post()) {
            $nim = $this->input->post('nim');
            $password = $this->input->post('password');
            $mahasiswa = $this->Mahasiswa_model->login($nim, $password);

            if ($mahasiswa) {
                $this->session->set_userdata('logged_in', TRUE);
                $this->session->set_userdata('nim', $nim);
                redirect('vote/form_vote');
            } else {
                $this->session->set_flashdata('error', 'NIM atau password salah');
            }
        }

        $this->load->view('auth/login');
    }

    // Logout mahasiswa
    public function logout() {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
