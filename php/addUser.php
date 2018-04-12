<?php
function addPatient($FName, $LName, $DOB, $Sex, $Phone, $Address = Null, $Email = Null) {
    include 'config.php';
    if (!$link) die("Connection failed: " . mysqli_connect_error());
    $query = "INSERT INTO patient (FName, LName, DOB, Sex, Phone, Address, Email)
        Values($FName, $LName, $DOB, $Sex, $Phone, $Address, $Email)";
      if (mysqli_query($link, $query)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($link);
    }
    mysqli_close($link);
}

function addPractitioner($FName, $LName, $Spec, $Phone, $Address = Null, $Email = Null, $Reg_No) {
    include 'config.php';
    if (!$link) die("Connection failed: " . mysqli_connect_error());
    $query = "INSERT INTO medical_practitioner (FName, LName, Specialization, Phone, Address, Email, Reg_No)
        Values('$FName', '$LName', '$Spec', $Phone, '$Address', '$Email', $Reg_No)";
    if (mysqli_query($link, $query)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($link);
    }
    mysqli_close($link);
}

function addAdmin($FName, $LName, $Email = Null, $Phone, $Pos) {
    include 'config.php';
    if (!$link) die("Connection failed: " . mysqli_connect_error());
    $query = "INSERT INTO administrative_staff (FName, LName, Email, Phone, Admin_Position)
        Values($FName, $LName, $Email, $Phone, $Pos)";
      if (mysqli_query($link, $query)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($link);
    }
    mysqli_close($link);
}
?>