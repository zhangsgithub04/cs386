<?php

// mysqli
$mysqli = new mysqli("localhost", "sz", "700511", "sz2");
echo 'dddd';

$result = $mysqli->query("SELECT * from potluck");
echo 'dddd';

$row = $result->fetch_assoc();
echo htmlentities($row['_message']);

// mysql
$c = mysql_connect("localhost", "sz", "700511");
echo 'dddd';

mysql_select_db("sz2");
$result = mysql_query("SELECT * from potluck");
echo 'dddd';

$row = mysql_fetch_assoc($result);
echo htmlentities($row['_message']);
?>
