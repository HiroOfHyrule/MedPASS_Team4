<?php
session_start();
include 'config.php';
    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if (isset($_POST['submit'])) { 
        $query="UPDATE medical_practitioner SET";
        if (!empty($_POST['firstname']))
            {
            $query.=" FName='" . $_POST['firstname']."',";
            }
		if (!empty($_POST['username']))
            {
            $query.=" Username='" . $_POST['username']."',";
            }
        if (!empty($_POST['password']))
            {
            $query.=" Password='" . password_hash($_POST['password'], PASSWORD_DEFAULT)."',";
            } 
        if (!empty($_POST['lastname']))
            {
            $query.=" LName='" .$_POST['lastname']."',";
            }
        if (!empty($_POST['specialization']))
            {
            $query.=" Specialization='" . $_POST['specialization']."',";
            }
        if (!empty($_POST['phonenumber']))
            {
            $query.=" Phone='" .$_POST['phonenumber']."',";
            }
        if (!empty($_POST['address']))
            {
            $query.=" Address='" . $_POST['address']."',";
            }
        if (!empty($_POST['email']))
            {
            $query.=" Email='" .$_POST['email']."',";
            }
        if (!empty($_POST['regNo']))
            {
            $query.=" Reg_No='" .$_POST['regNo']."',";
            }
        $query = substr($query,0,-1);
        $query.=" WHERE Employee_ID ='".$_SESSION['id']."'";
        if (!mysqli_query($link, $query)) {
            echo "Error updating record: " . mysqli_error($link);
        }
        header("Location: MedPASS_AdminManageEmpInfo.php");
        exit(); 
    }
    
    mysqli_close($link);


?>