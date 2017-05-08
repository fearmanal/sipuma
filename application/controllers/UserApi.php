<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserApi extends CI_Controller {

	 public function __construct() {
 		parent::__construct();
		$this->load->helper('url');
 		$this->load->model('UserApi_model');
	}


	public function index() {
		$data['users']=$this->UserApi_model->get_listuser();
		$this->load->view('userApi_view',$data);
	}


}
