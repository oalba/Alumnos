<html>
<head>
<title>Cambiar mensaje</title>
</head>
<body>
<?php
session_start();
$user = $_SESSION["usuario"];
session_start();
$tipo = $_SESSION["tipo"];

$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("mezulari", $dp);
$sql = "SELECT * FROM mezuak WHERE id='$_GET[id]'";
$mezu = mysql_query($sql);
echo "Usuario: $user - Tipo: $tipo<hr/>";
echo "EDITE LOS DATOS DEL MENSAJE: <br/><br/>";
while ($row = mysql_fetch_assoc($mezu)) {
echo "<form enctype='multipart/form-data' action='m_aldatu.php?id=$row[id]' method='post'>";
echo "Mensaje:<br/><textarea name='mezua' rows=10 cols=20>$row[mezua]</textarea><br/><br/>";
echo "<input type='submit' value='Guardar cambios del mensaje'/><br/>";
echo "</form>";
};
mysql_close($dp);
?>
<a href="nagusia.php">Visualizar mensajes</a>
</body>
</html>