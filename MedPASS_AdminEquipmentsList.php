<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>MedPASS</title>
  <link rel="stylesheet" href="AdminFormat.css">
  <script type="text/javascript">
			<!--
				function toggle_add_equip() {
					var x = document.getElementById("add-new-equip");
					x.style.display = "block";
				}
				
				function submit_add_equip() {
					var e = document.getElementById("add-new-equip");
					e.style.display = 'none';
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
    <div class="row contentSubPage">
		<div id="mainContent" class="column" >
			<h3>Rented Equipments</h3>
				<!-- Insert list of rented equipments -->
				<p>Insert equipments list here.</p>
		</div>
		<div id="sideBar" class="column" >
			<h3>Available Equipments</h3>
				<!-- Insert list of all avail equipments -->
				<p>Insert equipments list here.</p>
				<a onclick="toggle_add_equip()"><input type="submit" value="Add new equipment" style="width:50%;"></a>
				<div id="add-new-equip" style="display:none;">
					<form>
						<label for="ename" style="font-size:15px;">Equipment Name:</label>
						<input type="text" id="ename" name="equipName" placeholder="...">
						
					</form>
					<a onclick="submit_add_equip()"><input type="submit" value="Submit"></a>
				</div>
		</div>
		
	</div>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>
