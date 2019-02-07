<?php

class About extends Crud_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('api/about_model');
    }

    public function index_get(){
        $about = get_post(247);

        $data = [
            'title' => $about->post_title,
            'content' => $about->post_content,
        ];

        $this->response([
            'data' => $data,
            'meta' => [
                'code' => 200
            ]
        ],200);

    }



}