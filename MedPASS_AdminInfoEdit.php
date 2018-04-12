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
			<li><a href="MedPASS_AdminInfo.php">Back</a></li>
			<li><a href="MedPASS_Welcome.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="showcase">
      <div class="patientSubPage">
        <h1>Edit Your Admin Information</h1>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container contentSubPage">
      <p>
      <form  method="POST" action="MedPASS_AdminInfo.php"> <!DATABASE TODO>
		<label for="empID">Employee ID:</label>
		<input type="text" id="empID" name="employeeID" placeholder="Your employee ID..">
		<br>
        <label for="fname">First Name:</label>
		<input type="text" id="fname" name="firstname" placeholder="Your first name..">
		<br>
		<label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lastname" placeholder="Your last name..">
		<br>
		<label for="addr">Address:</label>
		<input type="text" id="addr" name="address" placeholder="Your address..">
		<br>
		<label for="phonum">Phone Number:</label>
		<input type="text" id="phonum" name="phonenumber" placeholder="Your phone number..">
		<br>
		<label for="mail">Email:</label>
		<input type="text" id="mail" name="email" placeholder="Your email..">
		<br>
		<label for="pos">Position:</label>
		<input type="text" id="pos" name="position" placeholder="Your position..">
		<br>
	  <a href="MedPASS_AdminInfo.php"><input type="submit" value="Submit Edit Info"></a>
      </form>
      </p>

    </div>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>
