<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>MedPASS</title>
  <link rel="stylesheet" href="DoctorFormat.css">
  <link rel="stylesheet" href="AvailabilityFormat.css">
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
        <h1>Enter Your Availability</h1>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container availability">
	<br>
    <form  method="POST" action="MedPASS_DoctorHome.php"> <!DATABASE TODO>
	 <label class="containerAvail"><input type="checkbox" id="Mon0800"><span class="checkboxAvailMon"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Tue0800"><span class="checkboxAvailTue"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Wed0800"><span class="checkboxAvailWed"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Thu0800"><span class="checkboxAvailThu"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Fri0800"><span class="checkboxAvailFri"></span></label>
	 <br>
	 <label class="containerAvail"><input type="checkbox" id="Mon0830"><span class="checkboxAvailMon"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Tue0830" id="Mon0800"><span class="checkboxAvailTue"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Wed0830"><span class="checkboxAvailWed"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Thu0830"><span class="checkboxAvailThu"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Fri0830"><span class="checkboxAvailFri"></span></label>
	 <br>
	 <label class="containerAvail"><input type="checkbox" id="Mon0900"><span class="checkboxAvailMon"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Tue0900"><span class="checkboxAvailTue"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Wed0900"><span class="checkboxAvailWed"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Thu0900"><span class="checkboxAvailThu"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Fri0900"><span class="checkboxAvailFri"></span></label>
	 <br>
	 <label class="containerAvail"><input type="checkbox" id="Mon0930"><span class="checkboxAvailMon"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Tue0930"><span class="checkboxAvailTue"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Wed0930"><span class="checkboxAvailWed"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Thu0930"><span class="checkboxAvailThu"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Fri0930"><span class="checkboxAvailFri"></span></label>
	 <br>
	 <label class="containerAvail"><input type="checkbox" id="Mon1000"><span class="checkboxAvailMon"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Tue1000"><span class="checkboxAvailTue"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Wed1000"><span class="checkboxAvailWed"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Thu1000"><span class="checkboxAvailThu"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Fri1000"><span class="checkboxAvailFri"></span></label>
	 <br>
	 <label class="containerAvail"><input type="checkbox" id="Mon1030"><span class="checkboxAvailMon"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Tue1030"><span class="checkboxAvailTue"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Wed1030"><span class="checkboxAvailWed"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Thu1030"><span class="checkboxAvailThu"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Fri1030"><span class="checkboxAvailFri"></span></label>
	 <br>
	 <label class="containerAvail"><input type="checkbox" id="Mon1100"><span class="checkboxAvailMon"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Tue1100"><span class="checkboxAvailTue"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Wed1100"><span class="checkboxAvailWed"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Thu1100"><span class="checkboxAvailThu"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Fri1100"><span class="checkboxAvailFri"></span></label>
	 <br>
	 <label class="containerAvail"><input type="checkbox" id="Mon1130"><span class="checkboxAvailMon"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Tue1130"><span class="checkboxAvailTue"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Wed1130"><span class="checkboxAvailWed"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Thu1130"><span class="checkboxAvailThu"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Fri1130"><span class="checkboxAvailFri"></span></label>
	 <br>
	 <label class="containerAvail"><input type="checkbox" id="Mon1200"><span class="checkboxAvailMon"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Tue1200"><span class="checkboxAvailTue"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Wed1200"><span class="checkboxAvailWed"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Thu1200"><span class="checkboxAvailThu"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Fri1200"><span class="checkboxAvailFri"></span></label>
	 <br>
	 <label class="containerAvail"><input type="checkbox" id="Mon1230"><span class="checkboxAvailMon"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Tue1230"><span class="checkboxAvailTue"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Wed1230"><span class="checkboxAvailWed"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Thu1230"><span class="checkboxAvailThu"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Fri1230"><span class="checkboxAvailFri"></span></label>
	 <br>
	 <label class="containerAvail"><input type="checkbox" id="Mon1300"><span class="checkboxAvailMon"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Tue1300"><span class="checkboxAvailTue"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Wed1300"><span class="checkboxAvailWed"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Thu1300"><span class="checkboxAvailThu"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Fri1300"><span class="checkboxAvailFri"></span></label>
	 <br>
	 <label class="containerAvail"><input type="checkbox" id="Mon1330"><span class="checkboxAvailMon"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Tue1330"><span class="checkboxAvailTue"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Wed1330"><span class="checkboxAvailWed"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Thu1330"><span class="checkboxAvailThu"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Fri1330"><span class="checkboxAvailFri"></span></label>
	 <br>
	 <label class="containerAvail"><input type="checkbox" id="Mon1400"><span class="checkboxAvailMon"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Tue1400"><span class="checkboxAvailTue"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Wed1400"><span class="checkboxAvailWed"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Thu1400"><span class="checkboxAvailThu"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Fri1400"><span class="checkboxAvailFri"></span></label>
	 <br>
	 <label class="containerAvail"><input type="checkbox" id="Mon1430"><span class="checkboxAvailMon"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Tue1430"><span class="checkboxAvailTue"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Wed1430"><span class="checkboxAvailWed"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Thu1430"><span class="checkboxAvailThu"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Fri1430"><span class="checkboxAvailFri"></span></label>
	 <br>
	 <label class="containerAvail"><input type="checkbox" id="Mon1500"><span class="checkboxAvailMon"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Tue1500"><span class="checkboxAvailTue"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Wed1500"><span class="checkboxAvailWed"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Thu1500"><span class="checkboxAvailThu"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Fri1500"><span class="checkboxAvailFri"></span></label>
	 <br>
	 <label class="containerAvail"><input type="checkbox" id="Mon1530"><span class="checkboxAvailMon"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Tue1530"><span class="checkboxAvailTue"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Wed1530"><span class="checkboxAvailWed"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Thu1530"><span class="checkboxAvailThu"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Fri1530"><span class="checkboxAvailFri"></span></label>
	 <br>
	 <label class="containerAvail"><input type="checkbox" id="Mon1600"><span class="checkboxAvailMon"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Tue1600"><span class="checkboxAvailTue"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Wed1600"><span class="checkboxAvailWed"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Thu1600"><span class="checkboxAvailThu"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Fri1600"><span class="checkboxAvailFri"></span></label>
	 <br>
	 <label class="containerAvail"><input type="checkbox" id="Mon1630"><span class="checkboxAvailMon"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Tue1630"><span class="checkboxAvailTue"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Wed1630"><span class="checkboxAvailWed"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Thu1630"><span class="checkboxAvailThu"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Fri1630"><span class="checkboxAvailFri"></span></label>
	 <br>
	 <label class="containerAvail"><input type="checkbox" id="Mon1700"><span class="checkboxAvailMon"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Tue1700"><span class="checkboxAvailTue"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Wed1700"><span class="checkboxAvailWed"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Thu1700"><span class="checkboxAvailThu"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Fri1700"><span class="checkboxAvailFri"></span></label>
	 <br>
	 <label class="containerAvail"><input type="checkbox" id="Mon1730"><span class="checkboxAvailMon"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Tue1730"><span class="checkboxAvailTue"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Wed1730"><span class="checkboxAvailWed"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Thu1730"><span class="checkboxAvailThu"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Fri1730"><span class="checkboxAvailFri"></span></label>
	 <br>
	 <label class="containerAvail"><input type="checkbox" id="Mon1800"><span class="checkboxAvailMon"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Tue1800"><span class="checkboxAvailTue"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Wed1800"><span class="checkboxAvailWed"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Thu1800"><span class="checkboxAvailThu"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Fri1800"><span class="checkboxAvailFri"></span></label>
	 <br>
	 <label class="containerAvail"><input type="checkbox" id="Mon1830"><span class="checkboxAvailMon"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Tue1830"><span class="checkboxAvailTue"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Wed1830"><span class="checkboxAvailWed"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Thu1830"><span class="checkboxAvailThu"></span></label>
	 <label class="containerAvail"><input type="checkbox" id="Fri1830"><span class="checkboxAvailFri"></span></label>
	 <br>

	  
      
    </div>
	<a href="MedPASS_DoctorHome.php"><input type="submit" value="Submit New Availability"></a>
    </form>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>