<?php 
include_once('../../config/init.php');
include_once($BASE_DIR .'database/admin.php');

if(!isset($_SESSION['admin'])){
    header("Location: $BASE_URL" . 'pages/common/profile.php');
 }


if (!$_GET['name']) {
    $_SESSION['error_messages'][] = 'Expected project name';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/common/portfolio.php');
    exit;
}

removeProj($_GET['name']);
header("Location: $BASE_URL" . 'pages/common/portfolio.php');


?>