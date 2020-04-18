<?php

$servername = "185.2.4.109";
$username = "g42t3r8q";
$password = "UJBS~F(ys#Y5"
$dbname = "g42t3r8q_job";

 $conn = mysqli_connect($servername, $username, $password, $dbname);
      // Check connection
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }