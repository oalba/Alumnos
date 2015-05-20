<?php

$asig = $_GET['asig_cod'];
$faltas = $_GET['faltas'];

$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("ikastola", $dp);

$calidad=$_POST['calidad'];
for($i=0;$i<count($calidad);$i++){
$sql_query = "insert into datos (calidad) values ('$calidad[$i]')" ;
}


$sql = "INSERT INTO faltar_a_a (asig_cod, alu_cod) VALUES ($asig,$alu)";
mysql_query($sql);
mysql_close($dp);

header("location:hasiera.html");
?>
