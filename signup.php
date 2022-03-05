<main>
  <?php
      if(isset($_GET['signup'])) {
          if($_GET['signup'] == "success") {
            echo '<div class="success-container">
                    <div class="success-content">
                      <div class="success-message">
                        <h3>Success! You can now log in</h3>
                        <a href="index.php">Log in </a>

                      </div>
                    </div>
                  </div>';
          }
        }
  ?>
  <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
  <div class="container">
    <div class="content">
      <img class="sign-up-logo" src="rocket-white.png">
      <div class="form-container signup-container">
        <div class="form-content">
          <form class="" action="includes/signup.inc.php" method="post">
            <h1> Create an account </h1>
            <input class="username-input" type="text" name="uid" placeholder="Username">
            <input class="password-input" type="text" name="mail" placeholder="Email"> <br>
            <input class="username-input" type="password" name="pwd" placeholder="Password">
            <input class="password-input" type="password" name="confirm-pwd" placeholder="Confirm password">
            <input class="userAge" type="number" name="userAge" min="1" max="120" placeholder="Age">
            <button class="btn" type="submit" name="signup-submit"> Sign up </button>
          </form>
           <?php
              if(isset($_GET['error'])) {
                if($_GET['error'] == "invalidmailuid") {
                  echo '<p class="signuperror"> Invalid email and username. Try again. </p>';
                }

                else if($_GET['error'] == "invalidmail") {
                  echo '<p class="signuperror"> Invalid email. Try again. </p>';
                }

                else if($_GET['error'] == "invaliduid") {
                  echo '<p class="signuperror"> Only use letters and numbers for your username. Try again. </p>';
                }

                else if($_GET['error'] == "passwordnotmatching") {
                  echo '<p class="signuperror"> Passwords do not match. Try again. </p>';
                }

                else if($_GET['error'] == "emptyfields") {
                  echo '<p class="signuperror"> Please fill in all fields. </p>';
                }

                else if($_GET['error'] == "usertaken") {
                  echo '<p class="signuperror"> Username is taken. Try another one. </p>';
                }
              }
            ?>
            <h4 class="signupfor"> Already have an account? <a href="index.php"> Login </a> to SpaceTrivia </h4>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(function() {
      var $select = $('.userAge');
      for (i = 1; i <=100; i++){
        $select.append($('<option></option>').val(i).html(i))
      }
    });
  </script>
</main>


<?php
    require "footer.php";
?>
