<?php
	include('db_connect.php');
	$id = $_GET['id'];

	$sql = "DELETE FROM register WHERE id ='$id'";
	$query = mysqli_query($con, $sql);
	if($query){
		header('location:display.php');
	}else{
		echo "<font color='red> Record is not Deleted";
	}
?>