<?php


// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: MedPASS_Welcome.php");
  exit;
}

include 'db_functions.php';
    
    if (isset($_POST['submit'])) { 
        $query="UPDATE administrative_staff SET";
        if (!empty($_POST['firstname']))
            {
            $query.=" FName='" . $_POST['firstname']."',";
            }
        if (!empty($_POST['lastname']))
            {
            $query.=" LName='" .$_POST['lastname']."',";
            }
        if (!empty($_POST['email']))
            {
            $query.=" Email='" .$_POST['email']."',";
            }
        if (!empty($_POST['phonenumber']))
            {
            $query.=" Phone='" .$_POST['phonenumber']."',";
            }
        if (!empty($_POST['pos']))
            {
            $query.=" Admin_Position='" .$_POST['pos']."',";
            }
        if (!empty($_POST['pw']))
            {
            $passhash = password_hash($_POST['pw'], PASSWORD_DEFAULT);
            $query.=" Password='" .$passhash."',";
            }
        $query = substr($query,0,-1);
        $query.=" WHERE Employee_ID ='".$_SESSION['id']."'";
        $result = db_query($query);
        if(!$result){
            mysqli_error($result);
        }
        //header("Location: MedPASS_AdminInfo.php");
        //exit();
        
    }
    
   db_close();


?>