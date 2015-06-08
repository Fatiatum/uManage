<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 21:15:31
         compiled from "/usr/users2/mieic2012/ei12046/public_html/uManage/templates/common/portfolio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:846500966557300f3439890-67354199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d4236823a073cd10d4741504e8fdd6dee564e5c' => 
    array (
      0 => '/usr/users2/mieic2012/ei12046/public_html/uManage/templates/common/portfolio.tpl',
      1 => 1433788250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '846500966557300f3439890-67354199',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_557300f356e109_51408872',
  'variables' => 
  array (
    'projects' => 0,
    'BASE_URL' => 0,
    'project' => 0,
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557300f356e109_51408872')) {function content_557300f356e109_51408872($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!-- ========== HEADER SECTION ========== -->
<section id="home" name="home"></section>
<div id="portwrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
      </div>
    </div>
  </div><!-- /container -->
</div><!-- /headerwrap -->


<!-- Page Content -->
<div id= "port" class="container">
  <!-- /.row -->
  <div id="search-bar" class="container">
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" id="ser-btn" class="btn btn-default"><i class="icon-large icon-search"></i></button>
    </form>
  </div>
  <!-- Page Header -->
  <div id= "header_title"class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Projects
        <br>
        <?php if (isset($_SESSION['username'])) {?>
        <small style="padding-left: 15px">   All uR projects and public projects</small>
        <?php }?>
      </h1>
    </div>
  </div>
  


  <!-- Projects Row -->
  <div class="row">
    <?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['project']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value) {
$_smarty_tpl->tpl_vars['project']->_loop = true;
?>
    <div class="col-md-4 portfolio-item">
      <a href="#">
        <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['project']->value['photo'];?>
" alt="">
      </a>
      <h3>
        <a class="name" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/projects/projects.php?name=<?php echo $_smarty_tpl->tpl_vars['project']->value['name'];?>
" class="name">@<?php echo $_smarty_tpl->tpl_vars['project']->value['name'];?>
</a>
      </h3>
        <a id="remove" title="Remove Project" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/common/removeProj.php?name=<?php echo $_smarty_tpl->tpl_vars['project']->value['name'];?>
" data-toggle="modal" style="color: #f2f2f2;">
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </a>
      <div class="project-description"><?php echo $_smarty_tpl->tpl_vars['project']->value['text'];?>
</div>
    </div>
    <?php } ?>
  </div>
  <!-- /.row -->

  <!-- Projects Row -->
  <?php if (isset($_SESSION['admin'])) {?>
  <div id= "header_title"class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Users
        <br>
      </h1>
    </div>
  </div>

  <div class="row">
    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
    <div class="col-md-4 portfolio-item">
      <a href="#">
        <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['user']->value['photo'];?>
" alt="">
      </a>
      <h3>
        <a class="name" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/profile.php?username=<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" class="name">@<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</a>
      </h3>
      <a id="remove" title="Remove Project" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/common/removeUser.php?username=<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" data-toggle="modal" style="color: #f2f2f2;">
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
      </a>
    </div>
    <?php } ?>
  </div>
  <!-- /.row -->
  <?php }?>

  <hr>

</div>
<!-- /.container -->

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
