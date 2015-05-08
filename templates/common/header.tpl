<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="{$BASE_URL}images/assets/s1.ico">

  <title>uManage</title>

  <!-- Bootstrap core CSS -->
  <link href="{$BASE_URL}/css/bootstrap.css" rel="stylesheet">
  <link href="{$BASE_URL}/css/profile.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{$BASE_URL}/css/sb-admin.css" rel="stylesheet">
  <link href="{$BASE_URL}/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="{$BASE_URL}/css/font-awesome.min.css">
  <script src="{$BASE_URL}/javascript/jquery.min.js"></script>
  <script src="{$BASE_URL}/javascript/Chart.js"></script>
  <script src="{$BASE_URL}/javascript/modernizr.custom.js"></script>

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
    {if $USERNAME}
      {include file='common/navbar-logged-in.tpl'}
    {else}
      {include file='common/navbar-register.tpl'}
    {/if}
  </nav>
