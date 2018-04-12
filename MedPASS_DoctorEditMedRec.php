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
			<li><a href="MedPASS_Welcome.php">Logout</a></li>
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
      <form  method="POST" action="MedPASS_DoctorViewMedRec.php"> <!DATABASE TODO>
		<label for="treatDesc">Illness History:</label><br>
		<textarea name="textarea" maxlength = "255" cols="85" rows="3" id="treatDesc" name="treatmentDesc" placeholder="Illness History..."></textarea>
		<br>
		<label for="treatDesc">Treatment History:</label><br>
		<textarea name="textarea" maxlength = "255" cols="85" rows="3" id="treatDesc" name="treatmentDesc" placeholder="Treatment History..."></textarea>
		<br>
		<label for="treatDesc">Family Medical History:</label><br>
		<textarea name="textarea" maxlength = "255" cols="85" rows="3" id="treatDesc" name="treatmentDesc" placeholder="Family Medical History..."></textarea>
		<br>
		<label for="treatDesc">Medical Allergies:</label><br>
		<textarea name="textarea" maxlength = "255" cols="85" rows="3" id="treatDesc" name="treatmentDesc" placeholder="Medical Allergies..."></textarea>
		<br>
		<label for="treatDesc">Notes:</label><br>
		<textarea name="textarea" maxlength = "255" cols="85" rows="3" id="treatDesc" name="treatmentDesc" placeholder="Notes..."></textarea>
		<br>
	  	  <a href="MedPASS_DoctorViewMedRec.php"><input type="submit" value="Submit MR Edits"></a>
      </form>
      </p>
    </div>
  </section>
  
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>