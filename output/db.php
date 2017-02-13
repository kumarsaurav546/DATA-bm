<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "";

//creating a connection .
$conn =new mysqli($servername,$username,$password,$database_name);

//check connection .
if ($conn->connect_error) {
	die("Connection failed !" . connect_error);
}
echo  "Database created successfully";

// creating a database !!
//$sql = "CREATE DATABASE jarvis";
//if ($conn->query($sql)===TRUE) {
//	echo "Database created successfully";
//}
//else
//{
//	echo "Error creating a database" . $conn->error;
//}
?>