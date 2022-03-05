<?php
  session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
        <link rel="stylesheet" href="styles.css">
        <title> RocketLaunch </title>

    </head>

        <body>
          <div class="container">
            <div class="content">
              <h2>Play web games for free!</h2>
              <div class="form-container login-cont-ainer">
                <div class="form-content">
                  <form class="" action="includes/login.inc.php" method="post">
                    <h1> <span class="loginto">Login to </span> <img src="logo-final.png"></h1>
                    <input class="username-input" type="text" name="uidmail" placeholder="Username">
                    <input class="password-input" type="password" name="userpassword" placeholder="Password">
                    <button class="btn" type="submit" name="login-submit"> Log in </button>
                    <p>
                    <?php
                    if (isset($_GET['error'])){
                        if($_GET['error'] == "nouser") {
                          echo '<p class="signuperror"> Username not found. Try again. </p>';
                        }
                        else if($_GET['error'] == "emptyfields") {
                          echo '<p class="signuperror"> Fill in all fields. Try again. </p>';
                        }
                        else if($_GET['error'] == "wrongpassword") {
                          echo '<p class="signuperror"> Incorrect password. Try again. </p>';
                        }
                      }
                     ?>
                     </p>
                  </form>
                  <p>
                  <?php
                    if(isset($_SESSION['userId'])) {
                      echo '<form action="includes/logout.inc.php" method="post">
                      <button type="submit" name="logout-submit">log out</button>
                      </form>';
                      header('Location: ../login/indexmember.php');
                    }
                   ?>
                   </p>
                    <h4 class="signupfor"> Don't have an account? <a href="signup.php"> Sign up </a> for Rocket </h4>
                </div>
              </div>
            </div>
          </div>
        </body>
</html>
