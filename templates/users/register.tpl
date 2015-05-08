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

<div class="container">

  <!-- ======= LOGIN BOX ====== -->
  <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info" >
      <div class="panel-heading">
        <div class="panel-title">Sign In</div>
        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
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
              <button id="btn-ggsignup" type="button" class="btn btn-danger"><i class="icon-google-plus"></i>   Login with Google Account</button>
            </div>
            <div class="col-md-offset-3 col-md-9">
              <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>    Login with Facebook</button>
            </div>
            <div id="btns" class="col-sm-12 controls">
              <button id="btn-login" type="submit" class="btn btn-warning"> Login</button>
              <br>
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
            <label for="email" class="col-md-3 control-label">Email</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="email" placeholder="Email Address">
            </div>
          </div>

          <div class="form-group">
            <label for="firstname" class="col-md-3 control-label">First Name</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="firstname" placeholder="First Name">
            </div>
          </div>

          <div class="form-group">
            <label for="lastname" class="col-md-3 control-label">Last Name</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="lastname" placeholder="Last Name">
            </div>
          </div>

          <div class="form-group">
            <label for="password" class="col-md-3 control-label">Password</label>
            <div class="col-md-9">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
          </div>

          <div class="form-group">
            <label type="file" name="photo" class="col-md-3 control-label">Photo</label>
          </div>

          <div class="form-group">
            <!-- Button -->
            <div class="col-md-offset-3 col-md-9">
              <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
              <span style="margin-left:8px;">or</span>
            </div>
          </div>

          <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">

            <div class="col-md-offset-3 col-md-9">
              <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>    Sign Up with Facebook</button>
            </div>
            <br>
            <div class="col-md-offset-3 col-md-9">
              <button id="btn-ggsignup" type="button" class="btn btn-danger"><i class="icon-google-plus"></i>   Sign Up with Google Account</button>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>

{include file='common/footer.tpl'}
