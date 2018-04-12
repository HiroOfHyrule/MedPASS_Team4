<?php
    include 'config.php';
    $sql = "SELECT * FROM patient WHERE Patient_ID = ".$_SESSION['id'];

    $result = mysqli_query($link, $sql);
    if(!$result) {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }

    while ($row = mysqli_fetch_array($result)) {
    $pid = $row["Patient_ID"]
    $firstname = $row["FName"];
    $lastname = $row["LName"];
    $dob = $row["DOB"];
    $sex = $row["Sex"];
    $phone = $row["Phone"];
    $address = $row["Address"];
    $email = $row["Email"];
    } 
    mysqli_close($link);
?>