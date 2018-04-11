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
      Patient ID: <span style="padding: 0 40px">&nbsp;</span>   <br>
	  First Name: <span style="padding: 0 40px">&nbsp;</span>   <br>
	  Last Name: <span style="padding: 0 40px">&nbsp;</span>    <br>
      Birthday: <br>
      Gender: <br>
	  Address: <span style="padding: 0 40px">&nbsp;</span>      <br>
	  Phone Number: <span style="padding: 0 40px">&nbsp;</span>     <br>
	  Email: <span style="padding: 0 40px">&nbsp;</span>    <br>
      <br> <br>
      
      <a href="MedPASS_AdminEditPatientInfo.php"><input type="submit" value="Edit Patient Info"></a> 
      <br>
      <a href="MedPASS_AdminViewPatientInfo.php"><input type="submit" value="Delete Patient"></a>
      </p>

    </div>
  </section>
  
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>