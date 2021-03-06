{include file='common/header-index.tpl'}

<!-- ========== HEADER SECTION ========== -->
<section id="home" name="home"></section>
<div id="headerwrap">
  <div class="container">
    <br>
    <h1>uManage</h1>
    <h2>Free project management tool</h2>
    <div class="row">
      <br><br><br>
      <div class="col-lg-6 col-lg-offset-3">
      </div>
    </div>
  </div><!-- /container -->
</div><!-- /headerwrap -->

<!-- ========== PHRASE WHITE SECTION ========== -->
<div id="w">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <h3>Welcome to <bold>uManage</bold>. A online project management tool. <h3>Our aim is to help in small bussiness and <br> team project <bold>Organization</bold>
        </h3>
      </div>
    </div>
  </div><!-- /container -->
</div><!-- /w -->

<!-- ========== OUR TOOLS SECTION ========== -->
<section id="tools" name="tools"></section>
<div id="g">
  <div class="container">
    <div class="row">
      <h3>OUR TOOLS</h3>
      <br>
      <br>
      <div class="col-lg-4">
        <img src="{$BASE_URL}images/assets/ideia.png">
        <h4>ORGANIZE uR IDEIAS</h4>
      </div>
      <div class="col-lg-4">
        <img src="{$BASE_URL}images/assets/work.png">
        <h4>DIVIDE uR WORK</h4>
      </div>
      <div class="col-lg-4">
        <img src="{$BASE_URL}images/assets/deadline.png">
        <h4>MANAGE uR TIME</h4>
      </div>

    </div>
  </div><!-- /container -->
</div><!-- /g -->

<!-- ========== SOME WORKS GREY SECTION ========== -->
<!-- Carousel -->
<section id="portfolio" name="portfolio"></section>
<div id="portfoliowrap">
  <div class="container">
    <div class="row">
      <h3 style="color:#505050">SOME WORKS</h3>
      <br>
      <!--CAROUSEL-->
      <div class="container">
        <div class="col-md-12">

              <div class="item active">
                <div  class="row">
                {foreach $projects as $proj}
                  <div  class="col-sm-4">
                    <a id = "carous" href="#x" class="thumbnail">
                      <img src="{$BASE_URL}images/assets/default_user.jpg"   class="img-circle" class="img-responsive">
                      <h3>{$proj['name']}</h3>
                      <p>{$proj['description']}</p>
                    </a>
                </div>
                {/foreach}
                <!--/row-->
              </div>
              <!--/item-->
            </div>
      </div>
      <!--/CAROUSEL-->
    </div>
  </div><!-- /container -->
</div><!-- /carousel -->

<!-- ========== ABOUT US GREY SECTION ========== -->
<section id="about" name="about"></section>
<div id="g">
<div class="container">
  <div class="row">
    <h3>ABOUT US</h3>
    <br>
    <br>
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lectus elit, tincidunt nec turpis sed, accumsan iaculis ipsum. Nulla at augue auctor, tristique erat in, ultricies nunc. Mauris eget metus leo. Ut in mi lacinia, mattis nisl non, ultrices risus. Vestibulum aliquet aliquam ipsum ut ullamcorper. Pellentesque fringilla, massa vel rutrum consequat, nulla velit fermentum dolor, sed scelerisque.</p>
      <br>
      <br>
    </div>
    
    <div class="developers-div">
    <div class="col-lg-4 team">
      <img class="img-circle" src="{$BASE_URL}images/assets/team01.jpg" height="90" width="90">
      <h4>Ana Rita Ferreira</h4>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
      <p>
        <a href="https://www.facebook.com/anarita.ferreira.1671?fref=ts" target="_blank"><i class="icon-facebook"></i></a>
        <a href="https://plus.google.com/u/0/114256417807140064976/posts" target="_blank"><i class="icon-google-plus"></i></a>
        <a href="#"><i class="icon-envelope"></i></a>

      </p>
    </div>

    <div class="col-lg-4 team">
      <img class="img-circle" src="{$BASE_URL}images/assets/team02.jpg" height="90" width="90">
      <h4>Jorge Filipe Teixeira</h4>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
      <p>
        <a href="https://www.facebook.com/jorge.teixeira.397?fref=ts" target="_blank"><i class="icon-facebook"></i></a>
        <a href="https://plus.google.com/u/0/109638890381961595607/posts" target="_blank"><i class="icon-google-plus"></i></a>
        <a href="#"><i class="icon-envelope"></i></a>

      </p>
    </div>

    <div class="col-lg-4 team">
      <img class="img-circle" src="{$BASE_URL}images/assets/team03.jpg" height="90" width="90">
      <h4>Maria Miranda</h4>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
      <p>
        <a href="https://www.facebook.com/maria.miranda.338?fref=ts" target="_blank"><i class="icon-facebook"></i></a>
        <a href="https://plus.google.com/u/0/104768957009219394768/posts" target="_blank"><i class="icon-google-plus"></i></a>
        <a href="#"><i class="icon-envelope"></i></a>
      </p>
    </div>
    </div>
  </div>
</div><!-- /container -->
</div><!-- /g -->

{include file='common/footer.tpl'}
