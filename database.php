<?php

// Database configuration
$db_host = "localhost"; // Host name
//$db_port = "3306"; // Port number
$db_username = "root"; // Mysql username
$db_password = ""; // Mysql password
$db_name = "m_record"; // Database name

// Connect to server and select databse.
$db = new mysqli("$db_host", "$db_username", "$db_password", "$db_name");

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}


//host: 127.3.58.2
//username:adminXa3ShrZ
//pw:vB7fW-PRX3Ss
?>