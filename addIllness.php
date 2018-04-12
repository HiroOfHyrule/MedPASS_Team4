<?php
session_start();
if(isset($_POST['submit'])) {
include 'config.php';
$illness = $_POST['illness'];
$symptoms = $_POST['symptoms'];
$causes = $_POST['causes'];
if (!$link) die("Connection failed: " . mysqli_connect_error());
$query = "INSERT INTO illness(Illness_Name, Cause, Symptom)
    Values('$illness','$symptoms', '$causes')";
  if (mysqli_query($link, $query)) {
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($link);
}
mysqli_close($link);
}
header("Location: MedPASS_DoctorViewPatientInfo.php");
exit();


?>