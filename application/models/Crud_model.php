<?php

class Crud_model extends CI_model
{

  # Your table name here
  protected $table = 'crud';

  public function __construct()
  {
    parent::__construct();

  }

  public function all()
  {
    return $this->db->get($this->table)->result();
  }

  public function get($id)
  {
    $this->db->where('id', $id);
    return $this->db->get($this->table)->result();
  }

  public function add($data)
  {
    $this->db->insert($this->table, $data);
    return $this->db->insert_id();
  }

  public function delete($data)
  {
    $this->db->where('id', $data);
    $this->db->delete($this->table);
    return $this->db->affected_rows();
  }

}
