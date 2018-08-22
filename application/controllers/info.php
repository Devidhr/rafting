<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {

	function __construct(){
		parent:: __construct();
	$this->load->model('M_paket');

	}

	public function index()
	{
		$data['info'] = $this->M_paket->Get_Paket();
		$this->template->load('v_template','info',$data);
	}
}
