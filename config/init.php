<?php
  session_set_cookie_params(3600, '/~ei12030');
  session_start();

  error_reporting(E_ERROR | E_WARNING); // E_NOTICE by default

  $BASE_DIR = '/usr/users2/mieic2012/ei12030/public_html/uManage/';
  $BASE_URL = '/~ei12030/uManage/';

  $conn = new PDO('pgsql:host=vdbm;dbname=lbaw1425', 'lbaw1425', 'fQ716tx3');
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $conn->exec('SET SCHEMA \'public\'');

  include_once($BASE_DIR . '/lib/smarty/Smarty.class.php');

  $smarty = new Smarty;
  $smarty->template_dir = $BASE_DIR . 'templates/';
  $smarty->compile_dir = $BASE_DIR . 'templates_c/';
  $smarty->assign('BASE_URL', $BASE_URL);

  $smarty->assign('ERROR_MESSAGES', $_SESSION['error_messages']);
  $smarty->assign('FIELD_ERRORS', $_SESSION['field_errors']);
  $smarty->assign('SUCCESS_MESSAGES', $_SESSION['success_messages']);
  $smarty->assign('FORM_VALUES', $_SESSION['form_values']);
  $smarty->assign('USERNAME', $_SESSION['username']);

  unset($_SESSION['success_messages']);
  unset($_SESSION['error_messages']);
  unset($_SESSION['field_errors']);
  unset($_SESSION['form_values']);
?>
