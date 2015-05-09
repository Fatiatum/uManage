<?php
  function getUserProjects($username) {
    global $conn;
    $userId = $conn->prepare("SELECT utilizadorID FROM
                                    Utilizador USING(username)
                                    WHERE username = ?");
    $userId->execute(array($username));
    $stmt = $conn->prepare("SELECT *
                            FROM Utilizador JOIN
                                 JoinUtiilizadorToProjeto USING(userId)
                            ORDER BY dataCriacao DESC");
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getAllProjects() {
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM Projeto
                            ORDER BY dataCriacao DESC");
    $stmt->execute();
    return $stmt->fetchAll();
  }
?>
