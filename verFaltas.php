<html>
<head>
<title>Alumnos</title>
</head>
<body>
<?php
//$zenbat = 0;
$asig_cod = $_GET['asig_cod'];

$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("ikastola", $dp);

$asist = "SELECT * FROM asistir_a_a WHERE asig_cod=$asig_cod";
$asis = mysql_query($asist);
echo "<table><tr><td>Codigo</td><td>Nombre</td><td>Faltas</td></tr>";
while ($row = mysql_fetch_assoc($asis)) {
	//echo "<tr><td>$row[alu_cod]</td><td></td><td>$row[fecha]</td></tr>";

 $selNom = "SELECT nombre FROM alumnos WHERE alu_cod=$row[alu_cod]";
 $nom = mysql_query($selNom);
 
 //$cant = mysql_num_rows($kop1);
 //echo "<tr><td>$row[alu_cod]</td><td>$nom</td><td>$cant</td></tr>";
 while ($row2 = mysql_fetch_assoc($nom)) {
 	echo "<tr><td>$row[alu_cod]</td><td>$row2[nombre]</td>";
 	//$kop = "SELECT count(*) FROM asistir_a_a WHERE asig_cod=$asig_cod AND alu_cod=$row[alu_cod]";
 	$kop = "SELECT count(*) FROM asistir_a_a WHERE alu_cod=$row[alu_cod]";
 	$kop1 = mysql_query($kop);
 	while ($row3 = mysql_fetch_array($kop1)) {
 		echo "<td>".$row3['count(*)']."</td>";
 	};
 	echo "</tr>";
 };
 

 /*echo "<br><u>$row[nombre_asig]</u>	<a href='addAlumno.php?asig_cod=$row[asig_cod]' target='target'>Añadir alumnos</a>	-	<a href='addFaltas.php?asig_cod=$row[asig_cod]' target='target'>Añadir faltas</a><br/>";

 	//$selAlum = "SELECT alumnos.nombre, alumnos.alu_cod FROM alumnos,asistir_a_a where alumnos.alu_cod=asistir_a_a.alu_cod and (SELECT asignaturas.nombre_asig FROM asignaturas,asistir_a_a where asignaturas.asig_cod=asistir_a_a.asig_cod)='$row[nombre_asig]'";
 $selAlum = "SELECT asistir_a_a.alu_cod FROM asistir_a_a,asignaturas where asistir_a_a.asig_cod=asignaturas.asig_cod and asignaturas.nombre_asig='$row[nombre_asig]'";

	$alumn = mysql_query($selAlum);

 	while ($row2 = mysql_fetch_assoc($alumn)) {
		echo "$row2[alu_cod] ";
		$selNom = "SELECT nombre FROM alumnos WHERE alu_cod=$row2[alu_cod]";
		$selNom = mysql_query($selNom);
		while ($row3 = mysql_fetch_assoc($selNom)) {
			echo " $row3[nombre] <a href='delAlumno.php?asig_cod=$row[asig_cod]&alu_cod=$row2[alu_cod]' target='target'>Eliminar alumno</a><br/>";
		};
	};*/

};
echo "</table>";


mysql_close($dp);
?>
<a href="clases.php" target="_self">Clases</a><br/>
<a href="hasiera.html">Inicio</a>
</body>
</html>