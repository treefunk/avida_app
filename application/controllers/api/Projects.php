<?php

class Projects extends Crud_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('api/project_model', 'model');
    }

    public function index_get()
    {
        $filters = $this->input->get();

        $projects = $this->model->all($filters);

        $this->response([
            'data' => $projects,
            'meta' => [
                'message' => 'Got All Data',
                'code' => 200
            ]
        ],200);
    }

    public function area_get($id)
    {
        $projects = $this->model->getProjectsByAreaId($id);

        $this->response([
            'data' => $projects,
            'meta' => [
                'message' => 'Got All Data',
                'code' => 200
            ]
        ],200);
    }

    public function city_get($id)
    {
        $projects = $this->model->all(['city' => $id]);

        $this->response([
            'data' => $projects,
            'meta' => [
                'message' => 'Got All Data',
                'code' => 200
            ]
        ],200);
    }

    public function single_project_get($id)
    {
        $project = $this->model->getProjectById($id);

        if($project){
           $meta = [
                'message' => 'Single Project retrieved',
                'code' => 200
           ];
        }else{
           $meta = [
                'message' => 'Project not found.',
                'code' => 404
           ];
        }

        $this->response([
            'data' => $project,
            'meta' => $meta
        ]);
    }

}
