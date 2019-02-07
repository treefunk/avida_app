<?php

class Privacy_policy extends Crud_controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index_get(){
        $policy = get_post(249);

        $data = [
            'title' => $policy->post_title,
            'content' => $policy->post_content,
        ];

        $this->response([
            'data' => $data,
            'meta' => [
                'code' => 200
            ]
        ],200);

    }



}