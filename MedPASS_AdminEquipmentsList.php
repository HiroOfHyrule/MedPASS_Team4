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
		$sql = "INSERT INTO assistance_equipment (Equip_ID, Equipment_Type, Num_In_Stock, Cost_Per_Month) 
		VALUES('".$_POST['eqid']."','".$_POST['equipName']."','".$_POST['stock']."','".$_POST['cost']."')";
		$result = db_query($sql);
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
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

   <section id="showcase">
      <div class="patientSubPage">
        <h1>Rental Equipment</h1>
      </div>
    </section>
  </div>
  
 <section id="content">
    <div class="row contentSubPage">
		<div id="mainContent" class="column" >
			<h3>Rented Equipment</h3>
				<!-- Insert list of rented equipments -->
				
				<?php
$rows = db_select("SELECT p.FName, p.LName, E.Equipment_Type, R.Return_Date 
                FROM patient as p, assistance_equipment as E, rents as R 
                    WHERE R.PID=p.Patient_ID AND R.Equip_ID=E.Equip_ID 
                    ORDER BY R.Return_Date");
echo "<table class=\"table\">
      <thead{vertical-align: left}>
        <tr>
            <th>Rented By</th>
            <th>Equipment Type</th>
            <th>Return Date</th>
            
        </tr>
      </thead>";
foreach($rows as $value) {
    echo "<tr>";
    echo "<td>".$value['FName']." ".$value['LName']."</td>";
    echo "<td>".$value['Equipment_Type']."</td>";
    echo "<td>".$value['Return_Date']."</td>";
    echo "</tr>";
}
echo "</table>";
?></p>
		</div>
		<div id="sideBar" class="column" >
			<h3>All Equipment</h3>
				<!-- Insert list of all avail equipments -->
				<?php
$rows = db_select("SELECT * FROM assistance_equipment");
echo "<table class=\"table\">
      <thead{vertical-align: left}>
        <tr>
           
            <th>Equipment Type</th>
            <th>Total Stock</th>
			<th>Cost Per Month</th>
            
        </tr>
      </thead>";
foreach($rows as $value) {
    echo "<tr>";
    echo "<td>".$value['Equipment_Type']."";
    echo "<td>".$value['Num_In_Stock']."</td>";
    echo "<td>".$value['Cost_Per_Month']."</td>";
    echo "</tr>";
}
echo "</table>";
?>
				<a onclick="toggle_add_equip()"><input type="submit" value="Add new equipment" style="width:50%;"></a>
				<div id="add-new-equip" style="display:none;">
					<form method="POST" action=""> 
						<label for="ename" style="font-size:15px;">Equipment Name:</label>
						<input type="text" id="ename" name="equipName" placeholder="...">
						<br>
						<label for="eqid" style="font-size:15px;">Equipment ID:</label>
						<input type="text" id="eqid" name="eqid" placeholder="...">
						<br>
						<label for="stock" style="font-size:15px;">Stock:</label>
						<input type="text" id="stock" name="stock" placeholder="...">
						<br>
						<label for="cost" style="font-size:15px;">Cost Per Month:</label>
						<input type="text" id="cost" name="cost" placeholder="...">
					<br>
					<input type="submit" name="submit" value="Submit"></a>
					</form>
				</div>
		</div>
		
	</div>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>
