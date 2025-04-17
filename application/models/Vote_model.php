<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vote_model extends CI_Model {

    // Menyimpan hasil voting
    public function record_vote($nim, $kandidat_id) {
        $data = [
            'nim' => $nim,
            'kandidat_id' => $kandidat_id,
            'tanggal_vote' => date('Y-m-d H:i:s')
        ];
        return $this->db->insert('vote', $data);
    }

    // Mendapatkan statistik suara untuk setiap kandidat
    public function get_vote_statistics() {
        $this->db->select('kandidat.id, kandidat.nama, COUNT(vote.id) AS total_votes');
        $this->db->from('kandidat');
        $this->db->join('vote', 'vote.kandidat_id = kandidat.id', 'left');
        $this->db->group_by('kandidat.id');
        $query = $this->db->get();
        return $query->result();
    }

    // Menghitung jumlah suara untuk kandidat tertentu
    public function count_votes($kandidat_id) {
        $this->db->where('kandidat_id', $kandidat_id);
        $query = $this->db->get('vote');
        return $query->num_rows();
    }

    // Mendapatkan semua kandidat yang ada
    public function get_all_kandidats() {
        $this->db->select('id, nama');
        $query = $this->db->get('kandidat');
        return $query->result();
    }
}
