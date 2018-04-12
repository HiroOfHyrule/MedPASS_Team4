<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medpass";

$link = mysqli_connect($servername, $username, $password, $dbname);

/* This is used to strip and clean data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}*/

?>