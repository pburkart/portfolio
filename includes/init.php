<?php
	session_start();
	$mysqli = mysqli_connect("localhost", "projects", "eZo[XaAAv03&", "portfolio_items");

	if(!$mysqli){
		echo "Error: Unable to connect to MySQL." . PHP_EOL;
		echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
		echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
		exit;
	}

?>
