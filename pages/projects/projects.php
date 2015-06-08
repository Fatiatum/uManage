<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/project.php');

  if (!$_SESSION['username'] && !$_SESSION['admin']) {
    $_SESSION['error_messages'][] = 'Undefined username';
    header("Location: $BASE_URL");
    exit;
  }

$project_name=$_GET["name"];
$project = getProjInfo($project_name);
$tasksInLists = getTasksfromTList($project_name);
$tasksLists = getTaskList($project_name);
$tasks = getTasks($project_name);
$listsIds = getTaskListIds($project_name);

//var_dump($tasksLists);
// var_dump($tasksInLists) ;

foreach ($tasksInLists as $array){
 $tempVar = $array['task_list_id'];
  foreach ($tasksLists as $array2){
      if($array2['task_list_id'] == $tempVar){
        $result[$tempVar] = $array2['name'];
        break;
      } 
 }
}

foreach($tasksInLists as $tl){
  $tsklis[$tl["task_list_id"]][] = $tl;
}

foreach ($tasksLists as $list) {
  foreach ($listsIds as $id) {
    if($id == $list['task_list_id'])
      $cont++;
  }
  if(cont==0)
    $emptyList[]=$list;
}

  $smarty->assign('tasks', $tasks);
  $smarty->assign('project',$project);
  $smarty->assign('result',$result);
  $smarty->assign('tsklis',$tsklis);
  $smarty->display('project/project.tpl');
  
?>
