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
  $coord = $conn->prepare("INSERT INTO coordenator (users_id) SELECT :users_id WHERE :users_id NOT IN (SELECT users_id FROM coordenator)");
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

  //insert into users_project table
  
  $stmt = $conn->prepare("INSERT INTO users_project (project_id,users_id,insert_date) VALUES ((SELECT project_id FROM project WHERE name=:name),:users_id,:insert_date) ");
  $stmt->bindParam(':users_id', $rows[0]);
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':insert_date', date("Y/m/d"));
  $stmt->execute();
  
}

  //get projects info
function getProjInfo($name){
  global $conn;
//(SELECT users_id FROM users_project WHERE project_id=1)AS members
//("SELECT * FROM project, users_project WHERE project.project_id=1 AND users_project.project_id=1")
  $stmt = $conn->prepare("SELECT * FROM project,(SELECT project_id FROM users_project,(SELECT users_id FROM users WHERE username=:username) AS iduser WHERE iduser.users_id=users_project.users_id) AS projid WHERE name=:name AND projid.project_id=project.project_id");
  $stmt->bindParam(':name', $name);
  $stmt->execute();
}
  //get tasks from project without list
function getTasks($name){
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM task,(SELECT project_id FROM project WHERE name=:name) AS idproj WHERE task.project_id=idproj.project_id AND task.task_list_id=NULL");
  $stmt->bindParam(':name', $name);
  $stmt->execute();
  return $stmt->fetchAll();
}
  //get tasks from project whithin a task list
function getTasksfromTList($name, $tasklist){
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM task,(SELECT project_id FROM project WHERE name=:name) AS idproj WHERE task.project_id=idproj.project_id AND task.task_list_id!=NULL ORDER BY task.task_list_id");
  $stmt->bindParam(':name', $name);
  tmt->bindParam(':tasklist', $tasklist);
  $stmt->execute();
  return $stmt->fetchAll();
}

 //get task lists from project
function getTaskList($name){
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM task_list,(SELECT project_id FROM project WHERE name=:name) AS idproj WHERE task_list.project_id=idproj.project_id");
  $stmt->bindParam(':name', $name);
  $stmt->execute();
  return $stmt->fetchAll();
}

  //get tasks assigned to member - modificar
 /* function getAssignedTask($name){
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM task_list,(SELECT project_id FROM project WHERE name=:name) AS idproj WHERE task_list.project_id=idproj.project_id");
  $stmt->bindParam(':name', $name);
  $stmt->execute();
}*/
?>
