<?php

function createUser($name, $email, $username, $password) {
  global $conn;
  $stmt = $conn->prepare("INSERT INTO users (nome, email, username, password, data_de_registo) VALUES (:name, :email, :username, :password, :data) ");
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':username', $username);
  $stmt->bindParam(':password', $password);
  $stmt->bindParam(':data', date("Y/m/d"));
  $stmt->execute();
}

function isLoginCorrect($username, $password) {

  global $conn;
  $stmt = $conn->prepare("SELECT *
    FROM users
    WHERE username= :username AND password= :password"
    );
  $stmt->bindParam(':username', $username);
  $stmt->bindParam(':password', $password);
  $stmt->execute();
  $rows = $stmt->fetch(PDO::FETCH_NUM);
  if($rows>1){
    return true;
  }
  return false;
}

function viewUsers(){
  global $conn;
    /*$stmt = $conn->prepare( "SELECT * FROM Utilizador" );
    $stmt->execute();
    return $stmt;*/


    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
      }
    } else {
      echo "0 results";
    }

  }

  ?>
