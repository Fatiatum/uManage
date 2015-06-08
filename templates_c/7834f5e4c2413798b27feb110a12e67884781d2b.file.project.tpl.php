<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 12:42:18
         compiled from "/usr/users2/mieic2012/ei12046/public_html/uManage/templates/project/project.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1889722664557485838bc181-58041138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7834f5e4c2413798b27feb110a12e67884781d2b' => 
    array (
      0 => '/usr/users2/mieic2012/ei12046/public_html/uManage/templates/project/project.tpl',
      1 => 1433760132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1889722664557485838bc181-58041138',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_557485839bfcc1_94840925',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557485839bfcc1_94840925')) {function content_557485839bfcc1_94840925($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="wrapper">
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

  <!-- Page Heading -->
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header" style="padding-left:3%; font-size:250%;">
        $project.name
        <div class="btn-group">
            <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">New <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#">Task List</a></li>
                <li><a href="#">Task</a></li>
            </ul>
        </div>

      </h1>
    </div>
  </div>
  <!-- /.row -->
</div>

<!-- /#wrapper -->
<div id="projs-content">

  <div class="container-fluid" style="margin-left:-15%; padding-bottom:10%;">

    <div class="col-sm-4">
      <div class="panel panel-green">
        <div class="panel-heading">
          <h3 class="panel-title">Done
           <div class="btn-group">
            <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle" style="margin-left: 270%;">New <span class="caret"></span></button>
            <ul class="dropdown-menu" style="margin-left:100%;">
                <li><a href="#">Task</a></li>
            </ul>
          </div>
          </h3>
        </div>           
            <div class="panel-body">
              Description
            </div>
      </div>
    </div>
    <!-- /.col-sm-4 -->
    <div class="col-sm-4">
      <div class="panel panel-yellow">
        <div class="panel-heading">
          <h3 class="panel-title">In Progress 
            <div class="btn-group">
            <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle" style="margin-left: 135%;">New <span class="caret"></span></button>
            <ul class="dropdown-menu" style="margin-left:-40%;">
                <li><a href="#">Task</a></li>
            </ul>
          </div>
          </h3>
          </div>
          <div class="panel-body">
            Panel content
          </div>
        </div>
      </div>
      <!-- /.col-sm-4 -->

      <div class="col-sm-4">
        <div class="panel panel-red">
          <div class="panel-heading">
            <h3 class="panel-title"> $tl 
              <div class="btn-group">
            <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle" style="margin-left: 340%;">New <span class="caret"></span></button>
            <ul class="dropdown-menu" style="margin-left:170%;">
                <li><a href="#">Task</a></li>
            </ul>
          </div>
            </h3>
          </div>
          <div class="panel-body">
            Content
          </div>
        </div>
      </div>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- /#page-wrapper -->

  <!-- jQuery -->
  <script src="assets/js/jquery.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
