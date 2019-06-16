<?php

$host_name = "localhost";
$username = "root";
$password = "";
$database = "matienzo_db";

$con = mysqli_connect($host_name, $username, $password, $database);
//check connection error
if (!$con) {
		die('Connect Error:' . mysqli_connect_error());
		}

?>