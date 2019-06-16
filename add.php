<?php
	include('db_connect.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$contact = $_POST['contact'];

$query = "INSERT INTO register (id, fname, lname, contact) VALUES (null, '$fname','$lname','$contact')";
if(mysqli_query($con, $query)){
	header('location:display.php');
}else{
	echo "Error:" . mysqli_error($con);
}

?>