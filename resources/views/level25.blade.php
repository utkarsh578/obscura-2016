<html>
  <?php
    include_once('header.php');
    use App\Users;
  ?>

  <body id="home">

    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
              <a href="#!" class="brand-logo"><img src="/images/logo.jpg" class="logo-image">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Obscura</a>
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                  <li><a class="waves-effect waves-light" href="#home">Home</a></li>
            <li><a class="waves-effect waves-light" href="#">Forum</a></li>
            <li><a class="waves-effect waves-light" href="#">Leaderboard</a></li>
            <li><a class="dropdown-button" href="#" data-activates="logout">{{Users::getFirstName(Auth::id())}}<i class="material-icons right">arrow_drop_down</i></a></li>




              </ul>

               <ul id='logout' class='dropdown-content'>
              <li><a href="/logout">Logout</a></li>
          </ul>
              <ul class="side-nav" id="mobile-demo">
            <li><a href="#home">Home</a></li>
            <li><a class="waves-effect waves-light" href="#">Forum</a></li>
            <li><a class="waves-effect waves-light" href="#">Leaderboard</a></li>
            <li><a class="waves-effect waves-light" href="#!">Logout</a></li>

              </ul>
            </div>
        </nav>
    </div>


    <div class="container-fluid body">
      <div class="parallax-container levels-container valign-wrapper">
        <div class="section">
          <div class="container">
            <div class="row center">
              <div class="col s12 level-number white-text left-align overlay"><h5>Level 25</h5></div>
              <div class="level-content col s12">
                <div class="level-image-container">
                  <img class="level-image" src="http://ichef.bbci.co.uk/news/660/cpsprodpb/17A21/production/_85310869_85310700.jpg" />
                </div>
              </div> 

              <form>
                <div class="row">

                  <div class="col s8 offset-s1 input-field">
                    <input type="text" class="validate answer-box" id="answer" placeholder="Answer">
                  </div>
                  <div class="col s3">
                    <input type="button" class="btn level-submit" value="Submit" />
                  </div>
                </div>
              </form>
            </div>

          </div>
           
        </div>
        <div class="parallax">
          <img src="images/banner.jpg" style="display: block; transform: translate3d(-50%, 316px, 0px);"></img>
        </div>
      </div>


    </div>

    <?php include_once('footer.php');?>
    <script src="js/index.js"></script>

  </body>
</html>
