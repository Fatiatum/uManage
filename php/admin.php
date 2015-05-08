<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/project.php');

  if (!$_GET['username']) {
    $_SESSION['error_messages'][] = 'Undefined username';
    header("Location: $BASE_URL");
    exit;
  }

  $username = $_GET['username'];

  $projects = getAllProjects();

  foreach ($projects as $key => $project) {
    unset($photo);
    if (file_exists($BASE_DIR.'images/users/'.$project['username'].'.png'))
      $photo = 'images/users/'.$project['username'].'.png';
    if (!$photo) $photo = 'images/assets/default.png';
    $projects[$key]['photo'] = $photo;
  }

  $smarty->assign('admin', $projects);
  $smarty->display('admin/list_projects.tpl');
?>