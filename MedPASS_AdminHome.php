<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>MedPASS</title>
  <link rel="stylesheet" href="AdminFormat.css">
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
        <h1>Welcome Insert Admin Name!</h1> <!DATABASE TODO>
      </div>
    </section>
  </div>

  <section id="boxes">
    <div class="container">
	<a href="MedPASS_AdminInfo.php">
      <div class="box">
        <img src="AdminInfo.png">
        <h3>Manage Your <br> Profile Info</h3>
      </div>
	</a>
	<a href="MedPASS_AdminViewEmpInfo.php">
      <div class="box">
        <img src="AdminViewDoctorInfo.png">
        <h3>Practitioners <br> Information</h3>
      </div>
	</a>
    <a href="MedPASS_AdminViewPatientInfo.php">
      <div class="box">
        <img src="AdminViewPatientInfo.png">
        <h3>Patients <br> Information</h3>
      </div>
	</a>
    </div>
  </section>
  <section id="boxes2">
    <div class="container">
	<a href="MedPASS_AdminScheduleLists.php">
      <div class="box">
        <img src="AdminSchedule.png">
        <h3>Schedule <br> Lists</h3>
      </div>
	</a>
    <a href="MedPASS_AdminAppointmentsList.php">
      <div class="box">
        <img src="AdminAppointment.png">
        <h3>Appointment <br> Lists</h3>
      </div>
	</a>
    <a href="MedPASS_AdminEquipmentsList.php">
      <div class="box">
        <img src="AdminViewEquip.png">
        <h3>Equipment <br> Lists</h3>
      </div>
	</a>
    </div>
  </section>
  
  <section id"content">
    <div class="container contentHome">
    </div>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>
