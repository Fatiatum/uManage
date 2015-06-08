<?php

function getAllProjects(){
  global $conn;
  $stmt = $conn->prepare("SELECT name FROM project");
  $stmt->execute();
  return $stmt->fetchAll();
}

function getAllProjs($string){
  global $conn;
  $query = $conn->prepare("SELECT * FROM project WHERE name LIKE ?");
  $query->execute(array('%' . $string . '%'));
  return $query->fetchAll();
}

function getAllUsers(){
  global $conn;
  $stmt = $conn->prepare("SELECT username FROM users");
  $stmt->execute();
  return $stmt->fetchAll();
}

function getUsers($string){
  global $conn;
  $query = $conn->prepare("SELECT * FROM users WHERE username LIKE ? ");
  $query->execute(array('%' . $string . '%'));
  return $query->fetchAll();
}

function removeProj($name){
  global $conn;
  $stmt = $conn->prepare("DELETE FROM project WHERE name=:name");
  $stmt->bindParam(':name', $name);
  $stmt->execute();
  return $stmt->fetchAll();
}

function removeUser($username){
  global $conn;
  $stmt = $conn->prepare("DELETE FROM users WHERE username=:username");
  $stmt->bindParam(':username', $username);
  $stmt->execute();
  return $stmt->fetchAll();
}

  ?>
