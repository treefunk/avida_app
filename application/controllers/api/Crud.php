<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Crud extends \Restserver\Libraries\REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('crud_model');
  }

  function index_get()
  {
    $res = $this->crud_model->all();
    $this->response($res, 200);
  }

  function single_get($id)
  {
    $res = $this->crud_model->get($id);
    if($res){
      $this->response($res, 200);
    }else{
      $this->response(['message' => 'Not found'], 404);
    }
  }

  function index_post()
  {
    # NOTE: This is an example usage of batch upload
    // $data = array_merge($this->input->post(), $this->crud_model->batch_upload($_FILES['input_name']));

    # FIXME
    $data = array_merge($this->input->post(), $this->crud_model->upload('icon_url'));
    var_dump($data);
    die();
    $data = $this->input->post();

    if($last_id = $this->crud_model->add($data)){ # Try to add and get the last id
      $res = $this->crud_model->get($last_id); # Get the last entry data
      $this->response_header('Location', api_url($this) .  $last_id); # Set the header location
      $this->response($res, 201);
    }else{
      $this->response(['message' => 'Malformed syntax'], 400);
    }
  }

  /**
  * edit single
  * @param  int $id [description]
  */
  function single_post($id)
  {
    $res = $this->crud_model->update($id, $this->input->post());
    if($res){
      $res = $this->crud_model->get($id);
      $this->response_header('Location', api_url($this) .  $id); # Set the newly created object's location
      $this->response($res, 200);
    }else{
      $this->response(['message' => 'Malformed syntax'], 400);
    }
  }

  function single_delete($id)
  {
    $res = $this->crud_model->delete($id);
    if($res > 0){
      $this->response($res, 204); # Omits the response anyway if 204
    }else{
      $this->response(['message' => 'Not found'], 404 );
    }
  }

}
