<?php
	 $servername = "localhost";
	 $username = "kelasti2_prak9";
	 $password = "pusingsekali";
	 $dbname = "kelasti2_practice9_18102140";


	 // Create connection
	 $conn = new mysqli($servername, $username, $password, $dbname);

	 // Check connection
	 if ($conn->connect_error) {
	 	die("Connection failed: " . $conn->connect_error);
	 }
?>