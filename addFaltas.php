<html>
<head>
<title>Faltas</title>
</head>
<body>
<?php

$asig = $_GET['asig_cod'];

$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("ikastola", $dp);

$selAlum = "SELECT asistir_a_a.alu_cod FROM asistir_a_a,asignaturas where asistir_a_a.asig_cod=asignaturas.asig_cod and asignaturas.asig_cod=$asig";

$alumn = mysql_query($selAlum);

while ($row = mysql_fetch_assoc($alumn)) {
	echo "<input type='checkbox' name='falta[]' value='$row[alu_cod]'>$row[alu_cod] ";
	$selNom = "SELECT nombre FROM alumnos WHERE alu_cod=$row[alu_cod]";
	$selNom = mysql_query($selNom);
	while ($row2 = mysql_fetch_assoc($selNom)) {
		echo " $row2[nombre]<br/>";
	};
};


/*<input type="checkbox" name="calidad[]" value="calidad_ok">
<input type="checkbox" name="calidad[]" value="calidad_null">
<input type="checkbox" name="calidad[]" value="calidad_arg">*/

/*$calidad=$_POST['calidad'];
for($i=0;$i<count($calidad);$i++){
$sql_query = "insert into datos (calidad) values ('$calidad[$i]')" ;
}*/



echo "<a href='inFaltas.php?asig_cod=$asig&faltas=$row2[falta]' target='target'>Insertar faltas</a><br/>";
mysql_close($dp);
?>
<a href="hasiera.html">Inicio</a>
</body>
</html>