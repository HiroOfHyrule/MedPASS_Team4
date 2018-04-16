<?php
session_start();
include 'addUser.php';
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: MedPASS_Welcome.php");
  exit();
}
?>
<?php
    if (isset($_POST['submit'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $sex = $_POST['sex'];
        $phone = $_POST['phonenumber'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $user = $_POST['user'];
        $passhash = password_hash($_POST['pw'], PASSWORD_DEFAULT);
        addPatient($fname,$lname,$dob,$sex,$phone,$address,$email,$user,$passhash);
        header('Location: MedPASS_AdminViewPatientInfo.php');
        exit();
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
			<li><a href="MedPASS_AdminViewPatientInfo.php">Back</a></li>
			<li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="showcase">
      <div class="patientSubPage">
        <h1>Add New Patient Information</h1>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container contentSubPage">
      <p>
      <form  method="POST" action=""> 
		
        <label for="fname">First Name:</label>
		<input type="text" id="fname" name="firstname" placeholder="..." required>
		<br>
		<label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lastname" placeholder="..." required>
		<br>
        <label for="mail">DOB:</label>
		<input type="text" id="dob" name="dob" placeholder="..." required>
		<br>
        <label for="sex">Gender:</label>
		<input type="text" id="sex" name="sex" placeholder="..." required>
		<br>
		<label for="addr">Address:</label>
		<input type="text" id="addr" name="address" placeholder="..." >
		<br>
		<label for="phonum">Phone Number:</label>
		<input type="text" id="phonum" name="phonenumber" placeholder="..." required>
		<br>
		<label for="mail">Email:</label>
		<input type="text" id="mail" name="email" placeholder="..." >
		<br>
        <label for="user">Username:</label>
		<input type="text" id="user" name="user" placeholder="Username" required>
		<br>
        <label for="password">Password:</label>
		<input type="text" id="password" name="pw" placeholder="Password" pattern=".{6,}" title="Password must be at least 6 characters long" required>
		<br>
	  <input type="submit" name="submit" value="Submit Add Patient">
      </form>
      </p>

    </div>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>
