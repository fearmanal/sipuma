<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HimaApi_model extends CI_Model
{

	var $table = 'hima';


	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function get_listhima() {
		$this->db->from('hima');
		$query=$this->db->get();
		return $query->result();
	}


}
