<html>
<head>
<title>Alumnos</title>
	<link rel="stylesheet" type="text/css" href="css/gorputzak.css" />
</head>
<body>
<?php
$zenbat = 0;

$asig = $_GET['asig_cod'];

$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("ikastola", $dp);

$sql2 = "SELECT * FROM alumnos" ;
$alum2 = mysql_query($sql2);
while ($row2 = mysql_fetch_assoc($alum2)) {
 $zenbat = $zenbat+1;
};
echo "ALUMNOS: (En total: $zenbat alumnos)<hr/>";


$sql = "SELECT * FROM alumnos" ;
$alum = mysql_query($sql);

echo "<table>";
while ($row = mysql_fetch_assoc($alum)) {
 echo "<tr><td>$row[alu_cod]</td><td>$row[nombre]</td><td>";
 echo "<a href='addAsignatura.php?alu_cod=$row[alu_cod]&asig_cod=$asig'>Añadir a asignatura</a></td></tr>";
};
echo "</table>";


echo "FIN DE LOS ALUMNOS<hr/>";

//echo "<h2>MENÚ DE OPCIONES:</h2>";
//echo "<a href='mezu_berria.php'>Insertar mensaje (Solo usuarios y administradores)</a><hr/>";



mysql_close($dp);
?>
<a href="nuevoAlumno.php" target="">Nuevo Alumno</a><br/>
<a href="nagusia.html">Inicio</a>
</body>
</html>