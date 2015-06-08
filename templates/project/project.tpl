{include file='common/header.tpl'}

<div id="wrapper">
  {include file='common/header.tpl'}
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
            <div class="btn-group" style="margin-top:-4%; margin-left:40%;">
            <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle" style="margin-letf:0.5%">New 
              <span class="caret" ></span></button>
            <ul class="dropdown-menu" style="margin-left:-170%;">
                <li><a href="#">Task</a></li>
            </ul>
          </div>
          <a id="remove" title="New Project" href="#new_proj" data-toggle="modal" style="color: #f2f2f2;">
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </a>
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
            <div class="btn-group" style="margin-left: 13.5%; margin-top:-3%;">
            <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle" >New <span class="caret"></span></button>
            <ul class="dropdown-menu" style="margin-left:-175%;">
                <li><a href="#">Task</a></li>
            </ul>
          </div>
           <a id="remove" title="New Project" href="#new_proj" data-toggle="modal" style="color: #f2f2f2;">
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </a>
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
            <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle" >New <span class="caret"></span></button>
            <ul class="dropdown-menu" >
                <li><a href="#">Task</a></li>
            </ul>
          </div>
          <a id="remove" title="New Project" href="#new_proj" data-toggle="modal" style="color: #f2f2f2;">
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </a>
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

{include file='common/footer.tpl'}
