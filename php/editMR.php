<?php
include 'config.php';
    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if (isset($_POST['submit'])) { 
        $query="UPDATE medical_record SET";
        if (!empty($_POST['illH']))
            {
            $query.=" Illness_History='" . $_POST['illH']."',";
            }
        if (!empty($_POST['trH']))
            {
            $query.=" Treatment_History='" .$_POST['trH']."',";
            }
        if (!empty($_POST['fmH']))
            {
            $query.=" Family_Med_History='" . $_POST['fmH']."',";
            }
        if (!empty($_POST['maH']))
            {
            $query.=" Medical_Allergies='" .$_POST['maH']."',";
            }
        if (!empty($_POST['notes']))
            {
            $query.=" Notes='" . $_POST['notes']."',";
            }
        $query = substr($query,0,-1);
        $query.=" WHERE PID ='".$_POST['pid']."' AND MR_No='".$_POST['mrNo']."'";
        if (!mysqli_query($link, $query)) {
            echo "Error updating record: " . mysqli_error($link);
        }
    }
    
    mysqli_close();
?>