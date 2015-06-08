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
    {if (isset($smarty.session.username))}
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="icon-large  icon-envelope"></i>
          <b style="margin-left: 5px" class="caret"></b></a>
          <ul id= "cont-bar" class="dropdown-menu message-dropdown">
            <li class="message-preview">
              <a href="#">
                <div class="media">
                  <span class="pull-left">
                    <img class="media-object" src="http://placehold.it/50x50" alt="">
                  </span>
                  <div class="media-body">
                    <h5 class="media-heading">
                      <strong>User</strong>
                    </h5>
                    <p class="small text-muted">
                      <i class="icon-large  icon-time"></i>
                      Yesterday at 4:32 PM
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                  </div>
                </div>
              </a>
            </li>
            <li class="message-footer">
              <a href="#">Read All New Messages</a>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="icon-large  icon-bell"></i>
            <b style="margin-left: 5px" class="caret"></b></a>
            <ul id= "cont-bar" class="dropdown-menu alert-dropdown">
              <li>
                <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
              </li>
              <li>
                <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
              </li>
              <li>
                <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#">View All</a>
              </li>
            </ul>
          </li>
           {/if}
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {$smarty.session.admin} {$smarty.session.username} <b class="caret"></b></a>
            <ul  id= "cont-bar" class="dropdown-menu">
              {if (isset($smarty.session.username))}
              <li >
                <a  href="{$BASE_URL}pages/users/profile.php"><i class="icon-large icon-user"></i> Profile</a>
              </li>
              {/if}
              <li class="active">
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
