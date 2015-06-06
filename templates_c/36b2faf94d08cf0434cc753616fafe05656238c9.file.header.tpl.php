<?php /* Smarty version Smarty-3.1.15, created on 2015-06-06 16:14:35
         compiled from "/usr/users2/mieic2012/ei12046/public_html/uManage/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7942661655573004b518721-69043464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36b2faf94d08cf0434cc753616fafe05656238c9' => 
    array (
      0 => '/usr/users2/mieic2012/ei12046/public_html/uManage/templates/common/header.tpl',
      1 => 1433600024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7942661655573004b518721-69043464',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5573004b579319_37108765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5573004b579319_37108765')) {function content_5573004b579319_37108765($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/s1.ico">

  <title>uManage</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/profile.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/register.css" rel="stylesheet">
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
    <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
      <?php echo $_smarty_tpl->getSubTemplate ('common/navbar-logged-in.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
      <?php echo $_smarty_tpl->getSubTemplate ('common/navbar-register.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
  </nav>
<?php }} ?>
