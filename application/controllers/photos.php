<?php
class Photos extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('photos_model');
	}
	public function view($photo_order = FALSE)
	{
		if ($photo_order === FALSE)
			$photo_order = 1;
		$data['current_photo'] = $this->photos_model->get_current($photo_order);
		$data['photos'] = $this->photos_model->get_photos();
		$data['title'] = 'Photos';
		$this->load->view('templates/header', $data);
		$this->load->view('photos/display', $data);
		$this->load->view('photos/thumbnails', $data);
	}
	
}
