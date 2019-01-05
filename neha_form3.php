





<?php

$servername="localhost";
$username="root";
$password="";
$Dbname="neha";

//create connection
$conn=mysqli_connect($servername,$username,$password,$Dbname);
if((isset($_POST['submit']))){
$name=$_POST['yname'];
$passwrd=md5($_POST['pass']);
$mail=$_POST['email'];


$sql="INSERT INTO login(name, password,email,created,modified) VALUES ('".$name."', '".$passwrd."', '".$mail."',now(), now())";
 
 if ($conn->query($sql)===TRUE) {
 	echo "New record created successfully";
 } else {
 	echo "error:" .$sql. "<br>". $conn->error;
 }

}
else {
 	echo "Please enter valid filed";
 }
?>

<!DOCTYPE html>
<html>
<head>
	<title>registration form</title>
</head>
<body>
	<center>
		<form action="" method="post">
			Name: <input type="text" name="yname"><br>
			Password: <input type="password" name="pass"><br>
			Email: <input type="text" name="email"><br>
			<input type="submit" name="submit">
		</form>
	</center>



<div align="center">
		<table border="2" width="600">
				<tr>
					<td>ID</td>
					<td>Name</td>
					<td>Password</td>
					<td>Email</td>
				</tr>
			<?php $query = "select * from login ORDER BY `name` DESC"; 
				 $runQuery= $conn->query($query);
				 while($row = $runQuery->fetch_assoc()) { ?>
				 <tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['password']; ?></td>
					<td><?php echo $row['email']; ?></td>
				</tr>	
			<?php } ?>	 	
	</table>
</div>



 












