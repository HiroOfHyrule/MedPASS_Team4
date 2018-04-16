<html>
<head>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#eid').on('change',function(){
        var eid = $(this).val();
        if(eid){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'Employee_ID='+eid,
                success:function(html){
                    $('#date').html(html);
                    $('#time').html('<option value="">Select date first</option>'); 
                }
            }); 
        }else{
            $('#date').html('<option value="">Select doctor first</option>');
            $('#time').html('<option value="">Select date first</option>'); 
        }
    });
    
    $('#date').on('change',function(){
        var date = $(this).val();
        if(date){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'Date='+date,
                success:function(html){
                    $('#time').html(html);
                }
            }); 
        }else{
            $('#time').html('<option value="">Select date first</option>'); 
        }
    });
    
    $('#time').on('change',function(){
        var time = $(this).val();
        if(time){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'Time='+time,
                success:function(html){
                    $('#bookAPP').html(html);
                }
            }); 
        }else{
            $('#bookAPP').html('<option value="">Select date first</option>'); 
        }
    });
});
</script>
</body>
<?php

//Include the database configuration file


//Fetch all the country data
$query = "SELECT * FROM medical_practitioner ORDER BY LName ASC";
$row = db_select($query);


?>
<select id="eid">
    <option value="">Select Doctor</option>
    <?php
    foreach($row as $value){
        echo '<option value="'.$value['Employee_ID'].'">'.$value['LName'].'</option>';
    }
    ?>
</select>

<select id="date">
    <option value="">Select doctor first</option>
</select>

<select id="time">
    <option value="">Select date first</option>
</select>
<form method="POST" action="">
<input id="book-appt" type="submit" name="submit" value="Book This Appointment" style="width:300px;">
</form>
</html>