<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  if (!$_SESSION['username'] && !$_SESSION['admin']) {
    $_SESSION['error_messages'][] = 'Undefined username';
    header("Location: $BASE_URL");
    exit;
  }

  if(isset($_SESSION['username']))
    $username = $_SESSION['username'];
  else
    $username = $_GET['username'];

  $user = getUser($username);
  $projects = getUserProj($username);

  unset($user_photo);
  if (file_exists($BASE_DIR.'images/users/'.$user['username'].'.png'))
      $user_photo = 'images/users/'.$user['username'].'.png';
  if (file_exists($BASE_DIR.'images/users/'.$user['username'].'.jpg'))
      $user_photo = 'images/users/'.$user['username'].'.jpg';
  if (!$user_photo) $user_photo = 'images/assets/default_user.png';
  $user['photo'] = $user_photo;

  foreach ($projects as $key => $project) {
    unset($photo);
    if (file_exists($BASE_DIR.'images/users/'.$project['name'].'.png'))
      $photo = 'images/users/'.$project['username'].'.png';
    if (file_exists($BASE_DIR.'images/users/'.$project['name'].'.jpg'))
      $photo = 'images/users/'.$project['name'].'.jpg';
    if (!$photo) $photo = 'images/assets/default_user.png';
    $projects[$key]['photo'] = $photo;
  }

  $smarty->assign('user',$user);
  $smarty->assign('projects', $projects);
  $smarty->display('users/profile.tpl');
?>
