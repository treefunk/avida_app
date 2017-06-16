<?php

class Crud_model extends CI_model
{
  /**
   * Your table name
   * @var string
   */
  protected $table;

  public function __construct()
  {
    parent::__construct();
    $this->table = 'crud';
  }

  /**
   * Get all rows from the table
   * @return array
   */
  public function all()
  {
    return $this->db->get($this->table)->result();
  }

  /**
   * Get specific row via id
   * @param  int     $id
   * @return array   associative array of data
   */
  public function get($id)
  {
    $this->db->where('id', $id);
    return $this->db->get($this->table)->result();
  }

  /**
   * Inserts to the table with the associative array provided
   * @param  array $data
   * @return int   the last insert id
   */
  public function add($data)
  {
    $this->db->insert($this->table, $data);
    return $this->db->insert_id();
  }

 /**
  * Deletes the row via id
  * @param  int $id
  * @return int number of rows deleted
  */
  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete($this->table);
    return $this->db->affected_rows();
  }

  /**
   * Simply updates the table matching the associative array provided
   * @param  int    $id    id of row to update
   * @param  array  $data  associative array of values to be updated
   * @return bool
   */
  public function update($id, $data)
  {
    return $this->db->update($this->table, $data, ['id' => $id]);
  }

/**
 * Batch upload of the given $_FILES[key] multiple upload input
 * @param  array   $files   example value is $_FILES[key]
 * @return array           returns a multidimensional array in this structure array[key] => [0 => 'file1', 1 => 'file2']
 */
  public function batch_upload($files = [])
  {
    # Defaults
    $k = key($files); # Gets the `key` of the uplaoded thing on your form

    $uploaded_files = []; # Initialize empty return array
    $upload_path = 'uploads/your_dir'; # Your upload path starting from the `root folder`

    # Configs
    $config['upload_path'] = $upload_path; # Set upload path
    $config['allowed_types'] = 'gif|jpg|jpeg|png'; # Set allowed types

    # Folder creation
    if (!is_dir($upload_path) && !mkdir($upload_path, DEFAULT_FOLDER_PERMISSIONS, true)){
      mkdir($upload_path, DEFAULT_FOLDER_PERMISSIONS, true); # You can set DEFAULT_FOLDER_PERMISSIONS constant in application/config/constants.php
    }

    if($files === null) return []; # Returns an empty array if the `$_FILES` array is empty

    foreach ($files['name'] as $key => $image) {
      $_FILES[$k]['name'] = $files['name'][$key];
      $_FILES[$k]['type'] = $files['type'][$key];
      $_FILES[$k]['tmp_name'] = $files['tmp_name'][$key];
      $_FILES[$k]['error'] = $files['error'][$key];
      $_FILES[$k]['size'] = $files['size'][$key];

      $filename = time() . "_" . $files['name'][$key]; # Renames the filename into timestamp_filename
      $images[] = $uploaded_files[$k][] = $filename; # Appends all filenames to our return array with the key

      $config['file_name'] = $filename;
      $this->upload->initialize($config);

      $this->upload->do_upload($k);
    }

    return $uploaded_files;
  }

}
