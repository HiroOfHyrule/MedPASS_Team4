<?php
session_start();
if(isset($_POST['submit'])) {
include 'config.php';
$illness = $_POST['diagnosis'];
$pid = $_SESSION['curPID'];
if (!$link) die("Connection failed: " . mysqli_connect_error());
$query = "INSERT INTO affects(PID, Illness_Name)
    Values('$illness','$pid')";
  if (mysqli_query($link, $query)) {
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($link);
}
mysqli_close($link);
header("Location: MedPASS_DoctorManagePatientInfo.php");
exit();
}


?>