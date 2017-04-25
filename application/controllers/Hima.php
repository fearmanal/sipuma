<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hima extends CI_Controller {

	 public function __construct() {
 		parent::__construct();
		$this->load->helper('url');
 		$this->load->model('hima_model');
 		$this->load->model('role_model');
	}


	public function index() {
		$data['himas']=$this->hima_model->get_listhima();
		$data['roles']=$this->role_model->get_listrole();
		$this->load->view('hima_view',$data);
	}

	public function add_hima() {
		$data = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'id_role' => $this->input->post('id_role'),
			);
		$insert = $this->hima_model->addhima_db($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_edit($id) {
		$data = $this->hima_model->get_by_id($id);
		echo json_encode($data);
	}

	public function upd_hima() {
		$data = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'id_role' => $this->input->post('id_role'),
			);
		$this->hima_model->updhima_db(array('id_hima' => $this->input->post('id_hima')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function del_hima($id) {
		$this->hima_model->delhima_db($id);
		echo json_encode(array("status" => TRUE));
	}


}
