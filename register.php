<?php

ob_start();
session_start();

require 'database.php';

// Define variables 

$password = $_POST['password'];
$fName = $_POST['firstNamePatient'];
$lName = $_POST['lastNamePatient'];
$name = $fName." ".$lName; 
$gender = $_POST['genderPatient'];
$dob = $_POST['dobPatient'];
$address = $_POST['addressPatient'];
$wPhone = $_POST['workPhonePatient'];
$weight = $_POST['weightPatient'];
$fHeight = $_POST['feetHeightPatient'];
$iHeight = $_POST['inchHeightPatient'];
$height = ($fHeight * 12) + $iHeight;
$confirmPassword = $_POST['confirmPassword'];
$userType = $_POST['userType'];


// Check if password and confirm password match
if($password != $confirmPassword) {
	echo "<META HTTP-EQUIV=REFRESH CONTENT='0; URL=NUR1.html'>";
	echo "<script type=\"text/javascript\"> alert(\"Passwords do not match.\"); </script>";
	ob_end_flush();
	exit();
}

// Put username and password in User table
$sql = "INSERT INTO nur1 (password, name, gender, dob, address, workPhone, weight, height) VALUES('$password', '$name', '$gender', '$dob', '$address', '$wPhone', '$weight', '$height')";

if($db->query($sql)) {

	// Put username in correct table for the user type
	 if($userType == "Patient") {
		$sql = "INSERT INTO patient (P_Name) VALUES('$username')";
	} 
	
	$result = $db->query($sql);

	header("location:Patient.php");
	
} else {
	echo "<META HTTP-EQUIV=REFRESH CONTENT='0; URL=NUR1.html'>";
    //echo "<script type=\"text/javascript\"> alert(\"Username already taken.\"); </script>";
}

ob_end_flush();
?>