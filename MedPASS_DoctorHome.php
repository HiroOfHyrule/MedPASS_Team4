<?php

// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: MedPASS_Welcome.php");
  exit;
}
?>
<?php
    include 'config.php';
    $query = "SELECT FName, LName FROM medical_practitioner
                WHERE Employee_ID='".$_SESSION['id']."'";
    $result = mysqli_query($link,$query);
    if(!$result) {
        echo "Error: " . $query . "<br>" . mysqli_error($link);
    }
    $row = mysqli_fetch_array($result);
    $fname = $row['FName'];
    $lname = $row['LName'];
    
    
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
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="showcase">
      <div class="scheduling">
        <h1>Welcome <?php echo $fname." ".$lname; ?>!</h1>
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
      

    </div>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>