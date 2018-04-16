<?php
// Initialize the session
session_start();
 include 'db_functions.php';
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: MedPASS_Welcome.php");
  exit;
}

if(isset($_POST['bookoff'])) {
    $sql = "DELETE FROM schedule WHERE Employee_ID='".$_SESSION['id']."' AND DATE BETWEEN '".$_POST['timeOffStart']."' 
        AND '".$_POST['timeOffEnd']."'";
    $result = db_query($sql);
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
    <form  method="POST" action=""> <!DATABASE TODO>
	  <label for="timeOffStart">Time-off Start Time:</label> <br>
	  <input type="date" id="timeOffStart" name="timeOffStart" min="2017-04-15">
	  <br>
	  <label for="timeOffEnd">Time-off End Time:</label><br>
	  <input type="date" id="timeOffEnd" name="timeOffEnd" min="2017-04-16">
	  <br>
	<input type="submit" name="bookoff" value="Submit Time Off Request"></a>
    </form>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>
