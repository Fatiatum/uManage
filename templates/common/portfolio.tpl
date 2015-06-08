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


<!-- Page Content -->
<div id= "port" class="container">
  <!-- /.row -->
  <div id="search-bar" class="container">
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" id="ser-btn" class="btn btn-default"><i class="icon-large icon-search"></i></button>
    </form>
  </div>
  <!-- Page Header -->
  <div id= "header_title"class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Projects
        <br>
        {if isset($smarty.session.username)}
        <small style="padding-left: 15px">   All uR projects and public projects</small>
        {/if}
      </h1>
    </div>
  </div>
  


  <!-- Projects Row -->
  <div class="row">
    {foreach $projects as $project}
    <div class="col-md-4 portfolio-item">
      <a href="#">
        <img class="img-responsive" src="{$BASE_URL}{$project.photo}" alt="">
      </a>
      <h3>
        <a class="name" href="{$BASE_URL}pages/projects/projects.php?name={$project.name}" class="name">@{$project.name}</a>
      </h3>
        <a id="remove" title="Remove Project" href="{$BASE_URL}actions/common/removeProj.php?name={$project.name}" data-toggle="modal" style="color: #f2f2f2;">
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </a>
      <div class="project-description">{$project.text}</div>
    </div>
    {/foreach}
  </div>
  <!-- /.row -->

  <!-- Projects Row -->
  {if isset($smarty.session.admin)}
  <div id= "header_title"class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Users
        <br>
      </h1>
    </div>
  </div>

  <div class="row">
    {foreach $users as $user}
    <div class="col-md-4 portfolio-item">
      <a href="#">
        <img class="img-responsive" src="{$BASE_URL}{$user.photo}" alt="">
      </a>
      <h3>
        <a class="name" href="{$BASE_URL}pages/users/profile.php?username={$user.username}" class="name">@{$user.username}</a>
      </h3>
      <a id="remove" title="Remove Project" href="{$BASE_URL}actions/common/removeUser.php?username={$user.username}" data-toggle="modal" style="color: #f2f2f2;">
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
      </a>
    </div>
    {/foreach}
  </div>
  <!-- /.row -->
  {/if}

  <hr>

</div>
<!-- /.container -->

{include file='common/footer.tpl'}
