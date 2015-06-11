<div class="container">
  <div class="navbar-header page-scroll">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a id="Title" class="navbar-brand page-scroll" href="../users/profile.php">uManage</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div id ="nav_content" class="collapse navbar-collapse navbar-ex1-collapse">
    <ul  class="nav navbar-right top-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {$smarty.session.admin} {$smarty.session.username} <b class="caret"></b></a>
            <ul  id= "cont-bar" class="dropdown-menu">
              {if (isset($smarty.session.username))}
              <li >
                <a  href="{$BASE_URL}pages/users/profile.php"><i class="icon-large icon-user"></i> Profile</a>
              </li>
              {/if}
              <li >
                <a href="{$BASE_URL}pages/common/portfolio.php"><i class="icon-large icon-th"></i> Portfolio</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="{$BASE_URL}actions/users/logout.php"><i class="icon-large icon-off"></i> Log Out</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
</div>
