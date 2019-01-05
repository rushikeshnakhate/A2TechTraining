<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname="login";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$username=$_POST['name'];
$password=$_POST['word'];

$sql="INSERT INTO login_form(username,password) values('".$username."','".$password."')";


if ($conn->query($sql)===TRUE) {
    
echo "Connected successfully";}
else{
	echo "Error:" .$sql. "<br>".$conn->error;
}

echo "username=$username<br>
     password=$password<br>";
?>












