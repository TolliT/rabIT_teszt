<?php

include '../service/ad_service.php';

class ad_controller {
    private $ad_service;

    public function __construct()
    {
        $this->ad_service = new ad_service();
    }

    public function get_ad_list() {
        return $this->ad_service->load_ad_data();
    }
}