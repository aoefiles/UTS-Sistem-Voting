<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Vote_model');
        $this->load->model('Kandidat_model');
    }

    // Menampilkan statistik pemilihan dalam grafik
    public function index() {
        $data['statistik'] = $this->Vote_model->get_vote_statistics();

        // Menghitung total suara
        $kandidats = $this->Kandidat_model->get_all_kandidats();
        $vote_counts = [];
        foreach ($kandidats as $kandidat) {
            $vote_counts[$kandidat->id] = $this->Vote_model->count_votes($kandidat->id);
        }

        // Menyiapkan data untuk grafik
        $data['kandidats'] = $kandidats;
        $data['vote_counts'] = $vote_counts;

        $this->load->view('dashboard/index', $data);
    }
}
