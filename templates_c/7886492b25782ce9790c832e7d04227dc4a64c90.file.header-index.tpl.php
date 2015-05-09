<?php /* Smarty version Smarty-3.1.15, created on 2015-05-09 00:55:10
         compiled from "/usr/users2/mieic2012/ei12030/public_html/uManage/templates/common/header-index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1444850530554d3eced38844-49776633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7886492b25782ce9790c832e7d04227dc4a64c90' => 
    array (
      0 => '/usr/users2/mieic2012/ei12030/public_html/uManage/templates/common/header-index.tpl',
      1 => 1431124182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1444850530554d3eced38844-49776633',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_554d3eced61ba5_02836880',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554d3eced61ba5_02836880')) {function content_554d3eced61ba5_02836880($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/s1.ico">

  <title>uManage</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/profile.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/sb-admin.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/font-awesome.min.css">
  <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/javascript/jquery.min.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/javascript/Chart.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/javascript/modernizr.custom.js"></script>

  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="assets/js/html5shiv.js"></script>
  <script src="assets/js/respond.min.js"></script>
  <![endif]-->
</head>
<body id="proj-body" data-spy="scroll" data-offset="0" data-target="#theMenu">
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a id="Title" class="navbar-brand page-scroll" href="#home">uManage</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div id ="nav_content" class="collapse navbar-collapse navbar-ex1-collapse">
        <ul  class="nav navbar-nav ">
          <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
          <li class="hidden"><a class="page-scroll" href="#home"></a></li>
          <li><a class="page-scroll" href="#tools">Tools</a></li>
          <li><a class="page-scroll" href="#portfolio">Projects</a></li>
          <li><a class="page-scroll" href="#about">About</a></li>
          <li><a class="page-scroll" href="#cont">Contact</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Log In</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>
<?php }} ?>
