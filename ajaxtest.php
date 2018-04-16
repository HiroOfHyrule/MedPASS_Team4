<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 4/15/2018
 * Time: 1:47 AM
 */
include 'db_functions.php';

?>

<html>
<head>
<script>
function showTime(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","timetest.php?t="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
</script>
</head>
<body>
<form>
<select name="date" onchange="showTime(this.value)">
<?php
$q = intval($_GET['q']);
$sql="SELECT * FROM schedule WHERE Employee_ID = '".$q."' ORDER BY DATE";
$result = db_select($sql);

foreach($result as $row) {
    echo "<option value='".$row['Date']."'>".$row['Date']."</option>";
}
echo "</select>";

db_close();
?>
</select>
<form>
</body>
</html>