<?php 
include_once('../../config/init.php');
include_once($BASE_DIR .'database/project.php');

if(!isset($_SESSION['username'])){
    header("Location: $BASE_URL" . 'pages/users/index.php');
 }


if (!$_GET['task_list_name']) {
    $_SESSION['error_messages'][] = 'Expected project name';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/profile.php');
    exit;
}

removeTaskList($_GET['task_list_name']);
header("Location: $BASE_URL" . 'pages/projects/projects.php?name=' . $_GET['name']);


?>