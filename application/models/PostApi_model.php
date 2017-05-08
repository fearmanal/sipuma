<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PostApi_model extends CI_Model
{

	var $table = 'post';


	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function get_listpost() {
		$this->db->from('post');
		$query=$this->db->get();
		return $query->result();
	}


}
