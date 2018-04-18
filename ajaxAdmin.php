<html>
<?php
session_start();
//Include the database configuration file
include 'db_functions.php';

if(!empty($_POST["Employee_ID"])){
    $_SESSION['docID'] = $_POST["Employee_ID"];
    //Fetch all state data
    $query = "SELECT * FROM schedule WHERE Employee_ID = '".$_POST['Employee_ID']."' AND App_No IS NULL GROUP BY DATE ORDER BY Date ASC";
    $row = db_select($query);
    //Count total number of rows
 
    
   
    echo '<option value="">Select Date</option>';
    foreach($row as $value) { 
        echo '<option value="'.$value['Date'].'">'.$value['Date'].'</option>';
    }
   
}elseif(!empty($_POST["Date"])){
    $_SESSION['appDate'] = $_POST["Date"];
    $query = "SELECT * FROM schedule WHERE Employee_ID = '".$_SESSION['docID']."' AND App_No IS NULL AND Date ='".$_POST['Date']."' ORDER BY Time ASC";
    $row = db_select($query);
    
    
   
        echo '<option value="">Select Time</option>';
        foreach($row as $value){ 
            echo '<option value="'.$value['Time'].'">'.$value['Time'].'</option>';
        }
}elseif(!empty($_POST['Time'])) { 
    $_SESSION['appTime']= $_POST['Time'];
	$pat = "SELECT * FROM patient";
	$row = db_select($pat);
	
	echo '<option value="">Select Patient</option>';
        foreach($row as $value){ 
            echo '<option value="'.$value['Patient_ID'].'">'.$value['Patient_ID']."  ".$value['FName']." ".$value['LName'].'</option>';
        }
	
}elseif(!empty($_POST['Patient_ID'])) {
	$_SESSION['curPID']=$_POST['Patient_ID'];
	

    ?>
    
    <form method="POST" action="<?php
    $sql = "INSERT INTO appointment(Date, Time, PID, Prac_ID) Values('".$_SESSION['appDate']."', '".$_SESSION['appTime']."',
                '".$_SESSION['curPID']."', '".$_SESSION['docID']."')";
        db_query($sql);
        $search = "SELECT App_No FROM appointment WHERE Date='".$_SESSION['appDate']."' AND
            Time='".$_SESSION['appTime']."' AND PID='".$_SESSION['curPID']."' AND Prac_ID='".$_SESSION['docID']."'";
        $result = db_select($search);
        foreach($result as $row){
        $sql2 = "UPDATE schedule SET App_No='".$row['App_No']."' WHERE Date='".$_SESSION['appDate']."' AND
            Time='".$_SESSION['appTime']."' AND Employee_ID='".$_SESSION['docID']."'";
        db_query($sql2);
        db_close();
        }
    
    
    ?>">
    <input id="bookAPP" type="submit" name="bookAPP" value="Book This Appointment" style="width:300px;">
    </form>
<?php } ?>

</html>