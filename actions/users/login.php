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
$pass = sha1($password);
try{
  if (isLoginCorrect($username, $pass)) {
    $_SESSION['username'] = $username;
    $_SESSION['success_messages'][] = 'Login successful';
    header("Location: $BASE_URL" . 'pages/users/profile.php');
    exit;
  }
  else{
    $_SESSION['error_messages'][] = 'Error on Login';
  }
} catch (PDOException $e) {
  $_SESSION['error_messages'][] = 'Error on Login:' . $e->getMessage();
}
header("Location: $BASE_URL" . 'pages/users/register.php');
?>
