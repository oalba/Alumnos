<?php
$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("ikastola", $dp);
$ezabatu = "DELETE FROM asignaturas WHERE asig_cod='$_GET[asig_cod]'";
mysql_query($ezabatu);
mysql_close($dp);
header("location:hasiera.html");
?>