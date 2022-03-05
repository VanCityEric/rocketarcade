<?php
require "header.php";
?>


<main>
  <p>
  <?php
    if(isset($_SESSION['userId'])) {
      echo '<p> You are logged in </p>';
    } else {
      echo '<p> You are logged in </p>';
    }
   ?>
   </p>
</main>
