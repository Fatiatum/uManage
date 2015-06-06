<?php /* Smarty version Smarty-3.1.15, created on 2015-06-06 16:14:42
         compiled from "/usr/users2/mieic2012/ei12046/public_html/uManage/templates/common/navbar-logged-in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2075810223557300527a5570-72758779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55ce9b1f79d8e43ec3972d89ff8e4f6a46884712' => 
    array (
      0 => '/usr/users2/mieic2012/ei12046/public_html/uManage/templates/common/navbar-logged-in.tpl',
      1 => 1433600024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2075810223557300527a5570-72758779',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USERNAME' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_557300527c6644_16971781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557300527c6644_16971781')) {function content_557300527c6644_16971781($_smarty_tpl) {?><div class="container">
  <div class="navbar-header page-scroll">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a id="Title" class="navbar-brand page-scroll" href="../users/profile.php">uManage</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div id ="nav_content" class="collapse navbar-collapse navbar-ex1-collapse">
    <ul  class="nav navbar-right top-nav">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="icon-large  icon-envelope"></i>
          <b style="margin-left: 5px" class="caret"></b></a>
          <ul id= "cont-bar" class="dropdown-menu message-dropdown">
            <li class="message-preview">
              <a href="#">
                <div class="media">
                  <span class="pull-left">
                    <img class="media-object" src="http://placehold.it/50x50" alt="">
                  </span>
                  <div class="media-body">
                    <h5 class="media-heading">
                      <strong>User</strong>
                    </h5>
                    <p class="small text-muted">
                      <i class="icon-large  icon-time"></i>
                      Yesterday at 4:32 PM
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                  </div>
                </div>
              </a>
            </li>
            <li class="message-footer">
              <a href="#">Read All New Messages</a>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="icon-large  icon-bell"></i>
            <b style="margin-left: 5px" class="caret"></b></a>
            <ul id= "cont-bar" class="dropdown-menu alert-dropdown">
              <li>
                <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
              </li>
              <li>
                <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
              </li>
              <li>
                <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#">View All</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
 <b class="caret"></b></a>
            <ul  id= "cont-bar" class="dropdown-menu">
              <li >
                <a  href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/profile.php"><i class="icon-large icon-user"></i> Profile</a>
              </li>
              <li class="active">
                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/common/portfolio.php"><i class="icon-large icon-th"></i> Portfolio</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php"><i class="icon-large icon-off"></i> Log Out</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
</div>
<?php }} ?>
