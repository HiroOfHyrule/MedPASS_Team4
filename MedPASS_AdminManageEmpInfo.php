<?php

// Initialize the session
session_start();
include 'db_functions.php';
 
// If session variable is not set it will redirect to login page
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
			<li><a href="MedPASS_AdminViewEmpInfo.php">Back</a></li>
			<li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="showcase">
      <div class="patientSubPage">
        <h1>Manage Employee Information</h1>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container contentSubPage">
      <p>
      
     
      Employee ID:  <?php echo $eid;?> <br>
	  First Name:   <?php echo $firstname;?><br>
	  Last Name:   <?php echo $lastname;?><br>
	  Address:     <?php echo ((!empty($address)) ? $address : "Not Applicable");?><br>
	  Phone Number:    <?php echo $phone;?><br>
	  Email:    <?php echo $email;?><br>
      Specialization or Position: <?php echo $specPos;?><span style="padding: 0 40px">&nbsp;</span>    <br>
      <br> <br>
      
      <a href="MedPASS_AdminEditEmpInfo.php"><input type="submit" value="Edit Employee Info"></a> 
      <br>
      <form  method="POST" action="deleteEMP.php"> 
      <input type="submit" name="delete" value="Delete Employee"></a>
      </form>
      </p>

    </div>
  </section>
  
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>
