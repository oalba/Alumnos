<html>
<head>
<title>Alumnos</title>
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
echo "ASIGNATURAS: (En total: $zenbat asignaturas)<hr/>";


$sql = "SELECT * FROM asignaturas" ;
$asig = mysql_query($sql);

echo "<table>";
while ($row = mysql_fetch_assoc($asig)) {
 echo "<tr><td>$row[asig_cod]</td><td>$row[nombre_asig]</td><td>$row[horas]</td><td>";
 echo "<a href='eliminarAlumnos.php?alu_cod=$row[alu_cod]'>Eliminar</a> <a href='modificarAlumnos.php?alu_cod=$row[alu_cod]'>Editar</a></td></tr>";
};
echo "</table>";


echo "FIN DE LAS ASIGNATURAS<hr/>";

//echo "<h2>MENÚ DE OPCIONES:</h2>";
//echo "<a href='mezu_berria.php'>Insertar mensaje (Solo usuarios y administradores)</a><hr/>";



mysql_close($dp);
?>
<a href="nuevoAlumno.php" target="">Nuevo Alumno</a><br/>
<a href="nagusia.html">Inicio</a>
</body>
</html>