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
            <li><a href="MedPASS_Welcome.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="showcase">
      <div class="scheduling">
        <h1>Welcome Insert Patient Name!</h1> <!DATABASE TODO>
        <p></p>
      </div>
    </section>
  </div>

  <section id="boxes">
    <div class="container">
	<a href="MedPASS_PatientInfo.php">
      <div class="box">
        <img src="infoLogoPatient.png">
        <h3>Manage Your <br> Profile Info</h3>
      </div>
	</a>
	<a href="MedPASS_PatientAppointments.php">
      <div class="box">
        <img src="CalendarIconPatient.png">
        <h3>Book & Manage <br> Your Appointments</h3>
      </div>
	</a>
	<a href="MedPASS_PatientDiagTreat.php">
      <div class="box">
        <img src="Diagnosis.png">
        <h3>View Your Diagnoses <br /> & Treatments
        </h3>
      </div>
	</a>
	<a href="MedPASS_PatientEquip.php">
      <div class="box">
        <img src="Equipment.png">
        <h3>View Your<br /> Rental Equipment
        </h3>
      </div>
	</a>
    </div>
  </section>
  
  <section id"content">
    <div class="container contentHome">
	<p>Your next appointment is with (inster Doctor Name) at (insert Date).</p> <!DATABASE TODO>
    </div>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>