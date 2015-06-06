<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/project.php');

  if(isset($_SESSION['username'])){
    header("Location: $BASE_URL" . 'pages/users/profile.php');
  }

  $project_name=$_GET["name"];

  $project = getProjInfo($project_name);
  
  $taskLists = getProjTaskLists();

  foreach($taskLists as $tl){
    $tl = getTasksFromTL();
  }

  $smarty->assign('project',$project);
  $smarty->assign('taskLists',$taskLists);
  $smarty->display('users/project.tpl');
  
?>
