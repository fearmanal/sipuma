<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hima_model extends CI_Model
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


	public function get_by_id($id) {
		$this->db->from($this->table);
		$this->db->where('id_hima',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function addhima_db($data) {
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function updhima_db($where, $data) {
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delhima_db($id) {
		$this->db->where('id_hima', $id);
		$this->db->delete($this->table);
	}


}
