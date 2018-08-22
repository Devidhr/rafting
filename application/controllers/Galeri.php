<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	function __construct(){
		parent:: __construct();
	$this->load->model('M_galeri');

	}

	public function index()
	{
		$data['galeri'] = $this->M_galeri->Get_Galeri();
		$this->template->load('v_template','galeri',$data);
	}
}