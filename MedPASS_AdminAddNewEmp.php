<?php
session_start();
include 'addUser.php';
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: MedPASS_Welcome.php");
  exit;
}
?>
<?php
    if (isset($_POST['submit'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $phone = $_POST['phonenumber'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        // either position or spec
        $specORpos = $_POST['specialization'];
        $regNo = $_POST['regNo'];
        $role = $_POST['role'];
        $username = $_POST['username'];
        $passhash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        if ($role == 'doc') {
            addPractitioner($fname, $lname, $specORpos, $phone, $address, $email, $regNo, $username, $passhash);
        } else{
            addAdmin($fname, $lname, $email, $phone, $specORpos, $username, $passhash);
        }
        
        header('Location: MedPASS_AdminViewEmpInfo.php');
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
			<li><a href="MedPASS_AdminViewEmpInfo.php">Back</a></li>
			<li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="showcase">
      <div class="patientSubPage">
        <h1>Add New Employee Information</h1>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container contentSubPage">
      <p>
      <form  method="POST" action="" id="form"> 
		
        <label><input type="radio" name="role" value="doc"> Practitioner</label>
        <label><input type="radio" name="role" value="admin"> Admin</label>
      
		<br>
        <label for="fname">First Name:</label>
		<input type="text" id="fname" name="firstname" placeholder="...">
		<br>
		<label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lastname" placeholder="...">
		<br>
		<label for="addr">Address:</label>
		<input type="text" id="addr" name="address" placeholder="...">
		<br>
		<label for="phonum">Phone Number:</label>
		<input type="text" id="phonum" name="phonenumber" placeholder="...">
		<br>
		<label for="mail">Email:</label>
		<input type="text" id="mail" name="email" placeholder="...">
		<br>
		<label for="specialization">Specialization or Position:</label>
		<input type="text" id="specialization" name="specialization" placeholder="...">
		<br>
        <label for="specialization">Registration Number:</label>
		<input type="text" id="regNo" name="regNo" placeholder="Only for Practitioner">
		<br>
        <label for="username">Username:</label>
		<input type="text" id="username" name="username" placeholder="Username">
		<br>
        <label for="password">Password:</label>
		<input type="text" id="password" name="password" placeholder="Password">
		<br>
        <input type="submit" name="submit" value="Add Employee"></a>
      </p>

    </div>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>
