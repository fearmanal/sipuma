<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HimaApi extends CI_Controller {

	 public function __construct() {
 		parent::__construct();
		$this->load->helper('url');
 		$this->load->model('HimaApi_model');
	}


	public function index() {
		$data['himas']=$this->HimaApi_model->get_listhima();
		$this->load->view('himaApi_view',$data);
	}


}
