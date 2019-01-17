<?php

class Areas extends Crud_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('api/area_model', 'model');
    }

    public function index_get($id = null)
    {
        if($id == null){
            $areas = $this->model->all();
        }else{
            $areas = $this->model->getById($id);
        }

        $this->response([
            'data' => $areas,
            'meta' => [
                'message' => is_array($areas) ? 
                                    (count($areas) ? //if count is > 0
                                            'Got All Data' : 'No Area uploaded') :
                                    (((object)[]) == $areas ?  // if object is empty
                                            'Area not found' : 'Area Retrieved'),
                'code' => 200
            ]
        ],200);
    }

}
