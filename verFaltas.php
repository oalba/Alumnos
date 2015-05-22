<html>
<head>
<title>Alumnos</title>
</head>
<body>
<?php
$asig_cod = $_GET['asig_cod'];

$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("ikastola", $dp);

$asist = "SELECT * FROM asistir_a_a WHERE asig_cod=$asig_cod";
$asis = mysql_query($asist);
echo "<table><tr><td>Codigo</td><td>Nombre</td><td>Faltas</td></tr>";
while ($row = mysql_fetch_assoc($asis)) {
 $selNom = "SELECT nombre FROM alumnos WHERE alu_cod=$row[alu_cod]";
 $nom = mysql_query($selNom);
 
 //$cant = mysql_num_rows($kop1);
 //echo "<tr><td>$row[alu_cod]</td><td>$nom</td><td>$cant</td></tr>";
 while ($row2 = mysql_fetch_assoc($nom)) {
 	echo "<tr><td>$row[alu_cod]</td><td>$row2[nombre]</td>";
 	//$kop = "SELECT count(*) FROM asistir_a_a WHERE asig_cod=$asig_cod AND alu_cod=$row[alu_cod]";
 	$kop = "SELECT count(*) as falta FROM faltar_a_a WHERE alu_cod=$row[alu_cod] AND asig_cod=$asig_cod";
 	$kop1 = mysql_query($kop);
 	while ($row3 = mysql_fetch_assoc($kop1)) {
 		echo "<td>".$row3['falta']."</td>";
 	};
 	echo "</tr>";
 };
};
echo "</table>";


mysql_close($dp);
?>
<a href="clases.php" target="_self">Clases</a><br/>
<a href="hasiera.html">Inicio</a>
</body>
</html>