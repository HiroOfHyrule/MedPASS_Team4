<html>
<head>
<style ="text\css">
table, td, th, tr {
 border: 1px solid black;
 padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}
tr:hover {background-color: #ddd;}

th {
 padding-top: 5px;
 padding-bottom: 5px;
 text-align: left;
 background-color: #a53051;
 color: white;
}

</style>
</head>

<?php
include 'db_functions.php';
$rows = db_select("SELECT p.FName, p.LName, E.Equipment_Type, R.Return_Date 
                FROM patient as p, assistance_equipment as E, rents as R 
                    WHERE R.PID=p.Patient_ID AND R.Equip_ID = E.Equip_ID
                    ORDER BY R.Return_Date ASC");
                    

if(!empty($rows)){    
echo "<table>
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
} else {
    echo "Currently No Equipment Rented Out";
}
?>
</html>