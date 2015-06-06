{include file='common/header.tpl'}

<div id="wrapper">

  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

    <!-- Top Menu Items -->
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul id="side-bar" class="nav navbar-nav side-nav">
        <li class="active">
          <a href="bootstrap-elements.html"><i class="icon-large icon-desktop"></i> Activity</a>
        </li>
        <li>
          <a href="forum.html"><i class="icon-large icon-inbox"></i> Forum</a>
        </li>
        <li>
          <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="icon-large icon-wrench"></i> Tools <i class="icon-large icon-caret"></i></a>
          <ul id="demo" class="collapse">
            <li>
              <a href="#">Dropdown Item</a>
            </li>
            <li>
              <a href="#">Dropdown Item</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </nav>

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
      <h1 class="page-header">
        My Project
      </h1>
    </div>
  </div>
  <!-- /.row -->
</div>

<!-- /#wrapper -->
<div id="projs-content">

  <div class="container-fluid">

    <div class="col-sm-4">
      <div class="panel panel-green">
        <div class="panel-heading">
          <h3 class="panel-title">Done
            <button type="button" id="plus-btn" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <span class="caret"></span>
            </button>
          </h3>
        </div>
        <div  class="panel-body">
          <div class="panel panel-default">
            <div id="task" class="panel-heading">
              <h3 class="panel-title">Task #1</h3>
            </div>
            <div class="panel-body">
              Description
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.col-sm-4 -->
    <div class="col-sm-4">
      <div class="panel panel-yellow">
        <div class="panel-heading">
          <h3 class="panel-title">In Progress <button type="button" id="plus-btn" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <span class="caret"></span></button></h3>
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
            <h3 class="panel-title">To Do
              <button type="button" id="plus-btn" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
              </button>
            </h3>
          </div>
          <div class="panel-body">
            Panel content
          </div>
        </div>
      </div>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- /#page-wrapper -->

  <!-- jQuery -->
  <script src="assets/js/jquery.js"></script>

{include file='common/footer.tpl'}
