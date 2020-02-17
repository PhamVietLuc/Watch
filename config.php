<?php 
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "watch";
	$db = mysqli_connect($hostname,$username,$password,$database);
	mysqli_set_charset($db,"UTF8");
 ?>