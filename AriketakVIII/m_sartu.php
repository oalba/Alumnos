<?php
session_start();
$user = $_SESSION["usuario"];
$mezua = $_POST['mezua'];
$fecha = date("Y-m-d H:i:s");

$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("mezulari", $dp);
$sartu="INSERT INTO mezuak (erabiltzailea, mezua, data_ordua) VALUES ('$user', '$mezua', '$fecha')";
mysql_query($sartu);
mysql_close($dp);
header("location:nagusia.php");

?>

