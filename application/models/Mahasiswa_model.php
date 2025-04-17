<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

    // Melakukan login mahasiswa
    public function login($nim, $password) {
        $this->db->where('nim', $nim);
        $this->db->where('password', md5($password)); // Asumsikan password dienkripsi dengan MD5
        $query = $this->db->get('mahasiswa');
        return $query->row(); // Mengembalikan data mahasiswa yang cocok
    }

    // Mengecek apakah mahasiswa sudah memilih
    public function is_already_voted($nim) {
        $this->db->where('nim', $nim);
        $query = $this->db->get('vote');
        return $query->num_rows() > 0;  // Jika sudah ada vote, berarti sudah memilih
    }

    // Menandai mahasiswa sudah memilih
    public function mark_as_voted($nim) {
        $data = [
            'nim' => $nim,
            'tanggal_vote' => date('Y-m-d H:i:s')
        ];
        return $this->db->insert('vote', $data);
    }
}
