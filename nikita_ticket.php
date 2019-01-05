<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "the_theme_park_database_erd";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$TICKET_NO=$_POST['ET_NO'];
$TICKET_PRICE=$_POST['ET_PRICE'];
$TICKET_TYPE=$_POST['ET_TYPE'];
$PARK_CODE=$_POST['RK_CODE'];

$sql="INSERT INTO ticket (TICKET_NO,TICKET_PRICE,TICKET_TYPE,PARK_CODE) values('".$TICKET_NO."','".$TICKET_PRICE."','".$TICKET_TYPE."','".$PARK_CODE."')";


if ($conn->query($sql)===TRUE) {
    
echo "Connected successfully";
}
else{
	echo "Error:" .$sql. "<br>".$conn->error;
}


?>











