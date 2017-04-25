<?php
$db = mysql_connect('localhost', 'sz', '700511') || die (mysql_error());
if (!$db) {die ('wrong'.mysql_error());}
echo "2";
?>
