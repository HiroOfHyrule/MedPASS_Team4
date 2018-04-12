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
            <li><a href="MedPASS_Welcome.php">Back</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="showcase">
      <div class="loginScreen">
        <h1>Welcome to the Medical Practitioner Login!</h1>
        <p>Please enter your username and password below. </p>
        <form  method="POST" action="MedPASS_DoctorHome.php"> <!DATABASE TODO>
		<label for="fname">Username:</label>
		<input type="text" id="user" name="username" placeholder="Your username..">
		<br>
		<label for="lname">Password:</label>
		<input type="password" id="lname" name="password" placeholder="Your password..">
		<br>
		<a href="MedPASS_DoctorHome.php"><input type="submit" value="Submit"></a>
        </form>
	  </div>
    </section>
  </div>
  
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>