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
      <div>
        <h1 class="page-header">My Projects </h1>
        <span href= "" style= "float: right" class="glyphicon glyphicon-plus" id="create_proj" aria-hidden="true"></span>
      </div>
      
    </div>
  </div>
  <div class="row">
    {foreach $projects as $project}
    <div class="col-md-4 portfolio-item">
      <a href="#">
        <img class="img-responsive" src="{$BASE_URL}{$project.photo}" alt="">
      </a>
      <h3>
        <a class="name" href="{$BASE_URL}pages/projects/list_projects.php?name={$project.name}" class="name">@{$project.name}</a>
      </h3>
      <div class="project-description">{$project.text}</div>
    </div>
    {/foreach}
  </div>
</div>

 <div class="modal fade" id="register" role="dialog"> <!--RESGISTER MODAL-->
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="modalLabel">Create New Project</h3>
            </div>

            <div class="modal-body"> <!--USERNAME/EMAIL/PASSWORD/CONFIRM PASSWORD-->
                <div>
                  *Required field
                </div>
                <div class="form-group">
                  <div class="col-lg-8">
                    <input id="name" name="name" type="text" class="col-md-6" placeholder="name">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-lg-10">
                    <input id="description" name="description" type="text" class="col-md-6" placeholder="description">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-lg-10">
                    <input id="photo" name="photo" type="file" class="col-md-10">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-lg-10">
                      <input id="public" name="public" type="checkbox" class="col-md-10">
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


<script>last_project_id = {$last_project_id}</script>
{include file='common/footer.tpl'}
