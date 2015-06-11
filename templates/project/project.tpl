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
        {if ($admin==1)}
        <div class="btn-group">
          <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">New <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#new_task_list" data-toggle="modal">Task List</a></li>
            {if ($coord==0)}
            <hr>
            <li><a href="#add_member" data-toggle="modal">Add Member</a></li>
            <li><a href="#remove_member" data-toggle="modal">Delete Member</a></li>
            {/if}
          </ul>
        </div>
        {/if}
      </h1>
    </div>
  </div>
  <!-- /.row -->
</div>

<!--Add Member -->
<div class="modal fade" id="add_member" role="dialog"> 
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" role="form" action="{$BASE_URL}actions/project/addMember.php?name={$project['name']}" method="post">
        <div class="modal-header">
          <h3 id="modalLabel">Add Member to Project</h3>
        </div>
        

        <div class="modal-body" style="padding-bottom: 5%"> 
          <div style="margin-bottom: 3%; margin-left: 80%;">*Required field </div>

          <div class="form-group">
            <label style="text-align: left; padding-left: 5%;" for="proj-taskList" class="col-lg-2 control-label">*Name:</label>
            <div class="col-lg-8" style="padding-left: 5%;">
              <input id="memberName" name="memberName" type="text" class="col-md-8" placeholder="name" style="margin-top:1%;">
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

<!--Remove Member -->
<div class="modal fade" id="remove_member" role="dialog"> 
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" role="form" action="{$BASE_URL}actions/project/removeMember.php?name={$project['name']}" method="post">
        <div class="modal-header">
          <h3 id="modalLabel">Remove Member from Project</h3>
        </div>
        

        <div class="modal-body" style="padding-bottom: 5%"> 
          <div style="margin-bottom: 3%; margin-left: 80%;">*Required field </div>

          <div class="form-group">
            <label style="text-align: left; padding-left: 5%;" for="proj-taskList" class="col-lg-2 control-label">*Name:</label>
            <div class="col-lg-8" style="padding-left: 5%;">
              <input id="memberName" name="memberName" type="text" class="col-md-8" placeholder="name" style="margin-top:1%;">
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

<!--Create new task list -->
<div class="modal fade" id="new_task_list" role="dialog"> 
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" role="form" action="{$BASE_URL}actions/project/createTaskList.php?name={$project['name']}" method="post">
        <div class="modal-header">
          <h3 id="modalLabel">Create New Task List</h3>
        </div>
        

        <div class="modal-body" style="padding-bottom: 5%"> 
          <div style="margin-bottom: 3%; margin-left: 80%;">*Required field </div>

          <div class="form-group">
            <label style="text-align: left; padding-left: 5%;" for="proj-taskList" class="col-lg-2 control-label">*Name:</label>
            <div class="col-lg-8" style="padding-left: 5%;">
              <input id="TLName" name="TLName" type="text" class="col-md-8" placeholder="name" style="margin-top:1%;">
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

<!--Create new blank task -->
<div class="modal fade" id="new_blank_list" role="dialog"> 
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" role="form" action="{$BASE_URL}actions/project/createTask.php?name={$project['name']}" method="post">
        <div class="modal-header">
          <h3 id="modalLabel">Create New Task</h3>
        </div>
        

        <div class="modal-body" style="padding-bottom: 5%"> 
        <div style="margin-bottom: 3%; margin-left: 80%;">*Required field </div>

          <div class="form-group">
            <label style="text-align: left; padding-left: 5%;" for="task_date" class="col-lg-2 control-label">Conclusion Date:</label>
            <div class="col-lg-8" style="padding-left: 5%;">
              <input id="task_date" name="task_date" type="text" class="col-md-8" placeholder="yyyy/mm/dd" style="margin-top:1%;">
            </div>
          </div>

          <div class="form-group">
            <label style="text-align: left; padding-left: 5%;" for="task_date" class="col-lg-2 control-label">*Text:</label>
            <div class="col-lg-8" style="padding-left: 5%;">
              <input id="text" name="text" type="text" class="col-md-8" placeholder="task description" style="margin-top:1%;">
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




