<?php
  function getUserProjects($username) {
    global $conn;
    $userId = $conn->prepare("SELECT utilizadorID FROM
                                    users USING(username)
                                    WHERE username = ?");
    $userId->execute(array($username));
    $stmt = $conn->prepare("SELECT *
                            FROM users JOIN
                                 JoinUtiilizadorToProjeto USING(userId)
                            ORDER BY dataCriacao DESC");
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getAllProjects() {
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM project
                            ORDER BY dataCriacao DESC");
    $stmt->execute();
    return $stmt->fetchAll();
  }
?>
