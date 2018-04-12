<?php

// Initialize the session
session_start();
 
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
	  (Equipment Name, Rentral Start Date, Rentral End Date, Cost Per Month)<br>
      <?php
//code for displaying rental equip
    include 'config.php';
    $sql = "SELECT r.Start_Date, r.Return_Date, e.Equipment_Type, e.Cost_Per_Month
                FROM patient AS p, assistance_equipment AS e, rents AS r
                WHERE p.Patient_ID = '".$_SESSION['id']."' AND p.Patient_ID = r.PID AND
                r.Equip_ID = e.Equip_ID";

    $result = mysqli_query($link, $sql);
    if(!$result) {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }

    while ($row = mysqli_fetch_array($result)) {
    $start = $row['Start_Date'];
    $end = $row['Return_Date'];
    $eType = $row['Equipment_Type'];
    $cost = $row['Cost_Per_Month'];
    echo $eType.",".$start.",".$end.",$".$cost;
    echo"<br>";
    } 
    mysqli_close($link);
    
?>
      
      </p>

    </div>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>
