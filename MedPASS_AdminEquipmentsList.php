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
        <h1>Equipments</h1>
      </div>
    </section>
  </div>
  
 <section id="content">
    <div class="container contentSubPage" align="center">
      <p style="font-size:18px;">
		Insert equipments list here
      </p>
	</div>
	
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>