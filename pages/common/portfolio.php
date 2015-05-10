<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/project.php');
  
  if (!isset($_SESSION['username'])) {
    $_SESSION['error_messages'][] = 'Undefined username';
    header("Location: $BASE_URL");
    exit;
  }

  $username = $_GET['username'];
  $projects = getProjects($username);

  foreach ($projects as $key => $project) {
    unset($photo);
    if (file_exists($BASE_DIR.'images/users/'.$project['name'].'.png'))
      $photo = 'images/users/'.$project['username'].'.png';
    if (file_exists($BASE_DIR.'images/users/'.$project['name'].'.jpg'))
      $photo = 'images/users/'.$project['name'].'.jpg';
    if (!$photo) $photo = 'images/assets/default_proj.png';
    $projects[$key]['photo'] = $photo;
  }

  $smarty->assign('last_project_id', $projects[0]['id']);
  $smarty->assign('projects', $projects);
  $smarty->display('common/portfolio.tpl');
  
?>
