<?php 
include 'config.php';
//SELECT function, will return an array of results
function db_select($query) {
    $rows = array();
    $result = db_query($query);

    // If query failed, return `false`
    if($result === false) {
        return false;
    }

    // If query was successful, retrieve all the rows into an array
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    db_close();
    return $rows;
}

// Connecting to db
function db_query($query) {
    // Connect to the database
    $connection = db_connect();

    // Query the database
    $result = mysqli_query($connection,$query);

    return $result;
}

// error function
function db_error() {
    $connection = db_connect();
    return mysqli_error($connection);
}

// clean queries
function db_quote($value) {
    $connection = db_connect();
    return "'" . mysqli_real_escape_string($connection,$value) . "'";
}

function db_close() {
    mysqli_close(db_connect());
}

// Returns True is username is free
function db_usernameCheck($user) {
    $query = "SELECT Username FROM administrative_staff WHERE Username = '".$user."' 
        UNION SELECT Username FROM patient WHERE Username = '".$user."' 
        UNION SELECT Username FROM medical_practitioner WHERE Username = '".$user."'";
    $result = db_query($query);
    if(mysqli_num_rows($reult) >=1){
        return false;
    } else {
        return true;
    }
}
/**
// *********EXAMPLE OF ABOVE************
// Quote and escape form submitted values
$name = db_quote($_POST['username']);
$email = db_quote($_POST['email']);

// Insert the values into the database
$result = db_query("INSERT INTO `users` (`name`,`email`) VALUES (" . $name . "," . $email . ")");
//*****************************************************************


//querying the database
$rows = db_select("SELECT `name`,`email` FROM `users` WHERE id=5");
if($rows === false) {
    $error = db_error();
    // Handle error - inform administrator, log to file, show error page, etc.
}
**/

