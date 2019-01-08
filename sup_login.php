




<?php 

$servername="localhost";
$username="root";
$password="";
$Dbname="mydatabase";


$conn=new mysqli($servername,$username,$password,$Dbname);
$name=$_POST['uname'];
$email=$_POST['mail'];
$pass=$_POST['pname'];

$s="INSERT INTO login(name, email,password,created) values('".$name."', '".$email."', '".$pass."', now())";


if ($conn->query($s)==TRUE)
 {
	echo "new record created successfully";
}
 else
  {
   echo "error".$s. "<br>" .$conn->error;

}


		

 ?>












