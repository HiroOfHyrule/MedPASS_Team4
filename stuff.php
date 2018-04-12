<?php
//code for displaying rental equip
    include 'config.php';
    $sql = "SELECT r.Start_Date, r.Return_Date, e.Equipment_Type, e.Cost_Per_Month
                FROM patient AS p, assistance_equipment AS e, rents AS r
                WHERE p.Patient_ID = '".$_SESSION['id']."' AND p.Patient_ID = r.PID AND
                r.Equip_ID = e.Equip_ID";

    $result = mysqli_query($link, $sql);
    if(!$result) {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }

    while ($row = mysqli_fetch_array($result)) {
    $start = $row['Start_Date'];
    $end = $row['Return_Date'];
    $eType = $row['Equipment_Type'];
    $cost = $row['Cost_Per_Month'];
    } 
    mysqli_close($link);
    
?>

<?
$sql="Select PcID from PC"
$q=mysql_query($sql)
echo "<select name=\"pcid\">"; 
echo "<option size =30 ></option>";
while($row = mysql_fetch_array($q)) 
{        
echo "<option value='".$row['PcID']."'>".$row['PcID']."</option>"; 
}
echo "</select>";
?>