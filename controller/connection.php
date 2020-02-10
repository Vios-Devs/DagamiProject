<?php

  class Connection {

    private $server;
    private $username;
    private $password;
    private $databasename;
    private $charset;
    private $pdo;

    public function connect() {
      $this->server = "localhost";
      $this->username = "root";
      $this->password = "null";
      $this->databasename = "dagami-project";
      $this->charset = "utf8mb4";

      try {
        //code...
        $dsn = "mysql:host=".$this->server.";database=".$this->databasename.";charset=".$this->charset;
        $pdo = new PDO($dsn, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection established";
        return $pdo;
      } catch (PDOException $errMSg) {
        //throw $th;
        echo "Connection failed: ".$errMSg->getMessage();
      }

      

    }

  }


?>