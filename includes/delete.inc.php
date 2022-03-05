<?php
session_start();

if (isset($_POST['delete-account'])) {
  $servername = "localhost";
  $dBUsername = "root";
  $dBPassword = "";
  $dBName = "rocketlaunchdb";

  $conn = new mysqli($servername, $dBUsername, $dBPassword, $dBName);

  if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
  }

  $sql = "DELETE FROM users WHERE uidUsers='".$_SESSION['userUid']."'";
  mysqli_query($conn, $sql);
  session_unset();
  session_destroy;
  header("Location: ../index.php");

}
?>
