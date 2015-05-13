<html>
<head>
<title>Insertar mensaje</title>
</head>
<body>
<?php
session_start();
$user = $_SESSION["usuario"];
session_start();
$tipo = $_SESSION["tipo"];
echo "Usuario: $user - Tipo: $tipo<hr/>";
?>
INSERTE EL MENSAJE: <br/><br/>
<form enctype='multipart/form-data' action='m_sartu.php' method='post'>
Mensaje:<br/><textarea name='mezua' rows=10 cols=20></textarea><br/><br/>
<input type='submit' value='Insertar mensaje'/><br/>
</form>

<a href="nagusia.php">Visualizar mensajes</a>
</body>
</html>