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
function db_connect() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "medpass";
    $link;
    if(!isset($link)) {
        $link = mysqli_connect($servername, $username, $password, $dbname);
    }
    if($link == false) {
        //handle error
        return mysqli_connect_error();
    }
    
    return $link;
}


?>