<?php
class Admin extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		/*$this->load->model('admin_model');*/
	}
	public function index()
	{
		$data['title'] = 'Admin';
		$this->load->helper(array('form', 'url'));
		
		
		$this->load->library('form_validation');
		$this->load->view('templates/header', $data);
		$this->load->view('admin/login_form');

	}
	
}