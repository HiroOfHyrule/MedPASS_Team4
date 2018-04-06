<?php
$servername = "localhost";
$username = "admins";
$password = "Cpsc471!2018";
$dbname = "medpass";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// sql to create ADMINISTRATIVE_STAFF table
$sql = "CREATE TABLE ADMINISTRATIVE_STAFF (
Employee_ID INT(255) UNSIGNED AUTO_INCREMENT NOT NULL, 
FName VARCHAR(30) NOT NULL,
LName VARCHAR(30) NOT NULL,
Email VARCHAR(50),
Phone INT(10) UNSIGNED NOT NULL,
Admin_Position VARCHAR (50) NOT NULL,
PRIMARY KEY(Employee_ID)
)ENGINE=InnoDB";

if (mysqli_query($conn, $sql)) {
    echo "Table ADMINISTRATIVE_STAFF created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// sql to create PATIENT table
$patient = "CREATE TABLE PATIENT (
Patient_ID INT(255) UNSIGNED AUTO_INCREMENT NOT NULL,
FName VARCHAR(30) NOT NULL,
LName VARCHAR(30) NOT NULL,
DOB DATE NOT NULL,
Sex VARCHAR(10) NOT NULL,
Phone INT(10) UNSIGNED NOT NULL,
Address VARCHAR(50),
Email VARCHAR(50),
PRIMARY KEY(Patient_ID))ENGINE=InnoDB";

if (mysqli_query($conn, $patient)) {
    echo "Table PATIENT created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// sql to create MEDICAL_PRACTITIONER table
$medP = "CREATE TABLE MEDICAL_PRACTITIONER (
Employee_ID INT(255) UNSIGNED AUTO_INCREMENT NOT NULL,
FName VARCHAR(30) NOT NULL,
LName VARCHAR(30) NOT NULL,
Specialization VARCHAR(255) NOT NULL,
Phone INT(10) UNSIGNED NOT NULL,
Address VARCHAR(50),
Email VARCHAR(50),
Reg_No INT(255) UNSIGNED UNIQUE NOT NULL,
PRIMARY KEY(Employee_ID))ENGINE=InnoDB";

if (mysqli_query($conn, $medP)) {
    echo "Table MEDICAL_PRACTITIONER created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
// sql to create APPOINTMENT table
$app = "CREATE TABLE APPOINTMENT (
App_No INT(255) UNSIGNED AUTO_INCREMENT NOT NULL,
Date DATE NOT NULL,
Time TIME NOT NULL,
PID INT(255) UNSIGNED NOT NULL,
Prac_ID INT(255) UNSIGNED NOT NULL,
PRIMARY KEY(App_No),
FOREIGN KEY(PID) REFERENCES PATIENT(Patient_ID)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
FOREIGN KEY(PRAC_ID) REFERENCES MEDICAL_PRACTITIONER(Employee_ID)
    ON UPDATE CASCADE
    ON DELETE CASCADE)ENGINE=InnoDB";

if (mysqli_query($conn, $app)) {
    echo "Table APPOINTMENT created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// sql to create SCHEDULE table
// Included app_no since that makes sense
$sched = "CREATE TABLE SCHEDULE (
Date DATE NOT NULL,
Time TIME NOT NULL,
Employee_ID INT(255) UNSIGNED NOT NULL,
App_No INT(255) UNSIGNED NOT NULL,
PRIMARY KEY(Date, Time, Employee_ID),
FOREIGN KEY(Employee_ID) REFERENCES MEDICAL_PRACTITIONER(Employee_ID)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
FOREIGN KEY(App_No) REFERENCES APPOINTMENT(App_No)
    ON UPDATE CASCADE
    ON DELETE CASCADE)ENGINE=InnoDB";


if (mysqli_query($conn, $sched)) {
    echo "Table SCHEDULE created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// sql to create ASSISTANCE_EQUIPMENT table
$equip = "CREATE TABLE ASSISTANCE_EQUIPMENT (
Equip_ID INT(255) UNSIGNED NOT NULL,
Equipment_Type VARCHAR(255) NOT NULL,
Num_In_Stock INT(100) UNSIGNED NOT NULL,
Cost_Per_Month INT(50) UNSIGNED NOT NULL,
PRIMARY KEY(Equip_ID) )ENGINE=InnoDB";


if (mysqli_query($conn, $equip)) {
    echo "Table ASSISTANCE_EQUIPMENT created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}



// sql to create ILLNESS table
$ill = "CREATE TABLE ILLNESS (
Illness_Name VARCHAR(255) NOT NULL,
Cause VARCHAR(255),
Symptom VARCHAR(255),
PRIMARY KEY(Illness_Name)
)ENGINE=InnoDB";


