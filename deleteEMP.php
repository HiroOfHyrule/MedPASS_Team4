<?php

// Initialize the session
session_start();
//include 'db_functions.php';
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: MedPASS_Welcome.php");
  exit();
}

include 'config.php';
// for deleting an illness  
if(isset($_POST['delete'])) {
	
	$eid = $_SESSION['curEID'];
	if($_SESSION['role']=='doc'){
		$table = "medical_practitioner";
	} else{
		$table = "administrative_staff";	
	}
	
	$query = "DELETE FROM $table WHERE Employee_ID = $eid";
	if (mysqli_query($link, $query)) {
	} else {
		echo "Error: " . $query . "<br>" . mysqli_error($link);
	}
	mysqli_close($link);
	header("Location: MedPASS_AdminViewEmpInfo.php");
	exit();
}


?>
