<?php

$alu = $_GET['alu_cod'];
$asig = $_GET['asig_cod'];

$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("ikastola", $dp);



$sql = "INSERT INTO asistir_a_a (alu_cod, asig_cod) VALUES ($alu,$asig)";
mysql_query($sql);
mysql_close($dp);

header("location:hasiera.html");
?>