if (mysqli_query($conn, $ill)) {
    echo "Table ILLNESS created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// sql to create MEDICAL_RECORD table
$mr = "CREATE TABLE MEDICAL_RECORD (
PID INT(255) UNSIGNED NOT NULL,
MR_No INT(255) UNSIGNED NOT NULL,
Illness_History VARCHAR(255),
Treatment_History VARCHAR(255),
Family_Med_History VARCHAR(255),
Medical_Allergies VARCHAR(255),
Notes VARCHAR(255),
PRIMARY KEY(PID, MR_No),
FOREIGN KEY(PID) REFERENCES PATIENT(Patient_ID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
)ENGINE=InnoDB";


if (mysqli_query($conn, $mr)) {
    echo "Table MEDICAL_RECORD created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// sql to create Manages table
$manage = "CREATE TABLE Manages (
Manager_ID INT(255) UNSIGNED NOT NULL,
Date DATE NOT NULL,
Time TIME NOT NULL,
MP_ID INT(255) UNSIGNED NOT NULL,
PRIMARY KEY(Manager_ID, Date, Time, MP_ID),
FOREIGN KEY(Manager_ID) REFERENCES ADMINISTRATIVE_STAFF(Employee_ID)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
FOREIGN KEY(Date, Time, MP_ID) REFERENCES SCHEDULE(Date, Time, Employee_ID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
)ENGINE=InnoDB";


if (mysqli_query($conn, $manage)) {
    echo "Table Manages created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// sql to create Affects table
$affect = "CREATE TABLE Affects (
PID INT(255) UNSIGNED NOT NULL,
Illness_Name VARCHAR(255) NOT NULL,
PRIMARY KEY(PID, Illness_Name),
FOREIGN KEY(PID) REFERENCES PATIENT(Patient_ID)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
FOREIGN KEY(Illness_Name) REFERENCES ILLNESS(Illness_Name)
    ON UPDATE CASCADE
    ON DELETE CASCADE
)ENGINE=InnoDB";


if (mysqli_query($conn, $affect)) {
    echo "Table Affects created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// sql to create Have_Access table
$have = "CREATE TABLE Have_Access (
Prac_ID INT(255) UNSIGNED NOT NULL,
MR_No INT(255) UNSIGNED NOT NULL,
PID INT(255) UNSIGNED NOT NULL,
PRIMARY Key(Prac_ID, PID, MR_No),
FOREIGN KEY(Prac_ID) REFERENCES MEDICAL_PRACTITIONER(Employee_ID)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
FOREIGN KEY(PID, MR_No) REFERENCES MEDICAL_RECORD(PID, MR_No)
    ON UPDATE CASCADE
    ON DELETE CASCADE
)ENGINE=InnoDB";


if (mysqli_query($conn, $have)) {
    echo "Table Have_Access created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// sql to create Rents table
$rent = "CREATE TABLE Rents (
PID INT(255) UNSIGNED NOT NULL,
Equip_ID INT(255) UNSIGNED NOT NULL,
Prac_ID INT(255) UNSIGNED NOT NULL,
Start_Date DATE NOT NULL,
Return_Date DATE NOT NULL,
PRIMARY KEY(PID, Equip_ID, Prac_ID),
FOREIGN KEY(PID) REFERENCES PATIENT(Patient_ID)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
FOREIGN KEY(Equip_ID) REFERENCES ASSISTANCE_EQUIPMENT(Equip_ID)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
FOREIGN KEY(Prac_ID) REFERENCES MEDICAL_PRACTITIONER(Employee_ID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
)ENGINE=InnoDB";


if (mysqli_query($conn, $rent)) {
    echo "Table Rents created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// sql to create Treating table
$treat = "CREATE TABLE Treating (
PID INT(255) UNSIGNED NOT NULL,
PR_ID INT(255) UNSIGNED NOT NULL,
Non_Invasive_Procedure VARCHAR(255),
Invasive_Procedure VARCHAR(255),
Device_Assistance VARCHAR(255),
Medication VARCHAR(255),
Mental_Therapy VARCHAR(255),
PRIMARY KEY(PID, PR_ID),
FOREIGN KEY(PID) REFERENCES PATIENT(Patient_ID)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
FOREIGN KEY(PR_ID) REFERENCES MEDICAL_PRACTITIONER(Employee_ID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
)ENGINE=InnoDB";


if (mysqli_query($conn, $treat)) {
    echo "Table Treating created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>