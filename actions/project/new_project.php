<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/project.php');

if(!isset($_SESSION['username'])){
	header("Location: $BASE_URL" . 'pages/users/register.php');
}

if (!$_POST['name']) {
	$_SESSION['error_messages'][] = 'Fields with * sign are mandatory';
	$_SESSION['form_values'] = $_POST;
	header("Location: $BASE_URL" . 'pages/users/profile.php#new_proj');
	exit;
}

$name = strip_tags($_POST['name']);
$description = strip_tags($_POST['description']);
if(isset($_POST['public']))
	$public = true;
else
	$public = false;
$photo = $_FILES['photo'];

// $stmt=createProject($name, $description, true);
// echo $stmt;
// /*
try {
	createProject($name, $description, $public);
  	createTaskList($name, "Done", NULL);
 	createTaskList($name, "In Progress", NULL);
 	createTaskList($name, "ToDo", NULL);
    move_uploaded_file($photo["tmp_name"], $BASE_DIR . "images/users/" . $username . '.' . $extension); // this is dangerous
    chmod($BASE_DIR . "images/users/" . $username . '.' . $extension, 0644);
} catch (PDOException $e) {

	if (strpos($e->getMessage(), 'project_pkey') !== false) {
		$_SESSION['error_messages'][] = 'Duplicate project name';
	}
	else $_SESSION['error_messages'][] = 'Error creating project';
	$_SESSION['form_values'] = $_POST;
	header("Location: $BASE_URL" . 'pages/users/register.php');
	exit;
}

$_SESSION['success_messages'][] = 'Project created successfully';
header("Location: $BASE_URL" . 'pages/projects/projects.php?name=' . $name);

?>
