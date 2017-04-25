<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
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


	public function get_by_id($id) {
		$this->db->from($this->table);
		$this->db->where('id_user',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function adduser_db($data) {
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function upduser_db($where, $data) {
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function deluser_db($id) {
		$this->db->where('id_user', $id);
		$this->db->delete($this->table);
	}


}
