<?php
error_reporting(0);
$con=mysql_connect('localhost','root','');
mysql_select_db('bar',$con)
	or die("<font face=Tahoma size=2>Error: No es posible conectar a la base de datos.</font>");
?>