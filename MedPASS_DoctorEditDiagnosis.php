<?php
// Initialize the session
session_start();
include 'db_functions.php'; 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: MedPASS_Welcome.php");
  exit;
}

if(isset($_POST['submit'])) {
	$illness = $_POST['ill'];
	$pid = $_SESSION['curPID'];
	$sql = "DELETE FROM affects WHERE Illness_Name ='$illness' AND PID ='$pid' ";
	db_query($sql);
mysqli_close($link);
header("Location: MedPASS_DoctorManagePatientInfo.php");
exit();
}

	
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
        <h1>Undiagnose an Illness</h1>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container contentSubPage">
	This Patient's Illnesses:<?php 
                
                $sql = "SELECT Illness_Name FROM affects WHERE PID = '".$_SESSION['curPID']."'";
                $result = db_select($sql);
                $str ="    ";
                foreach($result as $row) {
                $ill = $row['Illness_Name'];
                
                $str.= " ".$ill.",";
                }
                $str = substr($str,0,-1);
                echo $str;
                db_close();
                ?><br>
      <p>
      <form  method="POST" action="">
		  <select id="ill" name="ill">
    <option value="">Select Treatment</option>
    <?php
    $sql = "SELECT * FROM affects WHERE PID='".$_SESSION['curPID']."'";
    $row = db_select($sql);
    foreach($row as $value){
        echo '<option value="'.$value['Illness_Name'].'">'.$value['Illness_Name'].'</option>';
    }
    ?>
		<br>
	  <input type="submit" name="submit" value="Un-Diagnosis"></a>
      </form>
      </p>

    </div>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>
