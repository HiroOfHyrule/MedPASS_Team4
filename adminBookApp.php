<?php
    $sql = "INSERT INTO appointment(Date, Time, PID, Prac_ID) Values('".$_SESSION['appDate']."', '".$_SESSION['appTime']."',
                '".$_POST['patient']."', '".$_SESSION['docID']."')";
        db_query($sql);
        $search = "SELECT App_No FROM appointment WHERE Date='".$_SESSION['appDate']."' AND
            Time='".$_SESSION['appTime']."' AND PID='".$_SESSION['patient']."' AND Prac_ID='".$_SESSION['docID']."'";
        $result = db_select($search);
        foreach($result as $row){
        $sql2 = "UPDATE schedule SET App_No='".$row['App_No']."' WHERE Date='".$_SESSION['appDate']."' AND
            Time='".$_SESSION['appTime']."' AND Employee_ID='".$_SESSION['docID']."'";
        db_query($sql2);
        db_close();
        }
		header("Location: MedPASS_AdminAppointmentsList.php";
		exit();
    
    ?>