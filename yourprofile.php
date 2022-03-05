<?php
require "memberheader.php";

 ?>


<html lang="en" dir="ltr">
  <body>
    <div class="entire-container">
      <div class="profile-banner">
      </div>
      <div class="profile-contents-inner">
        <div class="side-profile-info">
          <div class="profile-image">
            <div class="profile-circle-crop">
              <img src="prof-pic.jpg">
              <div class="edit-prof">
                <i class="fas fa-edit"></i>
              </div>
            </div>
          </div>
          <div class="profile-about">
            <h3>ABOUT</h3>
            <p> Hi! My name's Richard. I love long walks on the beach and games.</p>
          </div>
        </div>

        <div class="main-profile-info">
          <div class="profile-username">
            <div class="profile-username-inner">
              <h2> <span class="hello">Hello</span>, <?php
              echo $_SESSION['userUid'];

               ?></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
