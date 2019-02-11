<?php

class Notifications extends Crud_controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model([
            'api/notification_model'
        ]);
    }

    public function index_get($id = null){

        if($id == null){
            $notifications = $this->notification_model->all();
        }else{
            $notifications = $this->notification_model->getById($id);
        }


        $this->response([
            'data' => $notifications,
            'meta' => [
                'code' => 200
            ]
        ],200);

    }

}
