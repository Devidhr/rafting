<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

    public function select_all_anggota() {
		$sql = "SELECT * FROM jogjarafting";

		$data = $this->db->query($sql);

		return $data->result();
    }
    
    public function total_rows_galeri() {
		$data = $this->db->get('galeri');

		return $data->num_rows();
    }
    
    public function total_rows_paket() {
		$data = $this->db->get('paket');

		return $data->num_rows();
    }
    
    public function total_rows_kontak() {
		$data = $this->db->get('kontak');

		return $data->num_rows();
    }
     public function total_rows_user() {
		$data = $this->db->get('tbl_users');

		return $data->num_rows();
    }
}