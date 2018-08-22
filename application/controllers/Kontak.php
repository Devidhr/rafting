<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	function __construct(){
		parent:: __construct();
	$this->load->model('M_kontak');
	}

	public function index()
	{
		$this->template->load('v_template','kontak');
	}

	 public function add_action() 
    {
            $data = array(
        'nama_pengirim' => $this->input->post('nama_pengirim'),
        'email_pengirim' => $this->input->post('email_pengirim'),
        'judul_pesan' => $this->input->post('judul_pesan'),
        'isi_pesan' => $this->input->post('isi_pesan'),
        );

            $this->db->insert('kontak', $data);

		redirect('kontak','refresh');
        }
    }