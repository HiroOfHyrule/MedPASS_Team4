<?php
include 'config.php';
    if (!$link) die("Connection failed: " . mysqli_connect_error());
    $query = "INSERT INTO appointment (Date, Time, PID, Prac_ID)
        Values($Date, $Time, $PID, $Prac_ID)";
      if (mysqli_query($link, $query)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($link);
    }
    mysqli_close($link);
?>