<?php

class Model {
    protected $db;
    function __construct() {
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'fundify_db';

        $this->db = new mysqli($hostname,
        $username,
        $password,
        $dbname);

        if (!$this->db) 
            die('Database error!');

    }
}
