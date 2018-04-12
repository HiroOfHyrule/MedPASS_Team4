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
        <h1>Your Patient's Medical Record</h1>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container contentSubPage">
      <p>
      
      <!DATABASE TODO>
      
      Illness History: <br>
	  Treatment History: <br>
	  Family Medical History: <br>
	  Medical Allergies: <br>
	  Notes: <br> 
	  </p>

	  <a href="MedPASS_DoctorEditMedRec.php"><input type="submit" value="Edit Medical Record"></a>

    </div>
  </section>
  
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>