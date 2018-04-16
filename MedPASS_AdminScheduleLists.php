<?php

// Initialize the session
session_start();
include 'db_functions.php'; 
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
  <script type="text/javascript">
			<!--
				function toggle_practitionerList() {
					var x = document.getElementById("practitioner-list");
					x.style.display = "block";
				}
				
				// Function to be used for showing practitioner's sched based on ID
				function toggle_schedule(practitionerID) {
					window.scrollTo(0,document.body.scrollHeight);
				}
			//-->
		</script>
  
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
            <li><a href="MedPASS_Welcome.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

   <section id="showcase">
      <div class="patientSubPage">
        <h1>Schedules</h1>
      </div>
    </section>
  </div>
  
 <section id="content">
    <div class="container contentSubPage" align="center">
      <p>
		<form method="POST" action="">
				  <select id="doc" name="doc">
    <option value="">Select Doctor</option>
    <?php
    $sql = "SELECT * FROM medical_practitioner ";
    $row = db_select($sql);
    foreach($row as $value){
        echo '<option value="'.$value['Employee_ID'].'">Dr '.$value['FName'].' '.$value['LName'].'</option>';
    }
    ?>
    <input type="submit" id="search" name="search" value="View Practitioner's Schedule">
		</form>
	    
    
      </p>
	
    
		<?php
        
if(isset($_POST['search'])){
    $search = "SELECT * FROM schedule WHERE Employee_ID='".$_POST['doc']."'";
    $rows = db_select($search);
    echo "<table class=\"table\">
      <thead{vertical-align: left}>
        <tr>
            <th>Date</th>
            <th>Time</th>
            <th>Appointment Booked</th>
            
        </tr>
      </thead>";
foreach($rows as $value) {
    echo "<tr>";
    echo "<td>".$value['Date']."</td>";
    echo "<td>".$value['Time']."</td>";
    echo "<td>".(($value['App_No']==NULL)?"No":"Yes")."</td>";
    echo "</tr>";
}
echo "</table>";
}
?>
        
       
		
	
	</div>
	
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>