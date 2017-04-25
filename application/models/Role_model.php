<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role_model extends CI_Model
{

	var $table = 'role';


	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function get_listrole() {
		$this->db->from('role');
		$query=$this->db->get();
		return $query->result();
	}


	public function get_by_id($id) {
		$this->db->from($this->table);
		$this->db->where('id_role',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function addrole_db($data) {
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function updrole_db($where, $data) {
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delrole_db($id) {
		$this->db->where('id_role', $id);
		$this->db->delete($this->table);
	}


}
