<?php
$nombre = $_POST['nombre_asig'];
$horas = $_POST['horas'];

$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("ikastola", $dp);
$sartu="INSERT INTO asignaturas (nombre_asig,horas) VALUES ('$nombre',$horas)";
mysql_query($sartu);
mysql_close($dp);
header("location:nagusia.html");

?>