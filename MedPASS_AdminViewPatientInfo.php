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
            <li><a href="MedPASS_AdminHome.php">Home</a></li>
			<li><a href="MedPASS_Welcome.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="showcase">
      <div class="patientSubPage">
        <h1>Your Practitioner Information</h1>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container contentSubPage">
      <p>
      <form  method="POST" action="MedPASS_AdminManagePatientInfo.php"> <!DATABASE TODO>
        <label for="fname">Enter Patient's First Name:</label>
		<input type="text" id="fname" name="firstname" placeholder="First Name..">
		<br>
        <label for="lname">Enter Patient's Last Name:</label>
		<input type="text" id="lname" name="lastname" placeholder="Last Name..">
		<br>
		<label for="PID">Enter Patient ID:</label>
		<input type="text" id="PID" name="patientID" placeholder="Patient ID..">
		<br>
	    <a href="MedPASS_AdminManagePatientInfo.php"><input type="submit" value="View Patient Information"></a>
        </form>
        <br>
        <form  method="POST" action="MedPASS_AdminAddNewPatient.php"> <!DATABASE TODO>
        <a href="MedPASS_AdminAddNewPatient.php"><input type="submit" value="Add New Patient"></a>
        </form>
      </p>

    </div>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>