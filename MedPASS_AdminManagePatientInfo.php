<?php

// Initialize the session
session_start();
include 'db_functions.php';
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: MedPASS_Welcome.php");
  exit;
}

if(isset($_POST['view'])) {
    $_SESSION['curPID'] = $_POST['patientID'];
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>MedPASS</title>
  <link rel="stylesheet" href="AdminFormat.css">
</head>

<body>
  <div class="wrapper">
    <header>
      <nav>
        <div class="logo">
          <h2>Med<span class="highlight">PASS</span></h2>
        </div>
        <div class="menu">
          <ul>
            <li><a href="MedPASS_AdminHome.php">Home</a></li>
			<li><a href="MedPASS_AdminViewPatientInfo.php">Back</a></li>
			<li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="showcase">
      <div class="patientSubPage">
        <h1>Manage Patient Information</h1>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container contentSubPage">
      <p>
      
      <?php
      $rows = db_select("SELECT * FROM `patient` WHERE Patient_ID='".$_SESSION['curPID']."'");
      foreach($rows as $value) {
        echo "Patient ID: ".$value['Patient_ID']."<br>";
        echo "First Name: ".$value['FName']."<br>";
        echo "Last Name:".$value['LName']."<br>";
        echo "Birthday: ".$value['DOB']."<br>";
        echo "Gender: ".$value['Sex']."<br>";
        echo "Address: ".$value['Address']."<br>";
        echo "Phone Number: ".$value['Phone']."<br>";
        echo "Email: ".$value['Email']."<br>";
        echo "<br>";
      }
      ?>
      <a href="MedPASS_AdminEditPatientInfo.php"><input type="submit" value="Edit Patient Info"></a> 
      <br>
      <form  method="POST" action="MedPASS_AdminViewPatientInfo.php"> <!DATABASE TODO>
      <a href="MedPASS_AdminViewPatientInfo.php"><input type="submit" value="Delete Patient"></a>
      </form>
      </p>

    </div>
  </section>
  
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>
