<?php /* Smarty version Smarty-3.1.15, created on 2015-06-01 12:52:21
         compiled from "/usr/users2/mieic2012/ei12030/public_html/uManage/templates/common/portfolio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:654287440554f58a7808027-25930149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86770384a5a3fe7d6288bfa132428d109fc32b0f' => 
    array (
      0 => '/usr/users2/mieic2012/ei12030/public_html/uManage/templates/common/portfolio.tpl',
      1 => 1431944652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '654287440554f58a7808027-25930149',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_554f58a791ed64_31064697',
  'variables' => 
  array (
    'projects' => 0,
    'BASE_URL' => 0,
    'project' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554f58a791ed64_31064697')) {function content_554f58a791ed64_31064697($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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

  <!-- Page Header -->
  <div id= "header_title"class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Projects
        <br>
        <small style="padding-left: 15px">   All uR projects and public projects</small>
      </h1>
    </div>
  </div>
  <!-- /.row -->
  <div id="search-bar" class="container">
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" id="ser-btn" class="btn btn-default"><i class="icon-large icon-search"></i></button>
    </form>
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
pages/projects/list_projects.php?name=<?php echo $_smarty_tpl->tpl_vars['project']->value['name'];?>
" class="name">@<?php echo $_smarty_tpl->tpl_vars['project']->value['name'];?>
</a>
      </h3>
      <div class="project-description"><?php echo $_smarty_tpl->tpl_vars['project']->value['text'];?>
</div>
    </div>
    <?php } ?>
  </div>
  <!-- /.row -->

  <hr>

  <!-- Pagination -->
  <div class="row text-center">
    <div class="col-lg-12">
      <ul class="pagination">
        <li>
          <a href="#">&laquo;</a>
        </li>
        <li class="active">
          <a href="#">1</a>
        </li>
        <li>
          <a href="#">2</a>
        </li>
        <li>
          <a href="#">3</a>
        </li>
        <li>
          <a href="#">4</a>
        </li>
        <li>
          <a href="#">5</a>
        </li>
        <li>
          <a href="#">&raquo;</a>
        </li>
      </ul>
    </div>
  </div>
  <!-- /.row -->

  <hr>
</div>
<!-- /.container -->

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
