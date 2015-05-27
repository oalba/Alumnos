<html>
<head>
<title>Alumnos</title>
	<link rel="stylesheet" type="text/css" href="css/gorputzak.css" />
</head>
<body>
<?php
$zenbat = 0;

$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("ikastola", $dp);

$sql2 = "SELECT * FROM alumnos" ;
$alum2 = mysql_query($sql2);
while ($row2 = mysql_fetch_assoc($alum2)) {
 $zenbat = $zenbat+1;
};
echo "<h4>ALUMNOS: - $zenbat alumnos - </h4>";


$sql = "SELECT * FROM alumnos" ;
$alum = mysql_query($sql);

echo "<table>";
echo "<tr><th>Codigo Alumno</th><th>Nombre Alumno</th><th colspan='2'></th><tr/>";

while ($row = mysql_fetch_assoc($alum)) {
 echo "<tr><td>$row[alu_cod]</td><td>$row[nombre]</td><td>";
 echo "<a href='eliminarAlumnos.php?alu_cod=$row[alu_cod]'>Eliminar</a> <a href='modificarAlumnos.php?alu_cod=$row[alu_cod]'>Editar</a></td></tr>";
};
echo "</table>";


echo "<h4>FIN DE LAS ASIGNATURAS</h4><hr/>";

//echo "<h2>MENÚ DE OPCIONES:</h2>";
//echo "<a href='mezu_berria.php'>Insertar mensaje (Solo usuarios y administradores)</a><hr/>";



mysql_close($dp);
?>
<br/><a href="nuevoAlumno.php" target="_self" id="a1">Nuevo Alumno</a>
<a href="hasiera.html" id="a2">Inicio</a>
</body>
</html>