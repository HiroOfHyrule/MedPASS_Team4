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
			<li><a href="MedPASS_Welcome.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="showcase">
      <div class="patientSubPage">
        <h1>Your Patient's Info</h1>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container contentSubPage">
      <p>
      
      <!DATABASE TODO>
      
      Patient ID: <br>
	  First Name: <br>
	  Last Name: <br>
	  Birthday: <br>
	  Gender: <br>
	  Address: <br>
	  Phone Number: <br>
	  Email: <br>
	  <br>
      Rented Equipment: <br>
      <br>
      Diagnosed Illnesses: <br>
	  Treatments:  <br>  
	  </p>
      <a href="MedPASS_DoctorAddDiagnosis.php"><input type="submit" value="Assign Diagnosis"></a>
      <a href="MedPASS_DoctorEditDiagnosis.php"><input type="submit" value="Unassign Diagnosis"></a> <br>
      
	  <a href="MedPASS_DoctorAddTreatment.php"><input type="submit" value="Assign Treatments"></a> 
      <a href="MedPASS_DoctorEditTreatment.php"><input type="submit" value="Unassign Treatments"></a><br>
      
	  <a href="MedPASS_DoctorViewMedRec.php"><input type="submit" value="View Medical Record"></a>

    </div>
  </section>
  
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>