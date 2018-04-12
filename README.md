# MedPASS_Team4
The Medical Practitioner/Patient Appointment Scheduling System

TODO:
MedPASS_Welcome.php: DONE!

Patient Stuff
----------------------------------------------------------------------------------------------------
MedPASS_PatientLogin.php:
 - Output username and password to database and check if it matches with current patients in database 

MedPASS_PatientHome.php:
- Output and display patient name from patient database for "Welcome Insert Patient Name"
- Output and displaydoctor name and appointment time for "Your next appointment is with ____ at ____"
- Fix background image not staying the same with window size scaling

MedPASS_PatientInfo.php:
- Output and display patient info to screen

MedPASS_PatientInfoEdit.php:
- Input edited patient info to database

MedPASS_PatientAppointments.php:
- Stuff and things (I cant view)

MedPASS_PatientDiagTreat.php:
- Output and display illness info and treatment info to screen

MedPASS_PatientEquip.php:
- Output and display currently rented equipment to screen

Practitioner Stuff
---------------------------------------------------------------------
MedPASS_DoctorLogin.php:
- Output username and password to database and check if it matches with current practitioners in database 

MedPASS_DoctorHome.php
- Output and display patient name from patient database for "Welcome Insert Patient Name"
- Output and display patient name & ID and appointment time for "Your next appointment is with ____ at ____"
- Fix background image not staying the same with window size scaling

MedPASS_DoctorInfo.php:
- Output and display doctor info to screen

MedPASS_DoctorInfoEdit.php:
- Input edited doctor info to database

MedPASS_DoctorAppointments.php:
- Stuff and things (I cant view)

MedPASS_DoctorChangeAvailability.php:
- Output new availability to database
- If we have time, input availability to show current availability on page
 
MedPASS_DoctorViewPatientInfo.php
- Search for patient by patient first and last name, and output list of patients with that name onto screen
- Output patient ID input to database and check to see if it exists

MedPASS_DoctorManagePatientInfo.php
- Output and view current patient info, rented equipment, diagnoses and treatments to screen
- Change Illnesses button to new page that branches from MedPASS_DoctorViewPatientInfo.php

MedPASS_DoctorAddDiagnosis.php
- Add search illness ability to see list of all illnesses
- Output illness name, patient ID and doctor ID to diagnosis database

MedPASS_DoctorEditDiagnosis.php
- Add drop-down menu of current diagnoses for that patient
- Output illness name and delete diagnosis from database

MedPASS_DoctorAddTreatment.php
- Output treatment name (not previously in database as doctor makes this up), treatment info, patient ID 
   and doctor ID to treatment database

MedPASS_DoctorEditTreatment.php
- Add drop-down menu of current treatments for that patient
- Output patient ID, doctorID and treatment name and delete this treatment from database
 
MedPASS_DoctorAddIllness.php:
- Output illness name and illness info to illness database

MedPASS_DoctorEditIllness.php
- Add select illness name feature from the illness database
- Output illness name and illness info to illness database, replacing info of previous entry of same name

MedPASS_DoctorViewMedRec.php
- Show medical record info on screen

MedPASS_DoctorEditMedRec.php
- Output new medical record info to medical record database
