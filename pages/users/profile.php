<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  if (!$_SESSION['username']) {
    $_SESSION['error_messages'][] = 'Undefined username';
    header("Location: $BASE_URL");
    exit;
  }

  $username = $_SESSION['username'];
  $user = getUser();
  $projects = getUserProj();

  unset($user_photo);
  if (file_exists($BASE_DIR.'images/users/'.$user['username'].'.png'))
      $user_photo = 'images/users/'.$user['username'].'.png';
  if (file_exists($BASE_DIR.'images/users/'.$user['username'].'.jpg'))
      $user_photo = 'images/users/'.$user['username'].'.jpg';
  if (!$user_photo) $user_photo = 'images/assets/default_user.png';
  $user['photo'] = $user_photo;

  foreach ($projects as $proj) {
    unset($photo);
    if (file_exists($BASE_DIR.'images/users/'.$proj['name'].'.png'))
      $photo = 'images/users/'.$proj['name'].'.png';
    if (file_exists($BASE_DIR.'images/users/'.$proj['name'].'.jpg'))
      $photo = 'images/users/'.$proj['name'].'.jpg';
    if (!$photo) $photo = 'images/assets/default_user.png';
    $proj['photo'] = $photo;
  }

  $smarty->assign('user',$user);
  $smarty->assign('last_project_id', $projects[0]['id']);
  $smarty->assign('projects', $projects);
  $smarty->display('users/profile.tpl');
?>
