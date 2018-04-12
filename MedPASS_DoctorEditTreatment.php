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
        <h1>Edit a Treatment</h1>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container contentSubPage">
      <p> 
      <form  method="POST" action="MedPASS_DoctorManagePatientInfo.php"> <!DATABASE TODO>
		<label for="treat">Treatment Name:</label>
		<input type="text" id="treat" name="treatment" placeholder="Treatment..">
		<br>
		<label for="treatDesc">Treatment Description:</label><br>
		<textarea name="textarea" maxlength = "255" cols="85" rows="3" id="treatDesc" name="treatmentDesc" placeholder="Treatment Description.."></textarea>
		<br>
	  <a href="MedPASS_DoctorManagePatientInfo.php"><input type="submit" value="Submit Treatment"></a>
      </form>
	  
	  <form  method="POST" action="MedPASS_DoctorManagePatientInfo.php"> <!DATABASE TODO>
	  <label for="ill">Treatment Name:</label>
		<input type="text" id="ill" name="illness" placeholder="Illness..">
		<br>
	  <a href="MedPASS_DoctorManagePatientInfo.php"><input type="submit" value="Delete Treatment"></a><br>
	  </form>
      </p>

    </div>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>