<?php  
	$host= 'localhost';
	$user= 'root';
	$password= '';
	$dbname= 'link-shortener';

	$mysqli = new mysqli($host, $user, $password, $dbname);

	if ($mysqli -> connect_errno) {
		echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
		exit();
	}
?>
