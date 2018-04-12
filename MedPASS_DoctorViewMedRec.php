<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: MedPASS_Welcome.php");
  exit;
}
include 'config.php';
$sql = "SELECT * FROM medical_record, patient WHERE PID = '".$_SESSION['curPID']."' AND PID = Patient_ID";

$result = mysqli_query($link, $sql);
if(!$result) {
echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

while ($row = mysqli_fetch_array($result)) {
$illH = $row['Illness_History'];
$treatH = $row['Treatment_History'];
$famH = $row['Family_Med_History'];
$medH = $row['Medical_Allergies'];
$notes = $row['Notes'];
$fname = $row['FName'];
$lname = $row['LName'];
} 
mysqli_close($link);

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>MedPASS</title>
  <link rel="stylesheet" href="DoctorFormat.css">
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
            <li><a href="MedPASS_DoctorHome.php">Home</a></li>
			<li><a href="MedPASS_DoctorManagePatientInfo.php">Back</a></li>
			<li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="showcase">
      <div class="patientSubPage">
        <h1><?php echo $fname." ".$lname;?>'s Medical Record</h1>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container contentSubPage">
      <p>
      
      
      
      <b>Illness History:</b> <?php echo $illH;?><br>
	  <b>Treatment History:</b> <?php echo $treatH;?><br>
	  <b>Family Medical History:</b> <?php echo $famH;?><br>
	  <b>Medical Allergies:</b> <?php echo $medH;?><br>
	  <b>Notes:</b> <?php echo $notes;?><br> 
	  </p>

	  <a href="MedPASS_DoctorEditMedRec.php"><input type="submit" value="Edit Medical Record"></a>

    </div>
  </section>
  
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>