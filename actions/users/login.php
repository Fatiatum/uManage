<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  if (!$_POST['username'] || !$_POST['password']) {
    $_SESSION['error_messages'][] = 'Invalid login';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/register.php');
    exit;
  }

  $username = $_POST['username'];
  $password = $_POST['password'];
  
  if (isLoginCorrect($username, $password)) {
    $_SESSION['username'] = $username;
    $_SESSION['success_messages'][] = 'Login successful';
    header("Location: $BASE_URL" . 'pages/users/profile.php');
  }
   $_SESSION['error_messages'][] = 'Error on Login';
  header("Location: $BASE_URL" . 'pages/users/portfolio.php');
?>
