<?php 
$servername = "localhost"; $username = "sz"; $password = "700511"; 
$database="sz";

// Create connection 
$conn = new mysqli($servername, $username, 
$password, $database);

// Check connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully"; ?>

<?php
// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
    } 
 else {
        echo "Error creating database: " . $conn->error;
      }
        

//finally you need to close the connection 
//just like  you interactively log out from mysql client console

$conn->close();


?>
