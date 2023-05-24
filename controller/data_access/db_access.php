<?php

class database
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "database";
    public $conn;

    /**
     * Class responsible for establishing connection to the mySql server database.
     */
    public function __construct()
    {

        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}
