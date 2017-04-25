<html>
<body>

<form action="" method="post">
id: <input type="text" name="htmlid"><br>
name: <input type="text" name="htmlname"><br>
<input type="submit">
</form>

<?php
session_start();
echo $_SESSION["flag"];

if ($_SESSION["flag"]!=100)
{
	//die("You have not logged in successfully!");
	header("Location: phpdemo.html");
}

if(!empty($_POST))
{
	echo "Processing input";

	$pid= $_POST["htmlid"];
	$pname=$_POST["htmlname"];

	echo $pid;
	echo $pname;

	$servername="localhost";
	$username="sz";
	$password="700511";
	$dbname="sz";

	$conn=new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_error){
		die("connction failed");
	}

	$sql= "insert into topics values($pid,'$pname')";
	if ($conn->query($sql)===TRUE)
	{
		echo "inserted successfully";
	}
	else
	{
		echo "wroong";
	}

	$conn->close();
}
else
{
	echo "Go to this branch the fist time the page is loaded, because no input has been provided yet.";

} ?> </body> </html>
