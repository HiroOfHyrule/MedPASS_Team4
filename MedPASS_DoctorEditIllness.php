<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: MedPASS_Welcome.php");
  exit;
}  
// for deleting an illness  
if(isset($_POST['delete'])) {
	$illness = $_POST['illnessD'];
	$quert = "DELETE FROM illness WHERE Illness_Name ='$illness'";
	if (mysqli_query($link, $query)) {
	} else {
		echo "Error: " . $query . "<br>" . mysqli_error($link);
	}
		mysqli_close($link);
}

if(isset($_POST['edit'])) {
	$illness = $_POST['illness'];
	$symptoms = $_POST['symptoms'];
	$causes = $_POST['causes'];
	
	$query = "UPDATE illness SET Symptom ='$symptoms', Cause='$causes' WHERE Illness_Name='$illness'";
	
  if (mysqli_query($link, $query)) {
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($link);
}
	mysqli_close($link);
	header("Location: MedPASS_DoctorViewPatientInfo.php");
exit();
}
	

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
			<li><a href="MedPASS_DoctorViewPatientInfo.php">Back</a></li>
			<li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="showcase">
      <div class="patientSubPage">
        <h1>Edit or Delete an Illness</h1>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container contentSubPage">
      <p>
      <form  method="POST" action=""> <!DATABASE TODO>
		<label for="ill">Illness Name:</label><br>
		<input type="text" id="ill" name="illness" placeholder="Illness...">
		<br>
		<label for="ill">Causes:</label><br>
		<textarea maxlength = "255" cols="85" rows="3" id="cause" name="causes" placeholder="Causes..."></textarea>
		<br>
		<label for="ill">Symptoms:</label><br>
		<textarea maxlength = "255" cols="85" rows="3" id="sympt" name="symptoms" placeholder="Symptoms..."></textarea>
		<br>
	  <input type="submit" name="edit" value="Edit Illness Info"></a>
      </form>
	  </p>
	  <br>
	  <br>
	  <p>
	  <form  method="POST" action=""> <!DATABASE TODO>
	  <label for="ill">Illness Name:</label><br>
		<input type="text" id="ill" name="illnessD" placeholder="Illness..">
		<br>
	  <input type="submit" name="delete" value="Delete Illness"></a><br>
	  </form>
      </p>

    </div>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>
