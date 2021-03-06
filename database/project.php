<?php
///////////////////////////////////////////////////CREATES///////////////////////////////////////////////////////////
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

function createTaskList($name,$listname, $conclusion_date){
  global $conn;
  
  //insert into task table 
  $stmt = $conn->prepare("INSERT INTO task_list (project_id,name,begin_date,conclusion_date,concluded) VALUES ((SELECT project_id FROM project WHERE name=:name),:listname,:begin_date,:conclusion_date,'false')");
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':listname', $listname);
  $stmt->bindParam(':begin_date',date("Y/m/d"));
  $stmt->bindParam(':conclusion_date',$conclusion_date);
  $stmt->execute();
}

function createTask($name, $task_list_id,$conclusion_date,$text){
  global $conn;
  
  //insert into task table 
  $tsk = $conn->prepare("INSERT INTO task (project_id,task_list_id,begin_date,conclusion_date,concluded,text) VALUES ((SELECT project_id FROM project WHERE name=:name),:task_list_id,:begin_date,:conclusion_date,false,:text)");
  $tsk->bindParam(':name', $name);
  $tsk->bindParam(':task_list_id', $task_list_id);
  $tsk->bindParam(':begin_date',date("Y/m/d"));
  $tsk->bindParam(':conclusion_date',$conclusion_date);
  $tsk->bindParam(':text', $text);
  $tsk->execute();
}

function addMember($username, $name){
  global $conn;
  $stmt = $conn->prepare("INSERT INTO users_project (project_id,users_id,insert_date) VALUES ((SELECT project_id FROM project WHERE name=:name),(SELECT users_id FROM users WHERE username=:username),:insert_date) ");
  $stmt->bindParam(':username', $username);
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':insert_date', date("Y/m/d"));
  $stmt->execute();

}

function removeMember($username, $name){
  global $conn;
  $stmt = $conn->prepare("DELETE FROM users_project WHERE users_project.project_id= (SELECT project_id FROM project WHERE name=:name)AND users_project.users_id= (SELECT users_id FROM users WHERE username=:username)");
  $stmt->bindParam(':username', $username);
  $stmt->bindParam(':name', $name);
  $stmt->execute();
  return true;
}

function isCoordenator($username){
 global $conn;
 $stmt = $conn->prepare( "SELECT coordenator_id FROM project,(SELECT users_id FROM users WHERE username=:username) AS iduser WHERE iduser.users_id=project.coordenator_id");
 $stmt->bindParam(':username', $username);
 $stmt->execute();
 $rows = $stmt->fetch(PDO::FETCH_NUM);
if($rows>1){
   return true;
 }
 return false;
}
////////////////////////////////////////////////////////GETS/////////////////////////////////////////////////////////////
  //get projects info
function getProjInfo($name){
  global $conn;
  $username = $_SESSION['username'];
  $stmt = $conn->prepare("SELECT * FROM project,(SELECT project_id FROM users_project,(SELECT users_id FROM users WHERE username=:username) AS iduser WHERE iduser.users_id=users_project.users_id) AS projid WHERE name=:name AND projid.project_id=project.project_id");
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':username', $username);
  $stmt->execute();
  return $stmt->fetch();
}

function getAllProj($name){
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM project WHERE name=:name");
  $stmt->bindParam(':name', $name);
  $stmt->execute();
  return $stmt->fetch();
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
function getTasksfromTList($name){
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM task,(SELECT project_id FROM project WHERE name=:name) AS idproj WHERE task.project_id=idproj.project_id AND task.task_list_id IS NOT NULL ORDER BY task.task_list_id");
  $stmt->bindParam(':name', $name);
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

 //get task lists from project
function getTaskListId($projname, $name){
  global $conn;
  $stmt = $conn->prepare("SELECT task_list_id FROM task_list,(SELECT project_id FROM project WHERE name=:projname) AS idproj WHERE task_list.project_id=idproj.project_id AND task_list.name=:name");
  $stmt->bindParam(':projname', $projname);
  $stmt->bindParam(':name', $name);
  $stmt->execute();
  return $stmt->fetch();
}


function getProjects(){
  global $conn;
  $username = $_SESSION['username'];
  $stmt = $conn->prepare("SELECT name FROM project, users_project WHERE (users_project.users_id=(SELECT users_id FROM users WHERE username=:username) AND users_project.project_id = project.project_id)");
  $stmt->bindParam(':username', $username);
  $stmt->execute();
  return $stmt->fetchAll();
}
function getProjs($string){
  global $conn;
  $query = $conn->prepare("SELECT * FROM project WHERE name LIKE ? AND (users_project.project_id = project.project_id OR project.public = 'true')");
  $query->execute(array('%' . $string . '%'));
  return $query->fetchAll();
}
/////////////////////////////////////////////////REMOVES///////////////////////////////////////////////////////////////
function removeTaskList($name){
  global $conn;
  $stmt = $conn->prepare("DELETE FROM task_list WHERE name=:name");
  $stmt->bindParam(':name', $name);
  $stmt->execute();
  return true;
}
function removeTask($task_id){
  global $conn;
  $stmt = $conn->prepare("DELETE FROM task WHERE task_id=:task_id");
  $stmt->bindParam(':task_id', $task_id);
  $stmt->execute();
  return true;
}
/////////////////////////////////////////////ADD/////////////////////////////////////////////////////////////////////
/*function addMember($name, $newmem){
  global $conn;
  $username = $_SESSION['username'];
  $stmt = $conn->prepare("INSERT INTO users_project (project_id,users_id,insert_date) VALUES ((SELECT project_id FROM project WHERE name=:name),:newmem,:insert_date) WHERE (SELECT coordenator_id FROM project,(SELECT users_id FROM users WHERE username=:username) as idcoord WHERE project.coordenator_id=idcoord.users_id)");
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':newmem', $newmem);
   $stmt->bindParam(':username', $username);
  $stmt->execute();
  return true;
}*/

?>
