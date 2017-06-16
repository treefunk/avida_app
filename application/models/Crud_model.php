<?php

class Crud_model extends CI_model
{

  # Your table name here
  protected $table;

  public function __construct()
  {
    parent::__construct();
    $this->table = 'crud';
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

  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete($this->table);
    return $this->db->affected_rows();
  }

  public function update($id, $data)
  {
    return $this->db->update($this->table, $data, ['id' => $id]);
  }

  public function upload($files)
  {
    $k = key($_FILES); # gets the key of the uplaoded thing on your form
    $files = $files[$k]; # gets whatever the value of your uploaded thing is

    $uploaded_files = [];

    $upload_path = 'uploads/your_dir';

    $config['upload_path'] = $upload_path;
    $config['allowed_types'] = 'gif|jpg|jpeg|png';

    if (!is_dir($upload_path) && !mkdir($upload_path, 0777, true)){
      mkdir($upload_path, 0777, true);
    }

    foreach ($files['name'] as $key => $image) {

      $_FILES[$k]['name'] = $files['name'][$key];
      $_FILES[$k]['type'] = $files['type'][$key];
      $_FILES[$k]['tmp_name'] = $files['tmp_name'][$key];
      $_FILES[$k]['error'] = $files['error'][$key];
      $_FILES[$k]['size'] = $files['size'][$key];

      $filename = time() . "_" . $files['name'][$key];
      $images[] = $uploaded_files[] = $filename;

      $config['file_name'] = $filename;
      $this->upload->initialize($config);

      $this->upload->do_upload('images');
    }

    return $uploaded_files;
  }

}
