<?php
session_start();
include 'db_functions.php';
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: MedPASS_Welcome.php");
  exit();
}
if (isset($_POST['search'])) { 
    $_SESSION['curEID'] = $_POST['employeeID'];
	$_SESSION['role'] = $_POST['role'];
}	
	
	if($_SESSION['role'] == 'doc'){ 
	
		$sql = "SELECT * FROM medical_practitioner WHERE Employee_ID = '".$_SESSION['curEID']."'";
		
		$row = db_select($sql);

		foreach($row as $value) {
		$eid = $value["Employee_ID"];
		$firstname = $value["FName"];
		$lastname = $value["LName"];
		
		$phone = $value["Phone"];
		$address = $value["Address"];
		$email = $value["Email"];
		$specPos = $value['Specialization'];
        $user = $value['Username'];
		} 
		db_close();
	} else {
		$sql = "SELECT * FROM administrative_staff WHERE Employee_ID = '".$_SESSION['curEID']."'";
		$row = db_select($sql);

		foreach($row as $value) {
		$eid = $value["Employee_ID"];
		$firstname = $value["FName"];
		$lastname = $value["LName"];
		
		$phone = $value["Phone"];
		
		$email = $value["Email"];
		$specPos = $value['Admin_Position'];
        $user = $value['Username'];
		} 
		db_close();
		
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
			<li><a href="MedPASS_AdminManageEmpInfo.php">Back</a></li>
			<li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="showcase">
      <div class="patientSubPage">
        <h1>Edit Edit Employee Information</h1>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container contentSubPage">
      <p>
      <form  method="POST" action="editEMP.php"> 
		<label for="user">Username:</label>
		<input type="text" id="user" name="username" placeholder="<?php echo $user;?>">
		<br>
		<label for="pw">Password:</label>
		<input type="text" id="pw" name="password" placeholder="***Password***">
		<br>
        <label for="fname">First Name:</label>
		<input type="text" id="fname" name="firstname" placeholder="<?php echo $firstname;?>">
		<br>
		<label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lastname" placeholder="<?php echo $lastname;?>">
		<br>
		<label for="addr">Address:</label>
		<input type="text" id="addr" name="address" placeholder="<?php echo ((!empty($address)) ? $address : "Not Applicable");?>"
        <?php echo ((!empty($address)) ? : "disabled")?>>
		<br>
		<label for="phonum">Phone Number:</label>
		<input type="text" id="phonum" name="phonenumber" placeholder="<?php echo $phone;?>">
		<br>
		<label for="mail">Email:</label>
		<input type="text" id="mail" name="email" placeholder="<?php echo $email;?>">
		<br>
		<label for="specialization">Specialization or Position:</label>
		<input type="text" id="specialization" name="specialization" placeholder="<?php echo $specPos;?>">
		<br>
	  <input type="submit" name="submit" value="Edit Info">
      </form>
      </p>

    </div>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>
