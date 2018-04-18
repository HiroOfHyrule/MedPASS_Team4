<?php
session_start();
include 'db_functions.php';
    
    if (isset($_POST['submit'])) { 
		if($_SESSION['role']=='doc') {
			$table = "medical_practitioner";
		} else {
			$table = "administrative_staff";
		}
        $query="UPDATE ".$table." SET";
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
            $query.=" PASSWORD='" . password_hash($_POST['password'], PASSWORD_DEFAULT)."',";
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
        $query.=" WHERE Employee_ID ='".$_SESSION['curEID']."'";
        $result = db_query($query);
		echo $query."<br>".$result;
        header("Location: MedPASS_AdminManageEmpInfo.php");
        exit(); 
    }
    
    db_close();


?>