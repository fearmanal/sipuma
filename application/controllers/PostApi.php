<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PostApi extends CI_Controller {

	 public function __construct() {
 		parent::__construct();
		$this->load->helper('url');
 		$this->load->model('postApi_model');
	}


	public function index() {
		$data['posts']=$this->postApi_model->get_listpost();
		$this->load->view('postApi_view',$data);
	}


}
