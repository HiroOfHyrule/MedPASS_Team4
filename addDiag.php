<?php
session_start();
include 'db_functions.php';

if(isset($_POST['submit'])) {

$illness = $_POST['diagnosis'];
$pid = $_SESSION['curPID'];

$sql2 = "INSERT INTO affects(PID, Illness_Name)
     VALUES ('".$pid."', '".$illness."')";

db_query($sql2);

db_close();
header("Location: MedPASS_DoctorManagePatientInfo.php");
exit();
}


?>