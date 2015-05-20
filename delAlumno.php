<?php

$alu = $_GET['alu_cod'];
$asig = $_GET['asig_cod'];

$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("ikastola", $dp);



$sql = "DELETE FROM asistir_a_a WHERE alu_cod=$alu AND asig_cod=$asig";
mysql_query($sql);
mysql_close($dp);

header("location:hasiera.html");
?>