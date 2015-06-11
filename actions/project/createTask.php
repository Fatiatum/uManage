<?php 
include_once('../../config/init.php');
include_once($BASE_DIR .'database/project.php');

if(!isset($_SESSION['username'])){
    header("Location: $BASE_URL" . 'pages/users/index.php');
 }


if (!isset($_POST['text'])) {
    $_SESSION['error_messages'][] = 'Expected project name';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/profile.php');
    exit;
}

$tl_id=getTaskListId($_GET['name'], "ToDo"); 


if(isset($_POST['task_date']))
	createTask($_GET['name'],$tl_id['task_list_id'], $_POST['task_date'], $_POST['text']);
else
	createTask($_GET['name'],$tl_id['task_list_id'], NULL, $_POST['text']);
header("Location: $BASE_URL" . 'pages/projects/projects.php?name=' . $_GET['name']);

?>