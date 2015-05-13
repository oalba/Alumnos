<?php
session_start();
$mezua = $_POST['mezua'];

$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("mezulari", $dp);
$aldatu="UPDATE mezuak SET mezua='$mezua' WHERE id='$_GET[id]'";
mysql_query($aldatu);
mysql_close($dp);
header("location:nagusia.php");

?>

