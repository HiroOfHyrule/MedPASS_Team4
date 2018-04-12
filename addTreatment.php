<?php
session_start();
if(isset($_POST['submit'])) {
include 'config.php';
$pid = $_SESSION['curPID'];
$prID = $_SESSION['id'];
$treat = $_POST['treatment'];
$treatNote = $_POST['treatmentDesc'];

if (!$link) die("Connection failed: " . mysqli_connect_error());
$query = "INSERT INTO treating(PID, PR_ID, treatmentName, treatmentNote)
    Values('$pid','$prID','$treat','$treatNote')";
  if (mysqli_query($link, $query)) {
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($link);
}
mysqli_close($link);
}
header("Location: MedPASS_DoctorManagePatientInfo.php");
exit();


?>