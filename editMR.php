<?php
session_start();
include 'config.php';
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: MedPASS_Welcome.php");
  exit;
}
if(isset($_POST['submit'])) {

$illH = $_POST['illH'];
$treatH = $_POST['treatH'];
$famH = $_POST['famH'];
$medH = $_POST['medH'];
$notes = $_POST['notes'];
$pid = $_SESSION['curPID'];    
if (!$link) die("Connection failed: " . mysqli_connect_error());
$query = "UPDATE medical_record SET Illness_History='$illH', Treatment_History='$treatH', Family_Med_History='$famH', Medical_Allergies='$medH', Notes='$notes'
    WHERE PID = '$pid'";
if (!mysqli_query($link, $query)) {
    echo "Error: " . $query . "<br>" . mysqli_error($link);
}
mysqli_close($link);
}
header("Location: MedPASS_DoctorViewMedRec.php");
exit();
?>