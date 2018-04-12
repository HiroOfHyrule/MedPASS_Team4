<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: MedPASS_Welcome.php");
  exit;
}
include 'config.php';
if (isset($_POST['submit'])) { 
    $_SESSION['curPID'] = $_POST['patientID'];
}
    $sql = "SELECT * FROM patient WHERE Patient_ID = '".$_SESSION['curPID']."'";
    
    $result = mysqli_query($link, $sql);
    if(!$result) {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }

    while ($row = mysqli_fetch_array($result)) {
    $pid = $row["Patient_ID"];
    $firstname = $row["FName"];
    $lastname = $row["LName"];
    $dob = $row["DOB"];
    $sex = $row["Sex"];
    $phone = $row["Phone"];
    $address = $row["Address"];
    $email = $row["Email"];
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
			<li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="showcase">
      <div class="patientSubPage">
        <h1><?php echo $firstname." ".$lastname;?>'s Info</h1>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container contentSubPage">
      <p>
      
      <!DATABASE TODO>
      
      Patient ID: <?php echo $pid;?><br>
	  First Name: <?php echo $firstname;?><br>
	  Last Name: <?php echo $lastname;?><br>
	  Birthday: <?php echo $dob;?><br>
	  Gender: <?php echo $sex;?><br>
	  Address: <?php echo $address;?><br>
	  Phone Number: <?php echo $phone;?><br>
	  Email: <?php echo $email;?><br>
	  <br>
      Rented Equipment:<?php 
                include 'config.php';
                $sql = "SELECT e.Equipment_Type FROM patient AS p, assistance_equipment AS e, rents AS r
                WHERE p.Patient_ID = '".$pid."' AND p.Patient_ID = r.PID AND
                r.Equip_ID = e.Equip_ID";
                $result = mysqli_query($link, $sql);
                if(!$result) {
                echo "Error: " . $sql . "<br>" . mysqli_error($link);
                }
                $str ="    ";
                while ($row = mysqli_fetch_array($result)) {
                $eType = $row['Equipment_Type'];
                
                $str.= $eType.",";
                }
                $str = substr($str,0,-1);
                echo $str;
                mysqli_close($link);
                ?> <br>
      <br>
      Diagnosed Illnesses: <?php 
                include 'config.php';
                $sql = "SELECT Illness_Name FROM affects WHERE PID = '".$pid."'";
                $result = mysqli_query($link, $sql);
                if(!$result) {
                echo "Error: " . $sql . "<br>" . mysqli_error($link);
                }
                $str ="    ";
                while ($row = mysqli_fetch_array($result)) {
                $ill = $row['Illness_Name'];
                
                $str.= " ".$ill.",";
                }
                $str = substr($str,0,-1);
                echo $str;
                mysqli_close($link);
                ?><br>
	  Treatments:  <?php 
                include 'config.php';
                $sql = "SELECT treatmentName FROM treating WHERE PID = '".$pid."'";
                $result = mysqli_query($link, $sql);
                if(!$result) {
                echo "Error: " . $sql . "<br>" . mysqli_error($link);
                }
                $str ="    ";
                while ($row = mysqli_fetch_array($result)) {
                $treat = " ".$row['treatmentName'];
                
                $str.= $treat.",";
                }
                $str = substr($str,0,-1);
                echo $str;
                mysqli_close($link);
                ?><br>  
	  </p>
      <a href="MedPASS_DoctorAddDiagnosis.php"><input type="submit" value="Assign Diagnosis"></a>
      <a href="MedPASS_DoctorEditDiagnosis.php"><input type="submit" value="Unassign Diagnosis"></a> <br>
      
	  <a href="MedPASS_DoctorAddTreatment.php"><input type="submit" value="Assign Treatments"></a> 
      <a href="MedPASS_DoctorEditTreatment.php"><input type="submit" value="Unassign Treatments"></a><br>
      
	  <a href="MedPASS_DoctorViewMedRec.php"><input type="submit" value="View Medical Record"></a>

    </div>
  </section>
  
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>