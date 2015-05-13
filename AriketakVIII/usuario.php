<?php
$user = $_POST['usuario'];
$pass = $_POST['clave'];

$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("mezulari", $dp);

$sql = "SELECT * FROM erabiltzaileak" ;
$resultado = mysql_query($sql);
while ($row = mysql_fetch_assoc($resultado)) {
 if ($row[erabiltzailea] == $user) {
   $pasa = $row[pasahitza];
   $tipo = $row[erab_mota];
 };
};

if (isset($pasa)) {
 if ($pass == $pasa) {
  session_start();
  $_SESSION["usuario"]=$user;
  session_start();
  $_SESSION["tipo"]=$tipo;
  header("location:nagusia.php");
 } else {
  header("location:hasiera.html");
 };
} else {
 header("location:hasiera.html");
};

mysql_close($dp);
?>

