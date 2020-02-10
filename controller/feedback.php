<?php
  include "connection.php";

  class Controller extends Connection {

    function feedback($param1, $param2) {
      $stmt = $this->pdo->prepare("INSERT INTO `feedbacks`(`contact`, `feedback`) VALUES (:param1, :param2)");
      $stmt->bindParam(':param1', $param1);
      $stmt->bindParam(':param2', $param2);
      $stmt->execute();
    }

  }



?>