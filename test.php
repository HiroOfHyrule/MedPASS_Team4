<?php
include 'db_functions.php';
$rows = db_select("SELECT p.FName, p.LName, E.Equipment_Type, R.Return_Date 
                FROM patient as p, assistance_equipment as E, rents as R 
                    WHERE R.PID=p.Patient_ID AND R.Equip_ID = E.Equip_ID
                    ORDER BY R.Return_Date ASC");
                    
if($rows === false) {
    $error = db_error();
}
if(!empty($rows)){    
echo "<table>
      <thead{vertical-align: left}>
        <tr>
            <th>Rented By</th>
            <th>Equipment Type</th>
            <th>Return Date</th>
            <th></th>
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
} else {
    echo "Currently No Equipment Rented Out";
}
?>