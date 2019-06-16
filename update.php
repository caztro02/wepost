<?php
include('db_connect.php');
error_reporting(0);
 $_GET['id'];
 $_GET['fn'];
 $_GET['ln'];
 $_GET['ct'];
?>

<html>
	<head><title>Update</title></head>
	<body>
		<h1>Update Data</h1>
		<form action="" method="GET">
			ID:
			<input type="text" name="id" value="<?php echo $_GET['id'];?>" readonly><br>
			First Name:
			<input type="text" name="fname" value="<?php echo $_GET['fn'];?>"><br>
			Last Name:
			<input type="text" name="lname" value="<?php echo $_GET['ln'];?>"><br>
			Contact:
			<input type="text" name="contact" value="<?php echo $_GET['ct'];?>"><br>
			<input type="submit" name="submit" value="UPDATE">
		</form>
	</body>
</html>

<?php
if($_GET ['submit']){
	$id = $_GET['id'];
	$fname = $_GET['fname'];
	$lname = $_GET['lname'];
	$contact = $_GET['contact'];
	$sql = "UPDATE register SET fname='$fname', lname='$lname', contact='$contact' WHERE id='$id'";
	$query = mysqli_query($con, $sql);
	if($query){
		echo "<font color='green'> Record Updated Successfully. <a href='display.php'>Click to see the changes</a>";
	}else{
		echo "<font color='red'> Record not Updated";
	}
}else{
	echo "Click on Update Button to Save Changes. <a href='display.php'>Back to Display Data</a>";
}

?>
