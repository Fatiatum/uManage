<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="assets/img/s1.ico">

  <title>uManage</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/profile.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/css/sb-admin.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/Chart.js"></script>
  <script src="assets/js/modernizr.custom.js"></script>

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
      {include file='common/navbar-index.tpl'}
    {/if}
  </nav>
