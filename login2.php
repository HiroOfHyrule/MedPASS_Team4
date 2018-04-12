<?php
    include 'config.php';
    session_start();

    $username = $password = $logErr = "";
    if (!$link) {
            die("Connection failed: " . mysqli_connect_error());
    }
    if(isset($_POST['submit'])) {
        $role = $_SESSION['role'];
        if($role == Patient) {
            $idvalue = "Patient_ID";
            $table = "patient";
        } elseif($role == Admin){
            $idvalue = "Employee_ID";
            $table = "administrative_staff";
        } else{
            $idvalue = "Employee_ID";
            $table = "medical_practitioner";
        }
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $query = "SELECT Password, ".$idvalue." FROM $table WHERE Username ='".$username."'";
        $result = mysqli_query($link, $query);
        if(!$result) {
            echo "Error: " .$query . "<br>" . mysqli_error($link);
        }
        
        while ($row = mysqli_fetch_array($result)) {
            $passhash = $row["Password"];
            $id = $row[$idvalue];
        }
        mysqli_close($link);
        if(empty($row)){
            $logErr= "Username or Password is Invalid.";
            header('Location: MedPASS_'.$role.'Login.php');            
        }
        if(password_verify($password, $passhash)) {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
            
            header('Location: MedPASS_'.$role.'Home.php');
        } else {
            $logErr = "Username or Password is Invalid.";
             header('Location: MedPASS_'.$role.'Login.php'); 
        }
        
    }
    exit();
    
    
?>