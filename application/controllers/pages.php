<?php

class Pages extends CI_Controller {

	public function view($page = 'home') 
	{
			if(! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
				{
					show_404();  //  Page doesn't exist
				}
			$data['title'] = ucfirst($page); ;  //Capitalize first letter
			
			$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, $data);
	}
}