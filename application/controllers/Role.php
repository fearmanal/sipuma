<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller {

	 public function __construct() {
 		parent::__construct();
		$this->load->helper('url');
 		$this->load->model('role_model');
	}


	public function index() {
		$data['roles']=$this->role_model->get_listrole();
		$this->load->view('role_view',$data);
	}

	public function add_role() {
		$data = array(
				'id_role' => $this->input->post('id_role'),
				'role_name' => $this->input->post('role_name'),
			);
		$insert = $this->role_model->addrole_db($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_edit($id) {
		$data = $this->role_model->get_by_id($id);
		echo json_encode($data);
	}

	public function upd_role() {
		$data = array(
				'id_role' => $this->input->post('id_role'),
				'role_name' => $this->input->post('role_name'),
			);
		$this->role_model->updrole_db(array('id_role' => $this->input->post('id_role')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function del_role($id) {
		$this->role_model->delrole_db($id);
		echo json_encode(array("status" => TRUE));
	}


}
