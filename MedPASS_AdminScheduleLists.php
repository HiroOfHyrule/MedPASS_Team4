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
		<form>
			<label for="PFname">Practitioner Full Name:</label>
			<input type="text" id="PFname" name="pracFname" placeholder="First name..">
			<input type="text" id="PLname" name="pracLname" placeholder="Last name..">
		</form>
	    <a onclick="toggle_practitionerList();"><input type="submit" value="View Practitioner's Schedule"></a>
    
      </p>
	</div>
    <div id="practitioner-list"  class="container" style="display: none;">
		<!-- Replace this with list of practitioner ID's -->
		<!-- Each element goes to MedPASS_AdminPractitionerSched.php when clicked -->
		<p style="font-size:20px;">&#9888; Could not find practitioner with that name.</p>
	
	</div>
	
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>