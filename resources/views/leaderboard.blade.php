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
              <div class="col s12 level-number white-text left-align offset-s1"><h5 >Leaderboard</h5></div>
              <div class="level-content col s12">
                <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-3 col-xs-12" style="background:#000; color:#E7E3E3; font-size:20px">
            <table >
            <font color="#E7E3E3">
              <tr>
                <th>Rank</th>
                <th>Name</th> 
                <th>Level</th>
              </tr>
              <?php $i=0;?>
            @foreach($lead as $user)
            <tr>
              <td>{{$i++}}</td>
              <td style="margin-left:20%">{{$user->first_name}}{{" "}}{{$user->last_name}}</td>
              <td>{{$user->level}}</td>
            </tr>
            @endforeach
            </font>
            </table>

            </div>
            </div>
              </div> 

              
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

