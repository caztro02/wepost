<html>
<style>
table.db-table 		{ border-right:1px solid #ccc; border-bottom:1px solid #ccc; }
table.db-table th	{ background:#eee; padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
table.db-table td	{ padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
</style>
<body>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
	<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>
</html>

<?php
	include('db_connect.php');


$query = mysqli_query($con, "SELECT * FROM register");
echo "<h1>Display Data from Database</h1>";
echo '<table id="myTable" cellpadding="0" cellspacing="0" class="db-table">';
echo "<th>ID</th>";
echo "<th>First Name</th>";
echo "<th>Last Name</th>";
echo "<th>Contact</th>";
echo "<th>Edit</th>";
echo "<th>Delete</th>";

while($row = mysqli_fetch_array($query)){
	echo "<tr>";
	echo "<td>" .$row['id']. "</td>" ;
	echo "<td>" .$row['fname']."</td>";
	echo "<td>" .$row['lname']."</td>";
	echo "<td>" .$row['contact']. "</td>";
	echo "<td><a href='update.php?id=$row[id] &fn=$row[fname]&ln=$row[lname]&ct=$row[contact]'>Edit</a></td>" ;
	echo "<td><a href='delete.php?id=$row[id] &fn=$row[fname]&ln=$row[lname]&ct=$row[contact]'>Delete</a></td>";
	echo "</tr>";
}
echo "</table>";
?>
<br>
<!DOCTYPE html>
<html>
  <head><title>Register</title>

  </head>
  <body>
    <div id="register_form">
      <form action="add.php" method="POST">
        First Name:
        <input type="text" name="fname" placeholder="First Name"><br>
        Last Name:
        <input type="text" name="lname" placeholder="Last Name"><br>
        Contact:
        <input type="text" name="contact" placeholder="Contact"><br>
        <button type="submit">ADD to Database</button>

      </form>
    </div>

  </body>
</html>