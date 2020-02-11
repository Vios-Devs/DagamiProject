<?php

  class Connection {
    private $server;
    private $username;
    private $password;
    private $database;
    private $charset;
    protected $pdo;

    function __construct() {
      $this->connect();
    }

    private function connect() {
      $this->servername = "localhost";
      $this->username = "root";
      $this->password = "null";
      $this->database = "DagamiProject";
      $this->charset = "utf8mb4";

      try {
        //code...
        $dsn = "mysql:host=".$this->servername."; dbname=".$this->database."; charset=".$this->charset;
        $this->pdo = new PDO($dsn, $this->username, $this->password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection established<br>";
        // return $this->pdo;
      } catch (PDOException $errMSg) {
        //throw $th;
        echo "Connection failed: ".$errMSg->getMessage();
      }
      
    }

  }


?>