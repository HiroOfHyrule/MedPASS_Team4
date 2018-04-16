<?php
include 'db_functions.php';
$str = "pikachu123";
$pw = password_hash($str, PASSWORD_DEFAULT);
$sql="UPDATE medical_practitioners SET Password ='".$pw."', Specialization='Physio' WHERE Employee_ID=3";
$result=db_query($sql);
?>