<?php

include '../service/user_service.php';

class user_controller
{
    private $user_service;

    public function __construct()
    {
        $this->user_service = new user_service();
    }

    public function get_user_list()
    {
        return $this->user_service->load_user_data();
    }
}