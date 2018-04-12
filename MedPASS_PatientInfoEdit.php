<?php
session_start();
include 'viewPatient.php';
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
            <li><a href="MedPASS_PatientHome.php">Home</a></li>
			<li><a href="MedPASS_PatientInfo.php">Back</a></li>
			<li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="showcase">
      <div class="patientSubPage">
        <h1>Edit Your Patient Information</h1>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container contentSubPage">
      <p>
      <form  method="POST" action="editPatient.php"> 
        <label for="password">Password:</label>
		<input type="text" id="password" name="password" placeholder="Password">
		<br>
		<label for="fname">First Name:</label>
		<input type="text" id="fname" name="firstname" placeholder="Your first name..">
		<br>
		<label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lastname" placeholder="Your last name..">
		<br>
		<label for="bday">Birthday:</label>
		<input type="date" id="bday" name="birthday">
		<br>
		<label for="gender">Gender:</label>
		<input type="text" id="gender" name="gender" placeholder="Your gender..">
		<br>
		<label for="addre">Address:</label>
		<input type="text" id="addr" name="address" placeholder="Your address..">
		<br>
		<label for="phonum">Phone Number:</label>
		<input type="text" id="phonum" name="phonenumber" placeholder="Your phone number..">
		<br>
		<label for="mail">Email:</label>
		<input type="text" id="mail" name="email" placeholder="Your email..">
		<br>
	  <input type="submit" name="submit" value="Submit Edit Info"></a>
      </form>
      </p>

    </div>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>