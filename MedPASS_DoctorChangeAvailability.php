<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: MedPASS_Welcome.php");
  exit;
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>MedPASS</title>
  <link rel="stylesheet" href="DoctorFormat.css">
  <link rel="stylesheet" href="AvailabilityFormat.css">
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
			<li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="showcase">
      <div class="patientSubPage">
        <h1>Request Time Off</h1>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container availability">
	<br>
    <form  method="POST" action="MedPASS_DoctorHome.php"> <!DATABASE TODO>
	  <label for="timeOffStart">Time-off Start Time:</label> <br>
	  <input type="date" name="timeOffStart" min="2017-04-12">
	  <br>
	  <label for="timeOffEnd">Time-off End Time:</label><br>
	  <input type="date" name="timeOffEnd" min="2017-04-12">
	  <br>
	<input type="submit" name="submit" value="Submit Time Off Request"></a>
    </form>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>
