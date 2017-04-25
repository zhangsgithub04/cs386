<?php

$servername="localhost";
$username="sz";
$password="700511";
$dbname="sz";

$conn=new mysqli($servername, $username, $password, $dbname);

//make sure connection has been successfully established. 
if($conn->connect_error){
	die("connction failed");
}

$id = $_GET['id'];
$password = $_GET['password'];

$saltquery = "select salt from account where id = '$id';";
$result = $conn->query($saltquery);

echo $result->num_rows."<br>";

if ($result->num_rows===1) {
	// output data of each row
    	$row = $result->fetch_assoc(); 
	$salt = $row['salt'];
} else 
{
    		echo "id doesn't exist";
		die();
}

echo $salt."<br>";
$saltedPW =  $password . $salt;
$hashedPW = hash('sha256', $saltedPW);
echo $hashedPW."<br>";
$passwordquery = "select id from account where id = '$id' and password = '$hashedPW'; ";
	
$result = $conn->query($passwordquery);
echo $result->num_rows;

if ($result->num_rows===1) {
	// output data of each row
    	$row = $result->fetch_assoc(); 
       	echo  "Welcome: " . $row["id"]."<br>";
} else 
{
	echo "password wrong";
}
$conn->close();
?>
