<?php

class Crud_model extends CI_model
{

  public function __construct()
  {
    parent::__construct();

  }

  public function getUsers()
  {
    return $this->db->get('users')->result();
  }

}
