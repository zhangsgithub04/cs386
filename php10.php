<style>

table {
   border: 1px solid red;
}
</style>

hartwick in  plain text

<div> hartwick in html tag </div>

<!-- <table border=6> -->

<table style="border:6;">
   <tr>  
	<td>Bill </td>
	<td> 40 </td>
	<td>male </td>
   </tr>
<tr>  
        <td>Bill </td>
        <td> 40 </td>
        <td>male </td>
   </tr>
<tr>  
        <td>Bill </td>
        <td> 40 </td>
        <td>male </td>
   </tr>

</table>


<?php
echo  "Hello Hartwick";
print "Hello Hartwik";

$x=10;
$y=20;

$z=$x*$y;

echo $z; 

echo "<br>";


echo $_GET["a"]+ $_GET["b"];

echo rand();
echo "<br>";
echo rand(10, 20); 


?>

<table>
<?php
for($row=1; $row<100; $row++)
{
$d=rand(1,1000);
echo "<tr><td>$row <td><td>".$d."</td></tr>";
//echo "<tr><td>$row <td><td>".rand(1, 1000)."</td></tr>";
}
?>

</table>

<script> 

document.write("Hello World!");

</script>
