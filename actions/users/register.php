<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  if(isset($_SESSION['username'])){
    header("Location: $BASE_URL" . 'pages/users/profile.php');
  }

  if (!$_POST['email'] || !$_POST['name']  || !$_POST['username'] || !$_POST['password']) {
    $_SESSION['error_messages'][] = 'All fields are mandatory';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/register.php');
    exit;
  }

  $name = strip_tags($_POST['name']);
  $email = strip_tags($_POST['email']);
  $username = strip_tags($_POST['username']);
  $password = $_POST['password'];
  $pass = sha1($password);
  $photo = $_FILES['photo'];
  $extension = end(explode(".", $photo["name"]));

  
  try {
    createUser($name, $email, $username, $pass);
    move_uploaded_file($photo["tmp_name"], $BASE_DIR . "images/users/" . $USERNAME . '.' . $extension); // this is dangerous
    chmod($BASE_DIR . "images/users/" . $username . '.' . $extension, 0644);
  } catch (PDOException $e) {

    if (strpos($e->getMessage(), 'users_pkey') !== false) {
      $_SESSION['error_messages'][] = 'Duplicate username';
      $_SESSION['field_errors']['username'] = 'Username already exists';
    }
    else $_SESSION['error_messages'][] = 'Error creating user: ' . $e->getMessage();

    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/register.php');
    exit;
  }
  $_SESSION['username'] = $username;
  $_SESSION['success_messages'][] = 'User registered successfully';
  header("Location: $BASE_URL" . 'pages/users/profile.php');
  
?>
