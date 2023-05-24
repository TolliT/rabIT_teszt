<?php

include "../model/user.php";
include "../controller/data_access/db_access.php";

const USER_QUERY = "SELECT * FROM users";

class user_service {
    private $database;

    public function __construct()
    {
        $this->database = new database();
    }

    function load_user_data(){
        $users = array();
        $data = $this->database->conn->query(USER_QUERY);

        if(!$data){
            die("Failed to fetch user data from database");
        }

        while($curr_row = $data->fetch_assoc()){
            $curr_user = new user($curr_row["id"], $curr_row["name"]);

            array_push($users, $curr_user);
        }

        $data->free();

        return $users;
    }
}