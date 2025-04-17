<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kandidat_model extends CI_Model {

    // Mendapatkan semua data kandidat
    public function get_all_kandidats() {
        $query = $this->db->get('kandidat');
        return $query->result();
    }

    // Mendapatkan data kandidat berdasarkan ID
    public function get_kandidat_by_id($id) {
        $query = $this->db->get_where('kandidat', ['id' => $id]);
        return $query->row();
    }

    // Menambahkan kandidat baru
    public function insert_kandidat($data) {
        return $this->db->insert('kandidat', $data);
    }

    // Mengupdate data kandidat
    public function update_kandidat($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('kandidat', $data);
    }

    // Menghapus kandidat
    public function delete_kandidat($id) {
        $this->db->where('id', $id);
        return $this->db->delete('kandidat');
    }
}
