













<?php
$username=$_POST['name'];
$password=$_POST['pass'];
$gender=$_POST['gender'];
$email=$_POST['mail'];
$phonecode=$_POST['phonecode'];
$phone=$_POST['phone'];

if (!empty($username)|| !empty($password)|| !empty($gender)|| !empty($email)|| !empty($phonecode)|| !empty($phone)) {
	$hostname="localhost";
	$Dbusername="root";
	$Dbpassword="";
	
	$Dbname="neha";

	//create connection
	$conn=new mysqli($hostname,$Dbusername,$Dbpassword,$Dbname);
	if (mysqli_connect_error()) {
		die('connect Error('. mysqli_connect_error().')'.mysqli_connect_error());
	} else {
		$SELECT="SELECT email from register where email=? limit 1";
		$INSERT="INSERT INTO register(username,password,gender,email,phonecode,phone) VALUES(?,?,?,?,?,?)";

		//prepare statement
		$stmt=$conn->prepare($SELECT);
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum=$stmt->num_rows;

		if ($rnum==0) {
			$stmt->close();

			$stmt=$conn->prepare($INSERT);
			$stmt->bind_param("ssssii", $username, $password, $gender, $email, $phonecode, $phone);
			$stmt->execute();
			echo "New record inserted successfully";
		}else{
			echo "someone already register using this email";
		}
		$stmt->close();
		$conn->close();

	}
	
} else {
	echo "All field are required";
	die();
}


?>



























