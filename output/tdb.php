<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "xamp";

// Creating connection.
$conn = new mysqli($servername,$username,$password,$database_name);

// check connection
if ($conn->connect_error) {
	die("Connection not established!" . connect_error);
}
 echo "table created successfully!";
// creating table.
//$sql = "CREATE TABLE mytable(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//							firstname VARCHAR(30) NOT NULL,
//							lastname VARCHAR(30) NOT NULL,
//							email VARCHAR(50),
//							phoneno INT(6)
//		)";

//if ($conn->query($sql)===TRUE) {
//	echo "Table has been created successfully!";
//}
//else
//{
//	echo "Error creating table" . $conn->error;
//}





?>