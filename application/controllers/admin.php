<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	function encrypt_pw($post_array){
		if (!empty($post_array['password'])) {
				$post_array['password']= MD5($_POST['password']);

		}
		return $post_array;
	}

	public function user()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('flexigrid');
		$crud->set_table('tbl_users');
		$crud->set_field_upload('images','front/img/user');
		$crud->callback_before_insert(array($this,'encrypt_pw'));
		$crud->callback_before_update(array($this,'encrypt_pw'));
		$crud->unset_clone();
		$output = $crud->render();
		//$this->_example_output($output);
		$this->template->load('admin/static.php','admin/data',$output);
	}

	public function paket()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('paket');
		$crud->unset_clone();
		$crud->set_field_upload('images','front/img/paket');
		$output = $crud->render();
		//$this->_example_output($output);
		$this->template->load('admin/static.php','admin/data',$output);
	}
	public function galeri()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('galeri');
		$crud->set_field_upload('images','front/img/galeri');
		$output = $crud->render();
		//$this->_example_output($output);
		$this->template->load('admin/static.php','admin/data',$output);
	}
	public function tentang()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('tentang');
		$crud->set_field_upload('foto','front/img/about');
		$crud->unset_clone();
		$crud->unset_delete();
		$crud->unset_add();
		$output = $crud->render();
		//$this->_example_output($output);
		$this->template->load('admin/static.php','admin/data',$output);
	}
	public function kontak()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('kontak');
		$crud->unset_clone();
		$crud->unset_edit();
		$crud->unset_add();
		$output = $crud->render();
		//$this->_example_output($output);
		$this->template->load('admin/static.php','admin/data',$output);
	}
}