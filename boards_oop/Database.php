<?php

class Database {
    private $host = "mysql";
    private $username = "root";                     
    private $password = "GlobalIT@123"; 
    private $database_name = "memosys_db";

    public function connect_db() {

        return new PDO("mysql:host=".$this->host.";dbname=".$this->database_name, $this->username, $this->password);

    }
}