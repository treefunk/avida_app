<?php

class Cities extends Crud_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('api/city_model', 'model');
    }

    public function index_get($id = null)
    {
        if($id == null){
            $cities = $this->model->all();
        }else{
            $cities = $this->model->getById($id);
        }

        $this->response([
            'data' => $cities,
            'meta' => [
                'message' => is_array($cities) ? 
                                    (count($cities) ? //if count is > 0
                                            'Got All Data' : 'No City uploaded') :
                                    (((object)[]) == $cities ? // if object is empty
                                            'City not found' : 'City Retrieved'),
                'code' => 200
            ]
        ],200);
    }

    public function area_get($id)
    {
        $cities = $this->model->getAllCitiesByAreaId($id);

        $this->response([
            'data' => $cities,
            'meta' => [
                'message' => 'Got All Data',
                'code' => 200
            ]
        ],200);
    }
}
    