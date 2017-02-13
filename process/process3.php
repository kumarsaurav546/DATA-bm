<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "jarvis";

// Creating connection.
$conn = new mysqli($servername,$username,$password,$database_name);

// check connection
if ($conn->connect_error) {
	die("Connection not established!" . connect_error);
}

// creating table.
$sql = "CREATE TABLE mytable(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
							firstname VARCHAR(30) NOT NULL,
							lastname VARCHAR(30) NOT NULL,
							email VARCHAR(50),
							phoneno INT(6)
		)";

if ($conn->query($sql)===TRUE) {
	echo "";
}
else
{
	echo "" . $conn->error;
}
?>
<script type="text/javascript">
	alert("Table creation request has been triggered! ");
</script>