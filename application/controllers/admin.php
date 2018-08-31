<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_auth');
	}
	
	function encrypt_pw($post_array){
		if (!empty($post_array['password'])) {
				$post_array['password']= sha1($_POST['password']);

		}
		return $post_array;
	}


	public function user()
	{
		if($this->M_auth->logged_id())
		{
		$crud = new grocery_CRUD();
		$crud->set_theme('flexigrid');
		$crud->set_table('tbl_users');
		$crud->unset_print();
		$crud->unset_export();
		$crud->set_field_upload('images','front/img/user');
		$crud->callback_before_insert(array($this,'encrypt_pw'));
		$crud->callback_before_update(array($this,'encrypt_pw'));
		$crud->unset_clone();
		$output = $crud->render();
		$output->judul_besar='User';
		$output->judul_kecil='Kelola User';
		$output->manage_user=TRUE;

		//$this->_example_output($output);
		$this->template->load('admin/static.php','admin/data',$output);
		}
		else{
		//jika session belum terdaftar, maka redirect ke halaman login
		redirect("auth");
		}
	}
	public function paket()
	{
		if($this->M_auth->logged_id())
		{
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('paket');
		$crud->unset_clone();
		$crud->unset_print();
		$crud->unset_export();
		$crud->set_field_upload('images','front/img/paket');
		$output = $crud->render();
		$output->judul_besar='Paket';
		$output->judul_kecil='Kelola Paket';
		$output->manage_paket=TRUE;
		//$this->_example_output($output);
		$this->template->load('admin/static.php','admin/data',$output);
		}
		else{
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth");
		}
	}
	public function galeri()
	{
		if($this->M_auth->logged_id())
		{
		$crud = new grocery_CRUD();
		$crud->set_table('galeri');
		$crud->unset_clone();
		$crud->unset_print();
		$crud->unset_export();
		$crud->set_field_upload('images','front/img/galeri');
		$output = $crud->render();
		$output->judul_besar='Galeri';
		$output->judul_kecil='Kelola Galeri';
		$output->manage_galeri=TRUE;
		//$this->_example_output($output);
		$this->template->load('admin/static.php','admin/data',$output);
		}
		else{
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth");
		}
	}
	public function tentang()
	{
		if($this->M_auth->logged_id())
		{
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('tentang');
		$crud->set_field_upload('foto','front/img/about');
		$crud->unset_clone();
		$crud->unset_delete();
		$crud->unset_print();
		$crud->unset_export();
		$crud->unset_add();
		$output = $crud->render();
		$output->judul_besar='Tentang';
		$output->judul_kecil='Kelola Tentang';
		$output->manage_tentang=TRUE;
		//$this->_example_output($output);
		$this->template->load('admin/static.php','admin/data',$output);
		}
		else{
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth");
		}
	}
	public function kontak()
	{
		if($this->M_auth->logged_id())
		{
		$crud = new grocery_CRUD();
		$crud->set_table('kontak');
		$crud->unset_clone();
		$crud->unset_edit();
		$crud->unset_add();
		$output = $crud->render();
		$output->judul_besar='Kontak';
		$output->judul_kecil='Kelola Kontak';
		$output->manage_kontak=TRUE;
		//$this->_example_output($output);
		$this->template->load('admin/static.php','admin/data',$output);
		}
		else{
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth");
		}
	}
}
