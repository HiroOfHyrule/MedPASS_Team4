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
			<li><a href="MedPASS_AdminViewPatientInfo.php">Back</a></li>
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
      
      <!DATABASE TODO>
      
      Patient ID:    <br>
	  First Name:   <br>
	  Last Name:    <br>
      Birthday: <br>
      Gender: <br>
	  Address:      <br>
	  Phone Number:      <br>
	  Email:     <br>
      <br> <br>
      
      <a href="MedPASS_AdminEditPatientInfo.php"><input type="submit" value="Edit Patient Info"></a> 
      <br>
      <form  method="POST" action="MedPASS_AdminViewPatientInfo.php"> <!DATABASE TODO>
      <a href="MedPASS_AdminViewPatientInfo.php"><input type="submit" value="Delete Patient"></a>
      </form>
      </p>

    </div>
  </section>
  
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>