<html>
  <?php
    include_once('header.php');
    use App\Users;
  ?>

  <body id="home">

  <?php include_once('nav_after_login.php'); ?>


    <div class="container-fluid body">
      <div class="parallax-container levels-container valign-wrapper">
        <div class="section">
          <div class="container">
            <div class="row center">
              <div class="col s12 level-number white-text left-align offset-s1"><h5>Level 27</h5></div>
              <div class="level-content col s12">
                <div class="level-image-container">
                  <img class="level-image" src="level2222222.jpg" usemap="#Map" />
                </div>
              </div> 

               <form method="post" action="/checkAnswer"> 
                @if(Session::has('message'))
                <div class="row answer-message " >
                  <div class="left-align col s10 offset-s2 white-text">
                      {{Session::get('message')}}
                  </div>
                </div>
                @endif
                <div class="row">

                  <div class="col s6 offset-s2 input-field">
                    <input type="text" class="validate answer-box" id="answer" placeholder="Answer" name="answer">
                    <input type="hidden" value="32" name="presentId">
                  </div>
                  
                  <div class="col s3">
                    <input type="submit" class="btn level-submit" value="Submit" />
                  </div>
                </div>
              </form>
            </div>

          </div>
           
        </div>
        <div class="parallax">
          <img src="images/banner.jpg" style="display: block; transform: translate3d(-50%, 316px, 0px);"></img>
          <map name="Map" id="Map">
              <area alt="" id="1" title="" shape="rect" coords="13,13,199,295" />
              <area alt="" id="2" title="" shape="rect" coords="209,11,381,293" />
              <area alt="" id="3" title="" shape="rect" coords="105,302,284,616" />
              
          </map>
        </div>
      </div>


    </div>

    <?php include_once('footer.php');?>
    <script>
    $(document).ready(function() {
      $('#1').on('click', function() {
        
        var image = new Image();
        image.src = "/1_1.jpg";

        var w = window.open("");
        w.document.write(image.outerHTML);

      });

      $('#2').on('click', function() {
        
        var image = new Image();
        image.src = "/1_2.jpg";

        var w = window.open("");
        w.document.write(image.outerHTML);

      });
      $('#3').on('click', function() {
        
        var image = new Image();
        image.src = "/1_3.jpg";

        var w = window.open("");
        w.document.write(image.outerHTML);

      });
    })
    </script>
    <?php
    echo "<!--".Users::getHintSource(27)."-->";
    ?>
  </body>
</html>

<html>
  