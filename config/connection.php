<?php
    class Connection {
        private $hostname = 'localhost';
        private $dbname = 'databaseName';
        private $user = 'root';
        private $password = '';
        private $db;
        //create DB connection property
        public function __construct(){
            try {
                $this->db = new PDO('mysql:host='.$this->hostname.';dbname='.$this->dbname.'',$this->user,$this->password);
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $exception){
                echo 'DB Connection Error: ' . $exception;
                exit();
            }
        }
    }