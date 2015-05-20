<?php

$asig = $_GET['asig_cod'];
$faltas = $_GET['faltas'];
$fecha = date("Y-m-d");

$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("ikastola", $dp);

//$calidad=$_POST['calidad'];
for($i=0;$i<count($faltas);$i++){
//$sql_query = "insert into datos (calidad) values ('$calidad[$i]')" ;
$sql = "INSERT INTO faltar_a_a (asig_cod,alu_cod,fecha) VALUES ($asig,'$faltas[$i]','$fecha')";
mysql_query($sql);
}

mysql_close($dp);

header("location:clases.php");
?>
