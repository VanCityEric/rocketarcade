<?php
session_start();
if(!isset($_SESSION['userId'])){
   header("Location:index.php");
}
 ?>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content = "ie=edge">
    <meta charset="utf-8">
    <title> Rocket Member Page </title>
    <link rel="stylesheet" href="memberstyles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/4dd61c9fa6.js" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
  </head>
  <body>

  <div class="nav"> <!--start of nav-->
    <div class="nav-contents">
      <div class="logo-container">
        <div class="logo">
          <img src="logo-final.png" alt="">
        </div>
      </div>

    <div class="text-link-container">
      <div class="text-link">
        <ul>
          <li id="games-link"><a href="#">Games</a></li>
          <li><a href="#">Multiplayer</a></li>
          <li id="whatshot"><a href="#">What's Hot</a></li>
        </ul>
      </div>
    </div>

    <div class="username-container">
      <div class="username-content">
        <p>
          Welcome,&nbsp;
        <?php
           echo $_SESSION['userUid'];
        ?>
        </p>
      </div>
    </div>

    <div id="avatar" class="user-container">
      <div class="user">
        <img id="avatar-img" src="user.png">
      </div>
      <!--drop downs -->
        <div class="drop-down-container">
          <div id="dropdown-avatar" class="dropdown show">
            <ul>
              <a href="#"><li>Your profile</li></a>
              <a href="#"><li>Change password</li></a>
              <a href="#"><li>Settings</li></a>
              <li class="button-logout"><form action="includes/logout.inc.php" method="post"><button type="submit" name="logout-submit"> Logout </button></form></li>
              <li class="button-delete-acct"><form action="includes/delete.inc.php" method="post"><button type="submit" name="delete-account"> Delete account </button></form></li>
            </ul>
          </div>
      </div>

      <div class="drop-down-container">
        <div id="dropdown-games" class="dropdown dropdown-games show">
          <ul>
            <a href="#"><li>Battlefield 5</li></a>
            <a href="#"><li>The Sims 4</li></a>
            <a href="#"><li>Fortnite</li></a>
            <a href="#"><li>Hitman 2</li></a>
            <a href="#"><li>Just Cause 4</li></a>
          </ul>
        </div>
    </div>
    <!-- end of dropdowns -->
    </div>
  </div>
</div> <!-- end of nav -->

<script>
  $(document).ready(function(){
    $('#avatar-img').click(function(e){
       e.stopPropagation()
      jQuery('#dropdown-avatar').animate({height: 'toggle'});
    });
  });
  $(document).click(function () {
      $('#dropdown-avatar').animate({height: 'hide'});
  });

  $(document).ready(function(){
    $('#games-link').click(function(e){
       e.stopPropagation()
      $('#dropdown-avatar').animate({height: 'hide'});
    });
  });

  $(document).ready(function(){
    $('#games-link').click(function(e){
      e.stopPropagation()
      jQuery('#dropdown-games').animate({height: 'toggle'});
    });
  });

  $(document).click(function () {
      $('#dropdown-games').animate({height: 'hide'});
  });

  $(document).ready(function(){
    $('#avatar-img').click(function(e){
       e.stopPropagation()
      $('#dropdown-games').animate({height: 'hide'});
    });
  });

</script>

</body>
</html>
