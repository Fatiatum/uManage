<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/project.php');

if (!$_SESSION['username']) {
  $_SESSION['error_messages'][] = 'Undefined username';
  header("Location: $BASE_URL");
  exit;
}

// GET ALL PROJECTS
// RESTRICT AFTER ONKEYDOWN
// COPY CODE TO ACTIONS FOLDER

$projects = getProjects();


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
