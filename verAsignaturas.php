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

$sql2 = "SELECT * FROM asignaturas" ;
$asig2 = mysql_query($sql2);
while ($row2 = mysql_fetch_assoc($asig2)) {
 $zenbat = $zenbat+1;
};
echo "<h4>ASIGNATURAS	- $zenbat asignaturas -</h4><hr/>";


$sql = "SELECT * FROM asignaturas" ;
$asig = mysql_query($sql);

echo "<table>";
echo "<tr><th>Codigo Asignatura</th><th>Nombre Asignatura</th><th>Cantidad Horas</th><tr/>";

while ($row = mysql_fetch_assoc($asig)) {
 echo "<tr><td>$row[asig_cod]</td><td>$row[nombre_asig]</td><td>$row[horas]</td><td>";
 echo "<a href='eliminarAsignaturas.php?asig_cod=$row[asig_cod]'>Eliminar</a> <a href='modificarAsignaturas.php?asig_cod=$row[asig_cod]'>Editar</a></td></tr>";
};
echo "</table>";


echo "<hr/><h4>FIN DE LAS ASIGNATURAS</h4>";

//echo "<h2>MENÚ DE OPCIONES:</h2>";
//echo "<a href='mezu_berria.php'>Insertar mensaje (Solo usuarios y administradores)</a><hr/>";



mysql_close($dp);
?>
<a href="nuevaAsignatura.php" target="_self">Nueva Asignatura</a><br/>
<a href="hasiera.html">Inicio</a>
</body>
</html>