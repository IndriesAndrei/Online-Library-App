<?php 

// mysqli_connect(servername, username, password, name of database)
$conn = mysqli_connect("localhost", "root", "", "online_library");


// we check if we can connect or not

// we use mysqli_connect_error() only for test, when we have site online we remove it to not get SQL injection
if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
 }

 ?>
