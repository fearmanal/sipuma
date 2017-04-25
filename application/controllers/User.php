<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	 public function __construct() {
 		parent::__construct();
		$this->load->helper('url');
 		$this->load->model('user_model');
 		$this->load->model('role_model');
	}


	public function index() {
		$data['users']=$this->user_model->get_listuser();
		$data['roles']=$this->role_model->get_listrole();
		$this->load->view('user_view',$data);
	}

	public function add_user() {
		$data = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'id_role' => $this->input->post('id_role'),
			);
		$insert = $this->user_model->adduser_db($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_edit($id) {
		$data = $this->user_model->get_by_id($id);
		echo json_encode($data);
	}

	public function upd_user() {
		$data = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'id_role' => $this->input->post('id_role'),
			);
		$this->user_model->upduser_db(array('id_user' => $this->input->post('id_user')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function del_user($id) {
		$this->user_model->deluser_db($id);
		echo json_encode(array("status" => TRUE));
	}


}
