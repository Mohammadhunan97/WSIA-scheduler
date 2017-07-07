<?php
// $db = pg_connect("host=localhost dbname=wsiascheduler user=minimoe password=''");
$servername = "localhost";
$username = "minimoe";
$password = "";

// Create connection
$conn = new PDO("mysql:host=$servername;dbname=wsiascheduler", $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


// <!-- 
// if($db){
// 	echo "Database connected";
// }else{
// 	echo "some error occured";
// } -->
?>