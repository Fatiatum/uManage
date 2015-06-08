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
    <form action="{$BASE_URL}pages/common/portfolio.php" class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" name="search" class="form-control" placeholder="Search">
      </div>
      <button type="submit" id="ser-btn" class="btn btn-default"><i class="icon-large icon-search"></i></button>
    </form>
  </div>

  <!-- Projects Row -->
  <div class="row">
    {foreach $projects as $project}
    <div id="projresults" class="col-md-4 portfolio-item">
      <a href="#">
        <img class="img-responsive" src="{$BASE_URL}{$project.photo}" alt="">
      </a>
      <h3>
        <a class="name" href="{$BASE_URL}actions/projects/list_projects.php?name={$project.name}" class="name">{$project.name}</a>
      </h3>
      <div class="project-description">{$project.description}</div>
    </div>
    {/foreach}
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



{include file='common/footer.tpl'}
