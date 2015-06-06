<?php
/*
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
  
}*/




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

  //get projects info
function getProjInfo($name){
  global $conn;
//(SELECT users_id FROM users_project WHERE project_id=1)AS members
//("SELECT * FROM project, users_project WHERE project.project_id=1 AND users_project.project_id=1")
  $stmt = $conn->prepare("SELECT * FROM project, users_project,(SELECT project_id FROM project WHERE name=:name) AS idproj WHERE project.project_id=idproj.project_id AND users_project.project_id=idproj.project_id");
  $stmt->bindParam(':name', $name);
  $stmt->execute();
}
  //get tasks from project
function getTasks($name){
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM task,(SELECT project_id FROM project WHERE name=:name) AS idproj WHERE task.project_id=idproj.project_id");
  $stmt->bindParam(':name', $name);
  $stmt->execute();
}
  //get tasks from project whithin a task list
function getTasksfromTList($name){
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM task,(SELECT project_id FROM project WHERE name=:name) AS idproj WHERE task.project_id=idproj.project_id AND task.task_list_id!= NULL");
  $stmt->bindParam(':name', $name);
  $stmt->execute();
}

 //get task lists from project
function getTaskList($name){
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM task_list,(SELECT project_id FROM project WHERE name=:name) AS idproj WHERE task_list.project_id=idproj.project_id");
  $stmt->bindParam(':name', $name);
  $stmt->execute();
}

  //get tasks assigned to member - modificar
 /* function getAssignedTask($name){
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM task_list,(SELECT project_id FROM project WHERE name=:name) AS idproj WHERE task_list.project_id=idproj.project_id");
  $stmt->bindParam(':name', $name);
  $stmt->execute();
}*/
?>
