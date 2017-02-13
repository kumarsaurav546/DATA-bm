<?php
$servername = "localhost";
$username  = "root";
$password = "";
$database_name = ""; //if database name exists!!

// create a connection
$conn = new mysqli($servername,$username,$password,$database_name);

//check connection
if ($conn->connect_error) {
	die("Connection failed !"  . $conn->connect_error);
}


?>
<script type="text/javascript">
	alert("Connection request has been triggered! ");
</script>