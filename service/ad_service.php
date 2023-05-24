<?php

include "../model/ad.php";
include "../controller/data_access/db_access.php";

const AD_QUERY = "SELECT ads.*, users.name FROM ads JOIN users ON ads.userid=users.id";

class ad_service {
    private $database;

    public function __construct()
    {
        $this->database = new database();
    }

    function load_ad_data(){
        $ads = array();
        $data = $this->database->conn->query(AD_QUERY);

        if(!$data){
            die("Failed to fetch user data from database");
        }

        while($curr_row = $data->fetch_assoc()){
            $curr_ad = new ad($curr_row["id"], $curr_row["userid"], $curr_row["name"], $curr_row["ad_name"]);

            array_push($ads, $curr_ad);
        }

        $data->free();

        return $ads;
    }
}