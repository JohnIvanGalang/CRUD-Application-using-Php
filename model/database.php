<?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $name = "library";
  $conn = mysqli_connect($host, $user, $password, $name);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
//   echo "Connected successfully";
?>