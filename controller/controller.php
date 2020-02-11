<?php
  require "../model/connection.php";

  class Controller extends Connection {

    function send_feedback($param1, $param2) {
      try {
        //code...
        echo $param1."<br>";
        echo $param2;
        $stmt = $this->pdo->prepare("INSERT INTO feedbacks(contact, feedback) VALUES (:param1, :param2)");
        $stmt->bindParam(':param1', $param1);
        $stmt->bindParam(':param2', $param2);
        $stmt->execute();
      } catch (\Throwable $errMsg) {
        //throw $th;
        echo "feedback(): ".$errMsg->getMessage();
      }
    }
    
  }



?>