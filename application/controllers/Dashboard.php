<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_auth');
		$this->load->model('M_admin');

	}
	public function index()
	{
		if($this->M_auth->logged_id())
		{

		$data['jml_paket'] 		= $this->M_admin->total_rows_paket();
        $data['jml_galeri'] 	= $this->M_admin->total_rows_galeri();
        $data['jml_kontak'] 	= $this->M_admin->total_rows_kontak();
        $data['jml_user'] 		= $this->M_admin->total_rows_user();

		$this->template->load('admin/static','admin/dashboard',$data);		

		}else{

			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth");

		}
	}
}
