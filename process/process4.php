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
$sql = "INSERT INTO mytable(firstname,lastname,email,phoneno) VALUES('kumar','saurav','kumarsaurav546x@gmail.com','9430702208')";

if ($conn->query($sql)===TRUE) {
	echo "";
}
else
{
	echo "" . $conn->error;
}
?>
<script type="text/javascript">
	alert("Values are inserted!");
</script>