<!--Edit tasks modal -->
<div class="modal fade" id="edit_task" role="dialog"> 
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" role="form" action="{$BASE_URL}actions/project/edit_task.php" method="post">
        <div class="modal-header">
          <h3 id="modalLabel">Edit Task</h3>
        </div>
        

        <div class="modal-body" style="padding-bottom: 5%"> 
          <div style="margin-bottom: 3%; margin-left: 80%;"></div>

          <div class="form-group">
            <label style="text-align: left; padding-left: 5%;" for="proj-taskList" class="col-lg-2 control-label">New Name:</label>
            <div class="col-lg-8" style="padding-left: 5%;">
              <input id="name" name="name" type="text" class="col-md-8" placeholder="name" style="margin-top:1%;">
            </div>
          </div>

          <div class="form-group">
            <label style="text-align: left; padding-left: 5%;" for="task_date" class="col-lg-2 control-label">New Conclusion Date:</label>
            <div class="col-lg-8" style="padding-left: 5%;">
              <input id="task_date" name="task_date" type="text" class="col-md-8" placeholder="yyyy/mm/dd" style="margin-top:1%;">
            </div>
          </div>

          <div class="form-group">
            <label style="text-align: left; padding-left: 5%;" for="task" class="col-lg-2 control-label">Completed:</label>
            <div class="col-lg-10">
              <input id="public" name="public" type="checkbox" style="margin-left:3%; margin-top:2%;">
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
    <!--Lists with tasks-->
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
                {if ($result[$list[0]["task_list_id"]] == "ToDo" && $admin==1)} 
                  <div class="btn-group" style="margin-top:-4%; margin-left:40%;">
                    <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle" style="margin-letf:0.5%">New 
                      <span class="caret" ></span></button>
                      <ul class="dropdown-menu" style="margin-left:-170%;">
                        <li><a href="#new_blank_list" data-toggle="modal">Task</a></li>
                      </ul>
                    </div>
                    {/if}
                    {if ($result[$list[0]["task_list_id"]] != "ToDo" && $admin==1)}
                    <a id="remove" title="Remove Project" href="{$BASE_URL}actions/project/remove_task_list.php?name={$project['name']}&task_list_name={$result[$list[0]['task_list_id']]}" data-toggle="modal" style="color: #f2f2f2;">
                      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </a>
                    {/if}
                  </h3>
                </div>  
                {if ($admin==1)}
                {foreach $list as $task}         
                <div class="panel-body">
                  <p>{$task["text"]}</p>
                </div>
                {/foreach}
                {else}
                  <div class="panel-body"></div>
                {/if}
              </div>
            </div>
            {/foreach}
            <!--Lists without tasks-->
            {foreach $emptyLists as $list}
            <div class="col-sm-4">
              {if ($list["name"] == "ToDo")} 
              <div class="panel panel-red">
                {else if ($list["name"] == "In Progress" )}
                <div class="panel panel-yellow">
                  {else if ($list["name"] == "Done" )}
                  <div class="panel panel-green">
                    {else}
                    <div class="panel" style="background-color: #43bbf9;">
                      {/if}
                      <div class="panel-heading">
                        <h3 class="panel-title"> {$list["name"]}
                         {if ($list["name"] == "ToDo" && $admin==1)} 
                          <div class="btn-group" style="margin-top:-4%; margin-left:40%;">
                            <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle" style="margin-letf:0.5%">New 
                              <span class="caret" ></span></button>
                              <ul class="dropdown-menu" style="margin-left:-170%;">
                                <li><a href="#new_blank_list" data-toggle="modal">Task</a></li>
                              </ul>
                            </div>
                            {/if}
                            {if ($list["name"] !="ToDo" && $admin==1)}
                            <a id="remove" title="Remove Task List" href="{$BASE_URL}actions/project/remove_task_list.php?name={$project['name']}&task_list_name={$list['name']}" data-toggle="modal" style="color: #f2f2f2;">
                              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </a>
                            {/if}
                          </h3>
                        </div>  
                        <div class="panel-body"></div>
                      </div>
                    </div>
                    {/foreach}

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