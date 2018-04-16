<?php

// Initialize the session
session_start();
include 'db_functions.php';
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: MedPASS_Welcome.php");
  exit;
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
			<li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="showcase">
      <div class="patientSubPage">
        <h1>Your Admin Information</h1>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container contentSubPage">
      <p>
      <?php
      $rows = db_select("SELECT * FROM administrative_staff WHERE Employee_ID ='".$_SESSION['id']."'");
      foreach($rows as $value){
       echo   "Employee ID: ".$value['Employee_ID']."<br>";
       echo   "First Name: ".$value['FName']."<br>";
       echo   "Last Name: ".$value['LName']."<br>";
       
       echo   "Phone Number: ".$value['Phone']."<br>";
       echo   "Email: ".$value['Email']."<br>";
       echo   "Position: ".$value['Admin_Position']."<br>";
      }
      ?>
	  <a href="MedPASS_AdminInfoEdit.php"><input type="submit" value="Edit Info"></a>
      </p>

    </div>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>
