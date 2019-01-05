


<?php

$servername = "localhost";
$username = "root";
$password = "";
$Dbname="neha";
// Create connection
$conn = new mysqli($servername, $username, $password, $Dbname);
$name=$_POST['yname'];
$email=$_POST['email'];
$pass=$_POST['Password'];
$gender=$_POST['Gender'];


$sql = "INSERT INTO student1 (name,email,password,created)
VALUES ('".$name."', '".$email."', '".$pass."', now())";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully</br>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




echo "Your name=$name</br>
	Your mail=$email</br>
	Your password=$pass</br>
	Your Gender=$gender
";
?>








