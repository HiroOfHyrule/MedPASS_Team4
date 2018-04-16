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
			<li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="showcase">
      <div class="patientSubPage">
        <h1>Employee Information</h1>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container contentSubPage">
      <p>
      <form  method="POST" action="MedPASS_AdminManageEmpInfo.php"> <!DATABASE TODO>
		<label><input type="radio" name="role" value="doc"> Practitioner</label>
        <label><input type="radio" name="role" value="admin"> Admin</label>
			<br>
        <label for="empID">Enter Employee ID:</label>
		<input type="text" id="empID" name="employeeID" placeholder="Employee ID.." required>
		<br>
	    <input type="submit" name="search" value="View Employee Information"></a>
        </form>
        <br>
        <form  method="POST" action="MedPASS_AdminAddNewEmp.php"> <!DATABASE TODO>
        <input type="submit" name="add" value="Add New Employee"></a>
        </form>
      </p>

    </div>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>
