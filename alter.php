<?php
include 'config.php';


// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
$passhash = password_hash("rockrules!", PASSWORD_DEFAULT);
$query = "UPDATE patient SET Username = 'brockOnyx', Password = '$passhash'
            WHERE patient.Patient_ID = 1";

if (mysqli_query($link, $query)) {
    echo "altered patient successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($link);
}


$passhash = password_hash("pokemon2!", PASSWORD_DEFAULT);
$query = "UPDATE administrative_staff SET Username = 'ProfOak', Password = '$passhash'
            WHERE Employee_ID = 1";

if (mysqli_query($link, $query)) {
    echo "altered admin successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($link);
}



$passhash = password_hash("pikachu123", PASSWORD_DEFAULT);
$query = "UPDATE medical_practitioner SET Username = 'ashRocks', Password = '$passhash'
            WHERE Employee_ID = 3";

if (mysqli_query($link, $query)) {
    echo "alter prac successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($link);
}



?>