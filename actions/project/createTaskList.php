<?php 
include_once('../../config/init.php');
include_once($BASE_DIR .'database/project.php');

if(!isset($_SESSION['username'])){
    header("Location: $BASE_URL" . 'pages/users/index.php');
 }


if (!$_POST['TLName']) {
    $_SESSION['error_messages'][] = 'Expected project name';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/profile.php');
    exit;
}
if($_GET[$task_date])
	createTaskList($_POST['TLName'], $_POST[$task_date]);
else
	createTaskList($_POST['TLName'], NULL);
header("Location: $BASE_URL" . 'pages/projects/projects.php?name=' . $_GET['name']);


?>