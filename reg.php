<?php



require 'database.php';

// Define variables 


	$fName = $_POST['fName'];
	$lName = $_POST['lName']; 
	$a = $fName." ".$lName; 
	$b = $_POST['b'];
	$c = $_POST['c'];
	$d = $_POST['d'];
	$e = $_POST['e'];
	
	$f = $_POST['f'];
	$g = $_POST['g'];
	$h = $_POST['h'];
	$i = $_POST['i'];
	$j= $_POST['j'];




// Put username and password in User table
$sql = "INSERT INTO record (name, dob, gender,  address, workPhone, consultingDoctor, disease, medicineName, visitingDate, visitingTime ) VALUES('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j')";
$con=mysqli_connect('localhost','root','','m_record');

if(mysqli_query($con,$sql))
	{
    echo "Successfully Added..!!";
} 
else 
{
	echo "Unsuccessful..Try!!!";
}



?>