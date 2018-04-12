<?php
// Set timezone
date_default_timezone_set('Canada/Mountain');
 
// Get prev & next month
if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    // This month
    $ym = date('Y-m');
}
 
// Check format
$timestamp = strtotime($ym . '-01');
if ($timestamp === false) {
    $timestamp = time();
}
 
// Today
$today = date('Y-m-j', time());
 
// For H3 title
$html_title = date('F', $timestamp) . " " . date('Y', $timestamp);

// for popup date title
$html_todays_date =  date('F', $timestamp) . " " .  date('d', $timestamp);

 
// Create prev & next month link     mktime(hour,minute,second,month,day,year)
$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));
 
// Number of days in the month
$day_count = date('t', $timestamp);
 
// 0:Sun 1:Mon 2:Tue ...
$str = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));
 
// Create Calendar!!
$weeks = array();
$week = '';

// id for each day
$td_id = '';
 
// Add empty cell
$week .= str_repeat('<td></td>', $str);
 
for ( $day = 1; $day <= $day_count; $day++, $str++) {
     
    $date = $ym.'-'.$day;
    $td_id = date('F', $timestamp) . '-' . $day;
    if ($today == $date) {
        $week .= '<td id="' . $td_id . '"' . ' class="today" onclick="toggle_visibility(\'' . $td_id . '\');">'.$day;
    } else {
        $week .= '<td id="' . $td_id . '"' . ' onclick="toggle_visibility(\'' . $td_id . '\');">'.$day;
    }
    $week .= '</td>';
     
    // End of the week OR End of the month
    if ($str % 7 == 6 || $day == $day_count) {
         
        if($day == $day_count) {
            // Add empty cell
            $week .= str_repeat('<td></td>', 6 - ($str % 7));
        }
         
        $weeks[] = '<tr>'.$week.'</tr>';
         
        // Prepare for new week
        $week = '';
         
    }
 
}
 
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>MedPASS</title>
  <link rel="stylesheet" href="DoctorFormat.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script type="text/javascript">
			<!--
			    function toggle_visibility(id) {
			       var e = document.getElementById("popup-box");
				   var toDisplay = id.replace("-", " ");
				   document.getElementById("date-popup").innerHTML = toDisplay;
				   
			       if(e.style.display == 'block')
			          e.style.display = 'none';
			       else
			          e.style.display = 'block';
			    }
				
				function toggle_book_appt() {
					var x = document.getElementById("book-appt");
					x.style.display = "block";
					window.scrollTo(0,document.body.scrollHeight);
				}
			//-->
		</script>
	
</head>

<body>

	<div id="popup-box" class="popup-position">
		<div id="popup-wrapper">
			<div id="popup-container">
				<h3 id="date-popup">Date here</h3>
				<p id="appt-info">You have no appointments booked at this date.</p>
				<p><a href="javascript:void(0)" onclick="toggle_visibility('popup-box');">Close</a></p>
			</div>
		</div>
	</div>

  <div class="wrapper">
    <header style="margin-top: 20px;">
      <nav>
        <div class="logo" style="margin-top: 40px;">
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
        <h1>Your Appointments</h1>
      </div>
    </section>
  </div>

  <section id"content">
	
	<div class="container">
		<h2 align="center"><a href="?ym=<?php echo $prev; ?>">&lt;</a> <?php echo $html_title; ?> <a href="?ym=<?php echo $next; ?>">&gt;</a></h2>
		<br>
		<table class="table table-bordered">
			<tr>
				<th>S</th>
				<th>M</th>
				<th>T</th>
				<th>W</th>
				<th>T</th>
				<th>F</th>
				<th>S</th>
			</tr>
			<?php
				foreach ($weeks as $week) {
					echo $week;
				}
			?>
		</table>
	</div>
	

	<div class="container contentSubPage">
      <p>
	  You have no upcoming appointments.<br>
	  <a onclick="toggle_book_appt();"><input type="submit" value="Book an appointment"></a>
      </p>
    </div>
	
	<div id="book-appt" class="container contentSubPage" style="display: none;">
		<form  method="POST" action="MedPASS_DoctorAppointments.php"> <!DATABASE TODO>
			<label for="fname">First Name:</label>
			<input type="text" id="fname" name="firstname" placeholder="Your first name..">
			<br>
			<label for="lname">Last Name:</label>
			<input type="text" id="lname" name="lastname" placeholder="Your last name..">
			<br>
			<label for="appt-date">Date:</label>
			<input type="date" id="appt-date" name="appointmentdate">
			<br>
			<label for="appointmenttime">Time:</label>
			<input type="time" id="appointmenttime" name="appointmenttime" placeholder="Enter time..">
			<br>
			<label for="drname">Doctor's name:</label>
			<input type="text" id="addr" name="drname" placeholder="Your doctor's name..">
			<br>
			</form>
	  <a href="MedPASS_DoctorAppointments.php"><input type="submit" value="Book This Appointment"></a>
     
	</div>
	
	<div>
	
	</div>
	
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>