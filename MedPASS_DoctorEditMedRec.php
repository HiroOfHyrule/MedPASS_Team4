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
        <h1>Edit Your Patient's Medical Record</h1>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container contentSubPage">
      <p>
      <form  method="POST" action="editMR.php"> 
		<label for="illH">Illness History:</label><br>
		<textarea  maxlength = "255" cols="85" rows="3" id="illH" name="illH"><?php echo $illH;?></textarea>
		<br>
		<label for="treatH">Treatment History:</label><br>
		<textarea  maxlength = "255" cols="85" rows="3" id="treatH" name="treatH"><?php echo $treatH?></textarea>
		<br>
		<label for="famH">Family Medical History:</label><br>
		<textarea  maxlength = "255" cols="85" rows="3" id="famH" name="famH"><?php echo $famH;?></textarea>
		<br>
		<label for="medH">Medical Allergies:</label><br>
		<textarea  maxlength = "255" cols="85" rows="3" id="medH" name="medH"><?php echo $medH;?></textarea>
		<br>
		<label for="notes">Notes:</label><br>
		<textarea  maxlength = "255" cols="85" rows="3" id="notes" name="notes"><?php echo $notes;?></textarea>
		<br>
	  	 <input type="submit" name="submit" value="Submit MR Edits"></a>
      </form>
      </p>
    </div>
  </section>
  
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>