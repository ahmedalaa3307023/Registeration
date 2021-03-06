<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class welcome_controller extends CI_Controller {


	public function index()
	{
		$this->load->view('page');
	}
	
	public function getting_all_users_types()
	{
		$this->load->Model('all_users_services');
		$types = $this->all_users_services->get_types();
		return ($types);
	} 


	public function call()
	{
		$data = new stdClass();
		$types = $this->getting_all_users_types();
		$data->arr = $types;
		$this->load->view('downloading_page',$data);
	}
	
	public function insert_into_table()
	{
		$this->load->Model('insert_into_table');
		$this->insert_into_table->insert($_POST);
	}
	
	public function end()
	{
		$this->load->view('download');
	}
}

		