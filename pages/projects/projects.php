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


 /*
foreach ($tasksLists as $key => $array){
 foreach ($array as $key2 => $value) {
    echo $key . ' ' . $key2 . ' ' . $value . 'novo elem' ;
 }
  
}*/

/*foreach($tasksInLists as $value)
{
      var_dump($tasksInLists) ;
      echo $tasksLists[$value['task_list_id']]['name'];
      
  //$tasksLists[$task['task_list_id']]["name"];
  //echo $key . 'points to'.$value;
  //$taskName[] = $value => $a["name"];
    //var_dump($taskName[$a["task_list_id"]]);
}*/

foreach($tasksInLists as $tl){
  $tsklis[$tl["task_list_id"]][] = $tl;
}/*
foreach($tasksInLists as $tl){
  var_dump(key(taskName[$tl["task_list_id"]]));
}
*//*
foreach ($tsklis as $list) {
  var_dump($result[$list[0]["task_list_id"]]);
}
*/



  $smarty->assign('tasks', $tasks);
  $smarty->assign('project',$project);
  $smarty->assign('result',$result);
  $smarty->assign('tsklis',$tsklis);
  $smarty->display('project/project.tpl');
  
?>
