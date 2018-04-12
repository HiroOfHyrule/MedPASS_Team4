<?php
include 'config.php';
    if (!$link) die("Connection failed: " . mysqli_connect_error());
    $query = "INSERT INTO medical_record (PID, Illness_History, Treatment_History, Family_Med_History, Medical_Allergies, Notes)
        Values($pid, $illH, $trH, $fmH, $maH, $notes)";
      if (mysqli_query($link, $query)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($link);
    }
    mysqli_close($link);
?>