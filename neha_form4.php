










<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
	<form method="post">
		<table>
			<tr>
				<td>Enter name</td>
				<td><input type="text" name="na"></td>
			</tr>
			<tr>
				<td>Enter city</td>
				<td><input type="text" name="ci"></td>
			</tr>
			<tr>
				<td><input type="submit" name="insert" value="insert">
					<input type="submit" name="delete" value="delete">
					<input type="submit" name="update" value="update">
					<input type="submit" name="display" value="display">


				</td>
			</tr>
		</table>
	</form>

<?php
$servername="localhost";
$username="root";
$password="";
$Dbname="test";

$conn = new mysqli($servername, $username, $password, $Dbname);
//$Name=$_POST['na'];
//$City=$_POST['ci'];

if(isset($_POST["insert"]))
{
	mysqli_query($conn,"INSERT INTO table1(name,city,created,modified) VALUES('$_POST[na]','$_POST[ci]',now(),now())");
}

if(isset($_POST["delete"]))
{
	mysqli_query($conn,"DELETE FROM table1 WHERE name='$_POST[na]'");
}

if (isset($_POST["update"])) {
	mysqli_query($conn,"UPDATE table1 SET NAME= '$_POST[ci]' WHERE name='$_POST[na]'");
}

if (isset($_POST["display"])) {
	$res=mysqli_query($conn,"SELECT * FROM table1");

		echo "<table border=1>";
		echo "<tr>";
		echo "<th>"; echo "name"; echo "</th>";
		echo "<th>"; echo "city"; echo "</th>";
		echo "</tr>";
	while($row=mysqli_fetch_array($res)) {
		echo "<tr>";
		echo "<td>"; echo $row["name"]; echo "</td>";
		echo "<td>"; echo $row["city"]; echo "</td>";
		echo "</tr>";
	}
	echo "</table>";
}

?>

</body>
</html>



































