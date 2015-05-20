<?php

$asig = $_POST['asig'];
$fn=trim($_POST['falta']);
$fecha = date("Y-m-d");

$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("ikastola", $dp);

foreach($_POST['falta'] as $fn) { 
	$sql = "INSERT INTO faltar_a_a (asig_cod,alu_cod,fecha) VALUES ($asig,$fn,'$fecha')";
	mysql_query($sql);
}

mysql_close($dp);

header("location:clases.php");

?>