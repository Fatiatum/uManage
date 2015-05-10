<?php

function getUserProjects($username) {
  
  global $conn;
  $username = $_SESSION['username'];

  $userId = $conn->prepare("SELECT users_id FROM users WHERE username= :username");
  $userId->bindParam(':username', $username);
  $userId->execute();
  $rows = $userId->fetch(PDO::FETCH_NUM);
  
  $stmt = $conn->prepare("SELECT * FROM project WHERE coordenator_id = :id");
  $stmt->bindParam(':id', $rows[0]);
  $stmt->execute();
  return $stmt->fetch();
  
}


function getUser(){
  global $conn;
  $username = $_SESSION['username'];
  $stmt = $conn->prepare("SELECT * FROM users WHERE username= :username");
  $stmt->bindParam(':username', $username);
  $stmt->execute();
  return $stmt->fetch();
}

/*
function getAllProjects() {
  global $conn;
  $stmt = $conn->prepare("SELECT *
    FROM project
    ORDER BY dataCriacao DESC");
  $stmt->execute();
  return $stmt->fetchAll();
}
*/
function createProject($name, $descp, $visibility){
  global $conn;
  
  //coordenator id
  $username = $_SESSION['username'];

  $coordId = $conn->prepare("SELECT users_id FROM users WHERE username = :username");
  $coordId->bindParam(':username', $username);
  $coordId->execute();
  $rows = $coordId->fetch(PDO::FETCH_NUM);
  
  //insert into coordenator table
  $coord = $conn->prepare("INSERT INTO coordenator (users_id) VALUES (:users_id) ");
  $coord->bindParam(':users_id', $rows[0]);
  $coord->execute();

  //insert into project table
  $stmt = $conn->prepare("INSERT INTO project (name, creation_date, conclusion_date, coordenator_id, description) VALUES (:name, :creation_date, :conclusion_date, :coordenator_id, :description) ");
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':creation_date', date("Y/m/d"));
  $stmt->bindParam(':conclusion_date', date("Y/m/d"));
  $stmt->bindParam(':coordenator_id', $rows[0]);
  $stmt->bindParam(':description', $descp);
  $stmt->execute();
}
?>
