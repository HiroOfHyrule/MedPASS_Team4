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
  <link rel="stylesheet" href="HomeFormat.css">
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
            <li><a href="MedPASS_PatientHome.php">Home</a></li>
			<li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="showcase">
      <div class="patientSubPage">
        <h1>Your Rented Equipment</h1>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container contentSubPage">
      <p>
     
	  Equipment Rentals: <br>
	  <?php
      $rows = db_select("SELECT E.Equipment_Type, R.Return_Date, E.Cost_Per_Month 
                FROM patient as p, assistance_equipment as E, rents as R 
                    WHERE R.PID=p.Patient_ID AND R.Equip_ID=E.Equip_ID 
                    ORDER BY R.Return_Date AND p.Patient_ID='".$_SESSION['id']."'");
echo "<table class=\"table\">
      <thead{vertical-align: left}>
        <tr>
            <th>Equipment Type</th>
            <th>Return Date</th>
            <th>Monthly Cost($) </th>
            
        </tr>
      </thead>";
foreach($rows as $value) {
    echo "<tr>";
    echo "<td>".$value['Equipment_Type']."</td>";
    echo "<td>".$value['Return_Date']."</td>";
    echo "<td>".$value['Cost_Per_Month']."</td>";
    echo "</tr>";
}
echo "</table>";
    
?>
      
      </p>

    </div>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>