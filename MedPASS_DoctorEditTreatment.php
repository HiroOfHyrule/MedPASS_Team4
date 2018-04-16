<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: MedPASS_Welcome.php");
  exit;
}  
include 'db_functions.php';
// for deleting an illness  
if(isset($_POST['delete'])) {
	$treatment = $_POST['treatment'];
	$pid = $_SESSION['curPID'];
	$eid = $_SESSION['id'];
	$query = "DELETE FROM treating WHERE treatmentName ='".$treatment."' AND PID ='".$pid."' AND PR_ID='".$eid."'";
	db_query($query);
	db_close();
	header("Location: MedPASS_DoctorManagePatientInfo.php");
	exit();
}

/*if(isset($_POST['edit'])) {
	$treatment = $_POST['treatment'];
	$pid = $_SESSION['curPID'];
	$eid = $_SESSION['id'];
	$treatDesc = $_POST['treatmentDesc'];
	
	$query = "UPDATE treating SET treatmentNote ='$treatDesc' 
				WHERE PID='$pid' AND PR_ID='$eid' AND treatmentName='$treatment'";
	
  if (mysqli_query($link, $query)) {
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($link);
}
	mysqli_close($link);
	header("Location: MedPASS_DoctorManagePatientInfo.php");
	exit();
}*/
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
			<li><a href="MedPASS_DoctorManagePatientInfo.php">Back</a></li>
			<li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="showcase">
      <div class="patientSubPage">
        <h1>Delete a Treatment</h1>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container contentSubPage">
    <!--  <p> 
      <form  method="POST" action=""> 
		<label for="treat">Treatment Name:</label><br>
		<input type="text" id="treat" name="treatment" placeholder="Treatment..">
		<br>
		<label for="treatDesc">Treatment Description:</label><br>
		<textarea  maxlength = "255" cols="85" rows="3" id="treatDesc" name="treatmentDesc" placeholder="Treatment Description.."></textarea>
		<br> 
	  <input type="submit" name="edit" value="Submit Treatment"></a>
      </form>-->
	  
	  <form  method="POST" action=""> 
	  <select id="treatment" name="treatment">
    <option value="">Select Treatment</option>
    <?php
    $sql = "SELECT * FROM treating WHERE PID='".$_SESSION['curPID']."' AND PR_ID='".$_SESSION['id']."'";
    $row = db_select($sql);
    foreach($row as $value){
        echo '<option value="'.$value['treatmentName'].'">'.$value['treatmentName'].'</option>';
    }
    ?>
    </select>
		<br>
	  <input type="submit" name="delete" value="Delete Treatment"><br>
	  </form>
      </p>

    </div>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>
