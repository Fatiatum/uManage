<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 20:31:30
         compiled from "/usr/users2/mieic2012/ei12046/public_html/uManage/templates/users/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17655933535573005261d3d6-42057696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62c49b643f8d768c0fe632e6350c2ce1a3fd60b5' => 
    array (
      0 => '/usr/users2/mieic2012/ei12046/public_html/uManage/templates/users/profile.tpl',
      1 => 1433788250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17655933535573005261d3d6-42057696',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_557300527563a1_97426426',
  'variables' => 
  array (
    'ERROR_MESSAGES' => 0,
    'error' => 0,
    'user' => 0,
    'BASE_URL' => 0,
    'projects' => 0,
    'project' => 0,
    'last_project_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557300527563a1_97426426')) {function content_557300527563a1_97426426($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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

<!-- ERROR PANEL -->
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">
      <div id="error_messages">
        <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
        <div class="error" id= "error-msg"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<a class="close">X</a></div>
        <?php } ?>
      </div>
    </h1>
  </div>
</div>

<div id="info" class="container">
  <div class="panel panel-info">
    <div class="panel-heading">
      <h3 class="panel-title " style="margin-bottom: 3%"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div id ="profile-div" class="col-md-3 col-lg-3 " align="left"> 
          <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['user']->value['photo'];?>
" class="img-circle"> 
        </div>


        <div class=" col-md-9 col-lg-9 ">
          <table class="table table-user-information">
            <tbody>
              <tr>
                <td>Username:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
              </tr>
              <tr>
                <td>Email</td>
                <td><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</a></td>
              </tr>
              <tr>
                <td>Member since:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['register_date'];?>
</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

</div>

<section id="my_projects">
  <h2> My Projects
    <a id="plus" title="New Project" href="#new_proj" data-toggle="modal" >
      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
    </a>
  </h2>
  
  <div class="row">
    <?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['project']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value) {
$_smarty_tpl->tpl_vars['project']->_loop = true;
?>
    <div class="col-md-4 portfolio-item">
      <h2>
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['project']->value['photo'];?>
" class="img-circle">
        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/projects/projects.php?name=<?php echo $_smarty_tpl->tpl_vars['project']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['project']->value['name'];?>
</a>

      </h2>
      
    </a>
  </div>
  <?php } ?>
</div>

</section>


<div class="modal fade" id="new_proj" role="dialog"> 
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" role="form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/project/new_project.php" method="post">
        <div class="modal-header">
          <h3 id="modalLabel">Create New Project</h3>
        </div>
        

        <div class="modal-body" style="padding-bottom: 5%"> 
          <div style="margin-bottom: 3%; margin-left: 80%;">*Required field </div>
          <div class="form-group" >
            <label style="text-align: left; padding-left: 5%;" for="proj-photo" class="col-lg-2 control-label">Photo:</label>
            <div class="col-lg-10">
              <input id="photo" name="photo" type="file" class="col-md-10" style="margin-top:1%;">
            </div>
          </div>

          <div class="form-group">
            <label style="text-align: left; padding-left: 5%;" for="proj-name" class="col-lg-2 control-label">*Name:</label>
            <div class="col-lg-8" style="padding-left: 5%;">
              <input id="name" name="name" type="text" class="col-md-8" placeholder="name" style="margin-top:1%;">
            </div>
          </div>

          <div class="form-group">
            <label style="text-align: left; padding-left: 5%;" for="proj-description" class="col-lg-2 control-label">Description:</label>
            <div class="col-lg-10" style="padding-left: 5%;">
              <input id="description" name="description" type="text" class="col-md-8" placeholder="description" style="margin-top:1%;">
            </div>
          </div>

          <div class="form-group">
            <label style="text-align: left; padding-left: 5%;" for="proj-visibility" class="col-lg-2 control-label">*Public:</label>
            <div class="col-lg-10">
              <input id="public" name="public" type="checkbox" style="margin-left:3%; margin-top:2%;">
            </div>
          </div>

        </div>

        <div class="modal-footer">
          <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">cancel</button>
          <input name="sub" type="submit" class="btn btn-primary" value="submit">
        </div>


      </form>
    </div>

  </div>
</div>


<script>last_project_id = <?php echo $_smarty_tpl->tpl_vars['last_project_id']->value;?>
</script>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
