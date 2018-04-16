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
        <h1>Your Diagnoses and Treatments</h1>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container contentSubPage">
      <p>
      
      <?php

$rows = db_select("SELECT a.Illness_Name ,i.Cause, i.Symptom FROM affects as a, illness as i
                    WHERE a.PID=".$_SESSION['id']." AND a.Illness_Name=i.Illness_Name");
                    

if(!empty($rows)){    
echo "<table>
      <thead{vertical-align: left}>
        <tr>
            <th>Diagnosed Illnesses</th>
            <th>Cause</th>
            <th>Symptoms</th>
            
        </tr>
      </thead>";
foreach($rows as $value) {
    echo "<tr>";
    
    echo "<td>".$value['Illness_Name']."</td>";
     echo "<td>".$value['Cause']."</td>";
      echo "<td>".$value['Symptom']."</td>";
    
    echo "</tr>";
}
echo "</table>";
} else {
    echo "No Illness' Diagnosed";
}
db_close();


$rows = db_select("SELECT * FROM treating
                    WHERE PID=".$_SESSION['id']."");
                    

if(!empty($rows)){    
echo "<table>
      <thead{vertical-align: left}>
        <tr>
            <th>Treatment</th>
            <th>Notes</th>
        </tr>
      </thead>";
foreach($rows as $value) {
    echo "<tr>";
    
    echo "<td>".$value['treatmentName']."</td>";
    echo "<td>".$value['treatmentNote']."</td>";
    echo "</tr>";
}
echo "</table>";
} else {
    echo "No Illness' Diagnosed";
}
db_close();
?>
      
	  
	 
      </p>

    </div>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>