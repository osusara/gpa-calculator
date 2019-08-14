<?php

	$host = 'localhost';
	$username = 'root';
	$password = '';
	$name = 'gpa-calculator';

	$connection = mysqli_connect($host, $username, $password, $name);

	if(mysqli_connect_errno()){
		die('Database connection error: '.mysqli_connect_error());
	}else{

	}

?>