<?php

$asig = $_GET['asig_cod'];
//$faltas = array('$_POST[faltas]');
$faltas = $_POST['faltas'];
$fecha = date("Y-m-d");

$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("ikastola", $dp);

//$calidad=$_POST['calidad'];
//for($i=0;$i<count($faltas);$i++){
foreach ($faltas as $falta){
//$sql_query = "insert into datos (calidad) values ('$calidad[$i]')" ;
$sql = "INSERT INTO faltar_a_a (asig_cod,alu_cod,fecha) VALUES ($asig,$falta,'$fecha')";
mysql_query($sql);
}


/*for($i=0;$i<count($faltas);$i++) {
$field=explode("_",$_POST['campos'][$i]);
$consulta = "INSERT INTO tabla (campo1,campo2,campo3) VALUES (".$field[0].",".$field[1].",".$field[2].")";
//Ejecuto la consulta
$resultado = mysql_query($consulta,$Sistema) or die(mysql_error());
}*/

/*<?php foreach ($_POST['seleccion'] as $id){ 
echo $id."<br>"; 
} ?>*/
mysql_close($dp);

header("location:clases.php");
?>
