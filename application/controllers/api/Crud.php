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

    if($last_id = $this->crud_model->add($this->input->post())){ # try to add and get the last id
      $res = $this->crud_model->get($last_id); # get the last entry data
      $this->response_header('Location', api_url($this) .  $last_id); # set the header location
      $this->response($res, 201);
    }else{
      $this->response(['message' => 'Malformed syntax'], 400);
    }

  }

  function single_delete($id)
  {
    $res = $this->crud_model->delete($id);
    if($res > 0){
      $this->response($res, 204);  # omits the response anyway if 204
    }else{
      $this->response(['message' => 'Not found'], 404 );
    }
  }

}
