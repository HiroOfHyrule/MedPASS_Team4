<?php

// Initialize the session
session_start();
include('db_functions.php');
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: MedPASS_Welcome.php");
  exit;
}

if(isset($_POST['delete'])) {
	$query = "DELETE FROM appointment WHERE App_No = '".$_POST['App_No']."'";
	$result = db_query($query);
	db_close();
	echo $_POST['App_No'];
	header("Location: MedPASS_AdminAppointmentsList.php");
	exit();
}
?>