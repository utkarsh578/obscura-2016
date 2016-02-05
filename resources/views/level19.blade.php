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
              <div class="col s12 level-number white-text left-align offset-s1">
                <input type="text" class="special-level-input-box" id="level-label" value="Level 19" name="answer"/>
              </div>
              <div class="level-content col s12">
                <div class="level-image-container">
                  <img class="level-image" src="ddddsdsd.jpg" />
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
                    <input type="hidden" value="21" name="presentId">
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
        </div>
      </div>


    </div>
    
    
      
    <?php include_once('footer.php');?>
    <script>
      $(document).ready(function() {
        $('#level-label').on('keyup', function(e) {
          var input = $(this)[0].value.toLowerCase();
          if(input == "may 4" || input == "04/05/2016" || input == "4/5/2016" || input == "4-5-2016" || input == "04-05-2016" || input == "may4")
            alert("yank me allayafi jin monkey kijinosi mango tree");
        });
      });

    </script>
    <script src="js/index.js"></script>

    <?php
    echo "<!--".Users::getHintSource(19)."-->";
    ?>
  </body>
</html>

<html>
  