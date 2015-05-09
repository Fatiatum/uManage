<?php
  
  function createUser($name, $email, $username, $password) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO Utilizador(nome, email, username, password, data_de_registo) VALUES (:name, :email, :username, :password, :data) ");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':data', date("Y/m/d"));
  }

  function isLoginCorrect($username, $password) {
    
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM Utilizador
                            WHERE username=:username AND password=:password"
                            );
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    return $stmt->fetch() == true;
  }
?>
