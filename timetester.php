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
<body>
<form>
<
<?php
$t = intval($_GET['t']);
$sql="SELECT * FROM schedule WHERE Employee_ID = '".$q."' AND Date='".$t."'";
$result = db_select($sql);
echo "<select name=\"info\">";
foreach($result as $row) {
    echo "<option value='".$row['Date']."'>".$row['Date']."</option>";
}
echo "</select>";

db_close();
?>
</body>
</html>