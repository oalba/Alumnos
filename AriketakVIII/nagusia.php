<html>
<head>
<title>MEZUAK</title>
</head>
<body>
<font size=5>MENSAJES</font><br/>
<hr/>
<?php
$zenbat = 0;

$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("mezulari", $dp);

$sql = "SELECT * FROM mezuak" ;
$mezu = mysql_query($sql);
while ($row = mysql_fetch_assoc($mezu)) {
 $zenbat = $zenbat+1;
};


session_start();
$user = $_SESSION["usuario"];
session_start();
$tipo = $_SESSION["tipo"];

echo "Usuario: $user - Tipo: $tipo<hr/>";
echo "MENSAJES: (En total: $zenbat mensajes)<hr/>";

$sql2 = "SELECT * FROM mezuak" ;
$mezu2 = mysql_query($sql2);

if ($tipo != 'admin') {
while ($row2 = mysql_fetch_assoc($mezu2)) {
 echo "<font color='red'>$row2[id] - $row2[erabiltzailea] - $row2[data_ordua]</font><br/>";
 echo "$row2[mezua]<hr/>";
};
} else {
while ($row2 = mysql_fetch_assoc($mezu2)) {
 echo "<font color='red'>$row2[id] - $row2[erabiltzailea] - $row2[data_ordua]</font><br/>";
 echo "$row2[mezua]<br/>";
 echo "<a href='mezu_ezabatu.php?id=$row2[id]'>Eliminar</a> <a href='mezu_aldatu.php?id=$row2[id]'>Editar</a><hr/>";
};
};

echo "FIN DE LOS MENSAJES<hr/><br/><hr/>";

echo "<h2>MENÚ DE OPCIONES:</h2>";
echo "<a href='mezu_berria.php'>Insertar mensaje (Solo usuarios y administradores)</a><hr/>";



mysql_close($dp);
?>
<br/>
<a href="hasiera.html">Cambiar de usuario (Volver al inicio de sesión)</a><br/><a href="nagusia.php">Actualizar la lista de mensajes</a>
</body>
</html>