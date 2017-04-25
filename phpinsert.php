<?php

$servername = "localhost";
$username = "sz";
$password = "700511";
$dbname = "sz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO topics(id,name) VALUES (4, 'php')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if (!empty($_GET))
{
$myid=$_GET["id"];
$myname= $_GET["name"];
echo $myid.$myname;
$sql = "INSERT INTO topics(id,name) VALUES ($myid, '$myname')";
if ($conn->query($sql) === TRUE) {
   echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}


$conn->close();
?>
