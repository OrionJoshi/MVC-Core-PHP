<?php

    class Dbh {
        private $host = "localhost";
        private $user = "root";
        private $pwd = "";
        private $dbName = "oopphp16";

        protected function connect(){
            $dbs = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
            $pdo = new PDO($dbs, $this->user, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }

    }