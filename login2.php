<?php
    include 'config.php';
    session_start();

    $user = $pw = $logErr = "";
    if (!$link) {
            die("Connection failed: " . mysqli_connect_error());
    }
    if(isset($_POST['submit'])) {
        $role = $_SESSION['role'];
        if($role == 'Patient') {
            $idvalue = "Patient_ID";
            $table = "patient";
        } elseif($role == 'Admin'){
            $idvalue = "Employee_ID";
            $table = "administrative_staff";
        } else{
            $idvalue = "Employee_ID";
            $table = "medical_practitioner";
        }
        
        $user = $_POST['username'];
        $pw = $_POST['password'];
        
        $query = "SELECT PASSWORD, ".$idvalue." FROM ".$table." WHERE Username ='".$user."'";
        $result = mysqli_query($link, $query);
        if(!$result) {
            echo "Error: " .$query . "<br>" . mysqli_error($link);
        }
        
        while ($row = mysqli_fetch_array($result)) {
            $passhash = $row['PASSWORD'];
            echo "<br>".$passhash."<br>";
            $lol = password_hash($pw, PASSWORD_DEFAULT);
            echo "<br>".$lol."<br>";
            $id = $row[$idvalue];
        }
        mysqli_close($link);
        if(empty($row)){
            echo "Username or Password is Invalid.";
            header('Location: MedPASS_'.$role.'Login.php');            
        }
        if(password_verify($pw, $passhash)) {
            $_SESSION['username'] = $user;
            $_SESSION['id'] = $id;
            
            header('Location: MedPASS_'.$role.'Home.php');
        } else {
            echo "Username or Password is Invalid.";
             header('Location: MedPASS_'.$role.'Login.php'); 
        }
        
    }
    exit();
    
    
?>