<?php
function addIllness($illName, $cause, $symp) {
    include 'config.php';
    if (!$link) die("Connection failed: " . mysqli_connect_error());
    $query = "INSERT INTO illness (Illness_Name, Cause, Symptom)
        Values($illName, $cause, $symp)";
      if (mysqli_query($link, $query)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($link);
    }
    mysqli_close($link);
}

function editIllness() {
    include 'config.php';
    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if (isset($_POST['submit'])) { 
        $query="UPDATE illness SET";
        if (!empty($_POST['cause']))
            {
            $query.=" Cause='" .$_POST['cause']."',";
            }
        if (!empty($_POST['symp']))
            {
            $query.=" Symptom='" . $_POST['symp']."',";
            }
        $query = substr($query,0,-1);
        $query.=" WHERE Illness_Name ='".$_POST['illName']."'";
        if (!mysqli_query($link, $query)) {
            echo "Error updating record: " . mysqli_error($link);
        }
    }
    mysqli_close();
}

?>