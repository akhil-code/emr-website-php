<?php
  // localhost
  $username = "root";
  $password = "password";
  $servername = "localhost";
  $database = "mydatabase";

  // website info
  // $username = "u136558852_admin";
  // $password = "emrclubis007";
  // $servername = "mysql.hostinger.in";
  // $database = "u136558852_emr";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
?>
