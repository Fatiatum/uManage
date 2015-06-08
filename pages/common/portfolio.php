<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/project.php');
include_once($BASE_DIR .'database/admin.php');

if (!(isset($_SESSION['username'])) && !(isset($_SESSION['admin']))) {
  $_SESSION['error_messages'][] = 'Undefined username';
  header("Location: $BASE_URL");
  exit;
}

if(isset($_SESSION['username'])){
  if(!$_GET['search']){
    $projects = getProjects();
  }
  else{
    $projects = getProjs($_GET['search']);
  }
}
else{
  if(!$_GET['search']){
    $projects = getAllProjects();
    $users = getAllUsers();
  }
  else{
    $projects = getAllProjs($_GET['search']);
    $users = getUsers($_GET['search']);
  }

  foreach ($users as &$user) {
    unset($photo);
    if (file_exists($BASE_DIR.'images/users/'.$user['username'].'.png'))
      $photo = 'images/users/'.$user['username'].'.png';
    if (file_exists($BASE_DIR.'images/users/'.$user['username'].'.jpg'))
      $photo = 'images/users/'.$user['username'].'.jpg';
    if (!$photo) $photo = 'images/assets/default_user.png';
    $user['photo'] = $photo;

    $smarty->assign('users', $users);
  }
}


foreach ($projects as &$proj) {
  unset($photo);
  if (file_exists($BASE_DIR.'images/users/'.$project['name'].'.png'))
    $photo = 'images/users/'.$project['username'].'.png';
  if (file_exists($BASE_DIR.'images/users/'.$project['name'].'.jpg'))
    $photo = 'images/users/'.$project['name'].'.jpg';
  if (!$photo) $photo = 'images/assets/default_user.png';
  $proj['photo'] = $photo;
}

$smarty->assign('projects', $projects);
$smarty->display('common/portfolio.tpl');

?>
