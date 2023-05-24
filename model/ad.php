<?php

class ad
{
    private $id;
    private $userid;
    private $username;
    private $ad_name;

    public function __construct($id, $userid, $username, $ad_name)
    {
        $this->id = $id;
        $this->userid = $userid;
        $this->username = $username;
        $this->ad_name = $ad_name;
    }

    public function get_id()
    {
        return $this->id;
    }

    public function get_userid()
    {
        return $this->userid;
    }

    public function get_username()
    {
        return $this->username;
    }

    public function get_adname()
    {
        return $this->ad_name;
    }
}