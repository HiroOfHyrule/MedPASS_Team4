<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: MedPASS_Welcome.php");
  exit;
}
?>
<?php
    include 'config.php';
    $sql = "SELECT * FROM medical_practitioner WHERE Employee_ID = '".$_SESSION['id']."'";

    $result = mysqli_query($link, $sql);
    if(!$result) {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }

    while ($row = mysqli_fetch_array($result)) {
    $eid = $row["Employee_ID"];
    $firstname = $row["FName"];
    $lastname = $row["LName"];
    $phone = $row["Phone"];
    $address = $row["Address"];
    $email = $row["Email"];
    $spec = $row["Specialization"];
    $regNo = $row["Reg_No"];
    } 
    mysqli_close($link);
?>
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
        <h1>Your Practitioner Information</h1>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container contentSubPage">
      <p>
      
      <!DATABASE TODO>
      
      Employee ID: <?php echo $eid; ?><br>
	  First Name: <?php echo $firstname; ?><br>
	  Last Name: <?php echo $lastname; ?><br>
	  Address: <?php echo $address; ?><br>
	  Phone Number: <?php echo $phone; ?><br>
	  Email: <?php echo $email; ?><br>
      Specialization: <?php echo $spec; ?><br>
      Reg_No: <?php echo $regNo; ?><br>
	  <a href="MedPASS_DoctorInfoEdit.php"><input type="submit" value="Edit Info"></a>
      </p>

    </div>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>