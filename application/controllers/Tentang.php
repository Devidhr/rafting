<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {


	function __construct(){
		parent:: __construct();
	$this->load->model('M_tentang');

	}
		
	public function index()
	{
		$data['tentang'] = $this->M_tentang->GetTentang();
		$this->template->load('v_template','tentang',$data);
	}
}
