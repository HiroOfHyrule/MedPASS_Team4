<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>MedPASS</title>
  <link rel="stylesheet" href="DoctorHomeFormat.css">
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
			<li><a href="MedPASS_Welcome.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="showcase">
      <div class="doctorSubPage">
        <h2>Your Practitioner Information</h2>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container contentSubPage">
      <p2>
		<label for="PID">Enter Patient ID:</label>
		<input type="text" id="PID" name="patientid" placeholder="Patient ID..">
		<br>
	  <a href="MedPASS_DoctorManagePatientInfo.php"><input type="submit" value="View Patient Information"></a>
      </p2>

    </div>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>