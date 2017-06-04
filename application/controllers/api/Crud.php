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
    $this->response(
      $res, 200
    );
  }

  function crud_get($id)
  {
    $res = $this->crud_model->get($id);
    $this->response(
      $res, 200
    );

    #TODO: if no content
  }

  function index_post()
  {
    $res = $this->crud_model->add($this->input->post());

    header("Location: " . base_url() . "api/" . strtolower(__CLASS__) . "/$res");

    $this->response(
      $res, 200
    );
  }

  function index_put()
  {
    $this->response(
      array('message'=> 'Put request!'), 200
    );
  }

  function index_patch()
  {
    $this->response(
      array('message'=> 'Patch request!'), 200
    );
  }

}
