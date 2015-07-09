<?php
class Contact extends CI_Controller{
	
	public function index()
	{
		$this->load->helper(array('form', 'url'));
		
		
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->form_validation->set_rules('name', 'Name', 'required|xss_clean');
		$this->form_validation->set_rules('email', 'Email Address', 'required|xss_clean');
		$this->form_validation->set_rules('message', 'Message', 'required|xss_clean');
		if ($this->form_validation->run() == FALSE)
			{
				$data['title'] = 'Contact';
				$this->load->view('templates/header', $data);
				$this->load->view('contact/form');
			
			}
			else
			{
				$message = $_POST['message'];
				$email = $_POST['email'];
				$name = $_POST['name'];
				$this->email->from($email, $name);
				$this->email->to('greg@gregmartinboston.com');
				$this->email->subject('Message from website');
				$this->email->message($message);
				$this->email->send();
				
				$data['title'] = 'Contact';
				$this->load->view('templates/header', $data);
				$this->load->view('contact/form_success');
			}
			
	}
	
	
}