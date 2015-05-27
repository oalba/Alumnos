<html>
<head>
<title>Alumnos</title>
	<link rel="stylesheet" type="text/css" href="./css/gorputzak.css" />
</head>
<body>
<?php
$zenbat = 0;

$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("ikastola", $dp);

$selAsig = "SELECT * FROM asignaturas";
$asign = mysql_query($selAsig);
/*$selAsig = "SELECT asignaturas.nombre_asig FROM asignaturas,asistir_a_a where asignaturas.asig_cod=asistir_a_a.asig_cod" ;
$asign = mysql_query($selAsig);
*/


echo "<h4>ASIGNATURAS:</h4><hr/>";

while ($row = mysql_fetch_assoc($asign)) {
 echo "<br><ul>$row[nombre_asig]	<a href='addAlumno.php?asig_cod=$row[asig_cod]' target='target'>Añadir alumnos</a>	-	<a href='verFaltas.php?asig_cod=$row[asig_cod]' target='target'>Ver faltas</a>	-	<a href='addFaltas.php?asig_cod=$row[asig_cod]' target='target'>Añadir faltas</a><br/>";

 	//$selAlum = "SELECT alumnos.nombre, alumnos.alu_cod FROM alumnos,asistir_a_a where alumnos.alu_cod=asistir_a_a.alu_cod and (SELECT asignaturas.nombre_asig FROM asignaturas,asistir_a_a where asignaturas.asig_cod=asistir_a_a.asig_cod)='$row[nombre_asig]'";
 $selAlum = "SELECT asistir_a_a.alu_cod FROM asistir_a_a,asignaturas where asistir_a_a.asig_cod=asignaturas.asig_cod and asignaturas.nombre_asig='$row[nombre_asig]'";

	$alumn = mysql_query($selAlum);

 	while ($row2 = mysql_fetch_assoc($alumn)) {
		echo "<li>$row2[alu_cod] ";
		$selNom = "SELECT nombre FROM alumnos WHERE alu_cod=$row2[alu_cod]";
		$selNom = mysql_query($selNom);
		while ($row3 = mysql_fetch_assoc($selNom)) {
			echo " $row3[nombre] <a href='delAlumno.php?asig_cod=$row[asig_cod]&alu_cod=$row2[alu_cod]' target='target'>Eliminar alumno</a></li></ul>";
		};
	};
};


echo "<h4>FIN DE LAS ASIGNATURAS</h4><hr/>";

mysql_close($dp);
?>
<a href="nuevaAsignatura.php" id="a1" target="_self">Nueva Asignatura</a>
<a href="hasiera.html"  id="a2">Inicio</a>
</body>
</html>