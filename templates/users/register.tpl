{include file='common/header.tpl'}

<?php 
    if(isset($_SESSION['username'])){
    header("Location: $BASE_URL" . 'pages/users/profile.php');
  }
?>

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

<div class="container">

  <!-- ======= LOGIN BOX ====== -->
  <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
 
    <!-- ERROR PANEL -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          <div id="error_messages">
            {foreach $ERROR_MESSAGES as $error}
            <div class="error" id= "error-msg">{$error}<a class="close" href="#">X</a></div>
            {/foreach}
          </div>
          <div id="success_messages">
            {foreach $SUCCESS_MESSAGES as $success}
            <div class="success" id= "success-msg">{$success}<a class="close" href="#">X</a></div>
            {/foreach}
          </div>
        </h1>
      </div>
    </div>

    <div class="panel panel-info" >
      <div class="panel-heading">
        <div class="panel-title">Sign In</div>
      </div>

      <div style="padding-top:30px" class="panel-body" >
        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

        <form id="loginform" class="form-horizontal" role="form" action="{$BASE_URL}actions/users/login.php" method="post">
          <div style="margin-bottom: 25px" class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username">
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
          </div>

          <div class="input-group">
            <div class="checkbox">
              <label>
                <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
              </label>
            </div>
          </div>

          <div style="margin-top:10px" class="form-group">
            <!-- Button -->
            <div class="col-md-offset-3 col-md-9">
              <button id="btn-login" type="submit" class="btn btn-warning">
                Login
              </button>
              <span style="margin-left:8px;">or</span>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-12 control">
              <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                Don't have an account!
                <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                  Sign Up Here
                </a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- ======= REGISTER BOX ====== -->
  <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info">
      <div class="panel-heading">
        <div class="panel-title">Sign Up</div>
        <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
      </div>
      <div class="panel-body" >
        <form id="signupform" class="form-horizontal" role="form" action="{$BASE_URL}actions/users/register.php" method="post">

          <div id="signupalert" style="display:none" class="alert alert-danger">
            <p>Error:</p>
            <span></span>
          </div>

          <div class="form-group">
            <label for="username" class="col-md-3 control-label">Username</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
          </div>

          <div class="form-group">
            <label for="email" class="col-md-3 control-label">Email</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="email" placeholder="Email Address">
            </div>
          </div>

          <div class="form-group">
            <label for="firstname" class="col-md-3 control-label">Name</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="name" placeholder="First Name">
            </div>
          </div>
          
          <div class="form-group">
            <label for="password" class="col-md-3 control-label">Password</label>
            <div class="col-md-9">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Photo</label>
            <input type="file" name="photo">
          </div>

          <div class="form-group">
            <!-- Button -->
            <div class="col-md-offset-3 col-md-9">
              <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
            </div>
          </div>

          <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">

          </div>
        </form>
      </div>
    </div>
  </div>
</div>

{include file='common/footer.tpl'}
