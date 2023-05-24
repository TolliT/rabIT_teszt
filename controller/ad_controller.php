<?php

include '../service/ad_service.php';

class ad_controller
{
    private $ad_service;

    public function __construct()
    {
        $this->ad_service = new ad_service();
    }

    /**
     * Calls the ad service function responsible for loading ad data from the database.
     *
     * @return array array containing ad objects with data from the database.
     */
    public function get_ad_list()
    {
        return $this->ad_service->load_ad_data();
    }
}