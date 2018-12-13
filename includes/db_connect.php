<?php
include 'config.php';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
} else {
	echo '<script>console.log("Connection successfully")</script>';
}
 
?>