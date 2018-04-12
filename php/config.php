<?php
$servername = "localhost";
$username = "admins";
$password = "Cpsc471!2018";
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