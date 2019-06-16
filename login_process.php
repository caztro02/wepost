<?php
	include('db_connect.php');

	$username = $_POST['username'];
	$pass = $_POST['pass'];

	$sql = mysqli_query($con, "SELECT * FROM login WHERE username = '$username' AND pass = '$pass'");
	while($row = mysqli_fetch_array($sql)){
		$username = $row['username'];
		$pass = $row['pass'];
	}
	if($pass == 'admin'){
		header('location:display.php');	
	}else{
		echo "Failed";
	}
?>