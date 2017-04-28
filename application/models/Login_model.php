<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

  public function cek_user($username,$pass){
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('username',$username);
    $this->db->where('password',$pass);
    $query = $this->db->get();
    return $query->result();
  }

}