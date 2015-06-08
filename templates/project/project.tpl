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
        {$project['name']}
        <div class="btn-group">
            <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">New <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#new_task_list" data-toggle="modal">Task List</a></li>
                <li><a href="#new_blank_list" data-toggle="modal">Task</a></li>
            </ul>
        </div>

      </h1>
    </div>
  </div>
  <!-- /.row -->
</div>

<!--Create new task list -->
<div class="modal fade" id="new_task_list" role="dialog"> 
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" role="form" action="{$BASE_URL}actions/project/new_task_list.php" method="post">
        <div class="modal-header">
          <h3 id="modalLabel">Create New Task List</h3>
        </div>
        

        <div class="modal-body" style="padding-bottom: 5%"> 
          <div style="margin-bottom: 3%; margin-left: 80%;">*Required field </div>

          <div class="form-group">
            <label style="text-align: left; padding-left: 5%;" for="proj-taskList" class="col-lg-2 control-label">*Name:</label>
            <div class="col-lg-8" style="padding-left: 5%;">
              <input id="name" name="name" type="text" class="col-md-8" placeholder="name" style="margin-top:1%;">
            </div>
          </div>

          <div class="form-group">
            <label style="text-align: left; padding-left: 5%;" for="proj-task" class="col-lg-2 control-label">Task:</label>
            <div class="col-lg-8" style="padding-left: 5%;">
              <input id="task" name="task" type="text" class="col-md-8" placeholder="task" style="margin-top:1%;">
            </div>
          </div>

          <div class="form-group">
            <label style="text-align: left; padding-left: 5%;" for="task_date" class="col-lg-2 control-label">Conclusion Date:</label>
            <div class="col-lg-8" style="padding-left: 5%;">
              <input id="task_date" name="task_date" type="text" class="col-md-8" placeholder="yyyy/mm/dd" style="margin-top:1%;">
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

<!--Create new blank task list -->
<div class="modal fade" id="new_blank_list" role="dialog"> 
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" role="form" action="{$BASE_URL}actions/project/new_blank_list.php" method="post">
        <div class="modal-header">
          <h3 id="modalLabel">Create New Task</h3>
        </div>
        

        <div class="modal-body" style="padding-bottom: 5%"> 
          <div style="margin-bottom: 3%; margin-left: 80%;">*Required field </div>

          <div class="form-group">
            <label style="text-align: left; padding-left: 5%;" for="proj-taskList" class="col-lg-2 control-label">*Name:</label>
            <div class="col-lg-8" style="padding-left: 5%;">
              <input id="name" name="name" type="text" class="col-md-8" placeholder="name" style="margin-top:1%;">
            </div>
          </div>

          <div class="form-group">
            <label style="text-align: left; padding-left: 5%;" for="task_date" class="col-lg-2 control-label">Conclusion Date:</label>
            <div class="col-lg-8" style="padding-left: 5%;">
              <input id="task_date" name="task_date" type="text" class="col-md-8" placeholder="yyyy/mm/dd" style="margin-top:1%;">
            </div>
          </div>

        </div>

        <div class="modal-footer">
          <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">Cancel</button>
          <input name="sub" type="submit" class="btn btn-primary" value="submit">
        </div>


      </form>
    </div>

  </div>
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
            <h3 class="panel-title"> ToDo
              <div class="btn-group" style="margin-left: 50.5%; margin-top:-3%;">
            <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle" >New <span class="caret"></span></button>
            <ul class="dropdown-menu" style="margin-left:-175%">
                <li><a href="#">Task</a></li>
            </ul>
          </div>
          <a id="remove" title="New Project" href="#new_proj" data-toggle="modal" style="color: #f2f2f2;">
          <span class="glyphicon glyphicon-remove" aria-hidden="true" style="margin-left: 2.9%;"></span>
        </a>
            </h3>
          </div>
          <div class="panel-body">
            Content
          </div>
        </div>
      </div>
      {foreach $tsklis as $list}
      <div class="col-sm-4">
      {if ($result[$list[0]["task_list_id"]] == "ToDo")} 
      <div class="panel panel-red">
      {else if ($result[$list[0]["task_list_id"]] == "In Progress" )}
      <div class="panel panel-yellow">
      {else if ($result[$list[0]["task_list_id"]] == "Done" )}
      <div class="panel panel-green">
      {else}
      <div class="panel" style="background-color: #43bbf9;">
      {/if}
        <div class="panel-heading">
          <h3 class="panel-title"> {$result[$list[0]["task_list_id"]]}
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
            {foreach $list as $task}         
            <div class="panel-body">
              {$task["text"]}
            </div>
            {/foreach}
      </div>
    </div>
    {/foreach}

      <!-- Create new blank task list -->
    <div class="col-sm-4" style="padding-top: 5%">         
       <div class="tasks" style="border: 1px solid #000; ">
            Content
          </div>
        
    </div>

  </div>
      
    </div>
    <!-- /.container-fluid -->

  
    <!-- /.container-fluid -->

  </div>
  <!-- /#page-wrapper -->

  <!-- jQuery -->
  <script src="assets/js/jquery.js"></script>

{include file='common/footer.tpl'}