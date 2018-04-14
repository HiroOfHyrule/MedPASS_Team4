<?php
session_start();

if(isset($_POST['submit'])){
$Date = $_POST['appointmentdate'];
$Time = $_POST['appointmenttime'];
$Prac_ID = $_POST['drname'];
$PID = $_SESSION['id'];

include 'config.php';
    if (!$link) die("Connection failed: " . mysqli_connect_error());
    $query = "INSERT INTO appointment(Date, Time, PID, Prac_ID)
        Values('$Date', '$Time', '$PID', '$Prac_ID')";
      if (mysqli_query($link, $query)) {
       
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($link);
    }
    mysqli_close($link);
	header("Loaction: MedPASS_PatientAppointment.php");
	exit();
}
?>