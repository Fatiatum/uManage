<?php /* Smarty version Smarty-3.1.15, created on 2015-05-09 21:47:56
         compiled from "/usr/users2/mieic2012/ei12030/public_html/uManage/templates/users/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:993304635554d42afbfa118-88726980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e807cc989a9bc71efff64603a460ceb582d3f30b' => 
    array (
      0 => '/usr/users2/mieic2012/ei12030/public_html/uManage/templates/users/profile.tpl',
      1 => 1431200806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '993304635554d42afbfa118-88726980',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_554d42afc7c211_65123880',
  'variables' => 
  array (
    'projects' => 0,
    'BASE_URL' => 0,
    'project' => 0,
    'last_project_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554d42afc7c211_65123880')) {function content_554d42afc7c211_65123880($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
<div id="info" class="container">
  <div class="panel panel-info">
    <div class="panel-heading">
      <h3 class="panel-title ">Jorge Teixeira</h3>
      <span style= "margin-left:95%" class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
    </div>
    <div class="panel-body">
      <div class="row">
        <div id ="profile-div" class="col-md-3 col-lg-3 " align="left"> <img alt="User Pic" src="http://bit.ly/1EeNkX0" class="img-circle"> </div>


        <div class=" col-md-9 col-lg-9 ">
          <table class="table table-user-information">
            <tbody>
              <tr>
                <td>Username:</td>
                <td>@jorgefilipeteixeira</td>
              </tr>
              <tr>
                <td>Email</td>
                <td><a href="mailto:jorge_teixeira@gmail.com">jorge_teixeira@gmail.com</a></td>
              </tr>
              <tr>
                <td>Gender:</td>
                <td>Male</td>
              </tr>
              <tr>
                <td>Member since:</td>
                <td>10/03/2015</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="my-projs" class="panel-projects">
  <div id="header_title" class="row">
    <div class="col-lg-12">
      <h1 class="page-header">My Projects</h1>
    </div>
  </div>
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
</div>

<script>last_project_id = <?php echo $_smarty_tpl->tpl_vars['last_project_id']->value;?>
</script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
