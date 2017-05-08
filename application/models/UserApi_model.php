<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserApi_model extends CI_Model
{

	var $table = 'user';


	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function get_listuser() {
		$this->db->from('user');
		$query=$this->db->get();
		return $query->result();
	}


}
