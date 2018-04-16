<?php

// Initialize the session
session_start();
include('db_functions.php');
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: MedPASS_Welcome.php");
  exit;
}
if(!empty($_POST['bookAPP'])){
        echo "LOL";
}

?>
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

$yearToday = date('Y', $timestamp);



 
for ( $day = 1; $day <= $day_count; $day++, $str++) {
     
    $date = $ym.'-'.$day;
    $td_id = $yearToday . '-' . date('m', $timestamp) . '-' . $day;
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
  <link rel="stylesheet" href="HomeFormat.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script type="text/javascript">
			<!--
			    function toggle_visibility(id) {
			       var e = document.getElementById("popup-box");
				   var toDisplay = id.replace("-", "");
				   toDisplay = toDisplay.replace("-", "");
				   document.getElementById("date-popup").innerHTML = toDisplay;
				   
				   var dateFormat = id.replace("-", "");
				   var finalDate = dateFormat.replace("-", "");
				   document.getElementById("date-clicked").value = finalDate;
				   
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
				
				function enableDateButton() {
					document.getElementById("select-date").disabled = true;
				}
				
				function enableBookApptButton() {
					document.getElementById("book-appt").disabled = true;
				}
			//-->
		</script>
	
</head>

<body>

	<div id="popup-box" class="popup-position">
		<div id="popup-wrapper">
			<div id="popup-container">
				<h3 id="date-popup">Date here</h3>
				<!-- ymd --> 
				<p id="appt-info">You have no appointments booked at this date.</p>
				<form> <input type="text" id="date-clicked" name="dateClicked" style="display: none;"></form>
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
            <li><a href="MedPASS_PatientHome.php">Home</a></li>
			<li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="showcase">
      <div class="patientSubPage">
        <h1>Your Appointments</h1> <!DATABASE TODO>
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
/* 
    
    $sql = "SELECT a.Date, a.Time, p.LName FROM appointment as a, medical_practitioner as p 
	WHERE PID='".$_SESSION['id']."' AND p.Employee_ID=a.Prac_ID";

    $result = mysqli_query($link, $sql);
    if(!$result) {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }

    while ($row = mysqli_fetch_array($result)) {
    $date = $row['Date'];
	$time = $row['Time'];
	$lname = $row['LName'];
    echo "Dr ".$lname." at ".$time." on ".$date;
    echo"<br>";
    } 
    mysqli_close($link); */
    
?>
	 <br>
	  
      </p>
    </div>
	
	<div id="book-appt" class="container contentSubPage" >
    <?php include 'hopeful.php'; ?>
	<!--	<form method="POST" action="addAppointment.php">
			
			<label for="drname">Doctor's name:</label>
            <?php
            
            /* $query = "SELECT LName, Employee_ID FROM medical_practitioner";
            $result = mysqli_query($link,$query);
            if(!$result) {
                echo "Error: " . $query . "<br>" . mysqli_error($link);
            }
            echo "<select name=\"drname\">";
            
            while($row = mysqli_fetch_array($result)) {
                echo "<option value='".$row['Employee_ID']."'>Dr ".$row['LName']."</option>";
            }
            echo "</select>";
            mysqli_close($link); */
            ?>
			
			
		
	
			<div id="avail-dates" >
				<label for="appt-date">Date:</label>
				
				<input type="date" id="appt-date" name="appointmentdate">
				
				
			</div>
		
		
			<div id="avail-times" >
				<label for="appointmenttime">Time:</label>
				<input type="text" id="appointmenttime" name="appointmenttime" placeholder="Enter time..">
				
				<a><input id="book-appt" type="submit" name="submit" value="Book This Appointment" style="width:300px;"></a>
			</div>
		</form>-->
	  

     
	</div>
	
	<div>
	
	</div>
	
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>