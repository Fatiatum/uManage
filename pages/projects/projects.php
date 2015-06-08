<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/project.php');

  if (!$_SESSION['username']) {
    $_SESSION['error_messages'][] = 'Undefined username';
    header("Location: $BASE_URL");
    exit;
  }
/*
  $project_name=$_GET["name"];
  $project = getProjInfo($project_name);
  $tasksInLists = getTaskList($project_name);
  $tasks = getTasks($project_name);

  $oldList = tasksInLists[0].task_list_id;
  $index=0;
  $i =0;
  foreach($tasksInLists as $tl){
    if($oldList != $tl.task_list_id){
      $index++;
      $i=0;
      $oldList = $tl.task_list_id
    }
    $taskLists[$index][$i] = $tl;
    $i++;
  }
  $smarty->assign('tasks', $tasks);
  $smarty->assign('project',$project);
  $smarty->assign('taskLists',$taskLists);*/
  $smarty->display('project/project.tpl');
  
?>
