<?php
// establish connection to mysql using your credential to your database.
$mysqli= new mysqli('147.205.208.84', 'sz','700511','sz');
if ($mysqli->connect_errno)
{
echo "something doesn't work";
}

echo "Hello Hartwick";

?>

