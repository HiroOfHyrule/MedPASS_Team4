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
            <li><a href="MedPASS_Welcome.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="showcase">
      <div class="scheduling">
        <h1>Welcome Insert Practitioner Name!</h1> <!DATABASE TODO>
      </div>
    </section>
  </div>

  <section id="boxes">
    <div class="container">
	<a href="MedPASS_DoctorInfo.php">
      <div class="box">
        <img src="infoLogoDoctor.png">
        <h3>Manage Your <br> Profile Info</h3>
      </div>
	</a>
	<a href="MedPASS_DoctorAppointments.php">
      <div class="box">
        <img src="CalendarIconDoctor.png">
        <h3>View Your <br> Appointments</h3>
      </div>
	</a>
    <a href="MedPASS_DoctorChangeAvailability.php">
      <div class="box">
        <img src="ManageScheduleDoctor.png">
        <h3>Manage Your <br> Schedule</h3>
      </div>
	</a>
	<a href="MedPASS_DoctorViewPatientInfo.php">
      <div class="box">
        <img src="DoctorViewPatientInfo.png">
        <h3>Patient Info, <br> Illnesses <br> & Treatments</h3>
      </div>
	</a>
    </div>
  </section>
  
  <section id"content">
    <div class="container contentHome">
      <p>
        Your next appointment is with (Patient Name and ID) at (Time) <!DATABASE TODO>
      </p>

    </div>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>