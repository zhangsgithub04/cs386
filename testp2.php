
today date is Aug. 28, 2016


<?php
$x = date('m/d/Y h:i:s a', time());

echo  "toda's date is $x";

?>

<?php 
echo "1";

//$db = mysql_connect('localhost', 'root', '700511') || die (mysql_error()); 
$db = mysql_connect('localhost', 'root', '700511');

if (!$db){ die ('wrong'.mysql_error());
}
echo "2";
mysql_select_db("sz",$db);  

echo "3";
$result = mysql_query("SELECT * FROM potluck",$db); 

echo "<table border=1>n"; 
echo "<tr><td>Name</td><td>Position</tr>n"; 

while ($myrow = mysql_fetch_row($result)) 
{ 
printf("<tr><td>%s %s</td><td>%s</tr>n", 
$myrow[1], $myrow[2], $myrow[3]); } 
echo "</table>n";
mysql_close($db);
?>

