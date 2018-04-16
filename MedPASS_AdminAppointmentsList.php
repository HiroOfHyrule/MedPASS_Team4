<?php
session_start();
include 'db_functions.php';
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
  <link rel="stylesheet" href="AdminFormat.css">
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
				<p id="appt-info">There are no appointments booked at this date.</p>
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
            <li><a href="MedPASS_AdminHome.php">Home</a></li>
			<li><a href="MedPASS_Welcome.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="showcase">
      <div class="patientSubPage">
        <h1>Appointments This Month</h1> <!DATABASE TODO>
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
      <?php
        

    $search = "SELECT p.FName AS PFName, p.LName AS PLName, m.LName AS MLName, a.Date, a.Time, a.App_No FROM appointment AS a, medical_practitioner AS m, patient AS p 
        WHERE a.PID=p.Patient_ID AND a.Prac_ID = m.Employee_ID AND a.App_No IS NOT NULL ORDER BY Date, Time";
    $rows = db_select($search);
    echo "<table class=\"table\">
      <thead{vertical-align: left}>
        <tr>
            <th>Patient</th>
            <th>Doctor</th>
            <th>Appointment Number</th>
            <th>Date</th>
            <th>Time</th>
            
        </tr>
      </thead>";
foreach($rows as $value) {
    echo "<tr>";
    echo "<td>".$value['PFName']." ".$value['PLName']."</td>";
    echo "<td>Dr ".$value['MLName']."</td>";
    echo "<td>".$value['App_No']."</td>";
    echo "<td>".$value['Date']."</td>";
    echo "<td>".$value['Time']."</td>";
    echo "</tr>";
}
echo "</table>";

?>
	  There are no booked appointments.<br>
      </p>
    </div>
	
	<div>
	
	</div>
	
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>