<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kandidat extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Kandidat_model');
    }

    // Menampilkan daftar kandidat
    public function index() {
        $data['kandidats'] = $this->Kandidat_model->get_all_kandidats();
        $this->load->view('kandidat/index', $data);
    }

    // Menambah kandidat baru
    public function tambah() {
        if ($this->input->post()) {
            $data = [
                'nama' => $this->input->post('nama'),
                'visi' => $this->input->post('visi'),
                'misi' => $this->input->post('misi')
            ];
            $this->Kandidat_model->insert_kandidat($data);
            redirect('kandidat');
        }
        $this->load->view('kandidat/tambah');
    }

    // Mengedit kandidat
    public function edit($id) {
        $data['kandidat'] = $this->Kandidat_model->get_kandidat_by_id($id);

        if ($this->input->post()) {
            $data = [
                'nama' => $this->input->post('nama'),
                'visi' => $this->input->post('visi'),
                'misi' => $this->input->post('misi')
            ];
            $this->Kandidat_model->update_kandidat($id, $data);
            redirect('kandidat');
        }

        $this->load->view('kandidat/edit', $data);
    }

    // Menghapus kandidat
    public function hapus($id) {
        $this->Kandidat_model->delete_kandidat($id);
        redirect('kandidat');
    }
}
