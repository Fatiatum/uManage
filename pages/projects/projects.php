<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/project.php');
include_once($BASE_DIR .'database/users.php');

if (!isset($_SESSION['username']) && !isset($_SESSION['admin'])) {
  $_SESSION['error_messages'][] = 'Undefined username';
  header("Location: $BASE_URL");
  exit;
}

$project_name=$_GET["name"];

if(!isset($_SESSION['username'])){
  $user = $_SESSION['admin'];
  $admin=0;
  $project = getAllProj($project_name);
}
else{
  $user = $_SESSION['username'];
  $admin=1;
  $project = getProjInfo($project_name, $user);
}

$tasksInLists = getTasksfromTList($project_name);
$tasksLists = getTaskList($project_name);
$tasks = getTasks($project_name);


foreach ($tasksLists as $list) {
  $idList[] = $list["task_list_id"];
}

foreach ($tasksInLists as $array){
 $tempVar = $array['task_list_id'];
 foreach ($tasksLists as $array2){
  if($array2['task_list_id'] == $tempVar){
    $result[$tempVar] = $array2['name'];
    break;
}}
}

foreach ($tasksLists as $lists) {
  if(!in_array($lists['name'],$result))
    $emptyLists[] = $lists;
}


foreach($tasksInLists as $tl){
  $tsklis[$tl["task_list_id"]][] = $tl;
}

if(isCoordenator($user))
  $coord = 0;
else
  $coord = 1;


$smarty->assign('admin', $admin);
$smarty->assign('coord', $coord);
$smarty->assign('emptyLists', $emptyLists);
$smarty->assign('tasks', $tasks);
$smarty->assign('project',$project);
$smarty->assign('result',$result);
$smarty->assign('tsklis',$tsklis);
$smarty->display('project/project.tpl');
?>
