<?php
$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("mezulari", $dp);
$ezabatu = "DELETE FROM mezuak WHERE id='$_GET[id]'";
mysql_query($ezabatu);
mysql_close($dp);
header("location:nagusia.php");
?>

