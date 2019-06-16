<?php
	include('db_connect.php');

$query = "UPDATE register";
if(mysqli_query($con, $query)){
	header('location:display.php');
}else{
	echo "Error:" . mysqli_error($con);
}
?>