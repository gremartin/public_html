<?php
class Photos_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}
	public function get_photos()
		{
			$query = $this->db->get('photos');
			return $query->result_array();
		}
	public function get_current($photo_order = FALSE)
		{
			$query = $this->db->get_where('photos', array('photo_order' => $photo_order));
			return $query->row_array();
		}
}