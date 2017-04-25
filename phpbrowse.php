<html>
<body>

This page shows the records saved in the topics table in your mysql server.<br>

<?php

	$servername="localhost";
	$username="sz";
	$password="700511";
	$dbname="sz";

	$conn=new mysqli($servername, $username, $password, $dbname);

	if($conn->connect_error){
		die("connction failed");
	}

	$query="select id, name from topics";
	$result = $conn->query($query);

	if ($result->num_rows > 0) {
    		// output data of each row
    		while($row = $result->fetch_assoc()) {
        	echo "id: " . $row["id"]. " - Name: " . $row["name"]."<br>";
    		}
	} else 
	{
    		echo "No (0) results";
	}

	$conn->close();
 
?> 

</body> </html>
