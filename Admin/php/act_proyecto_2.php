<?php 

include "classes/proyectos.class.php";

$Id 	= $_POST["Id"];
$Nombre = $_POST["Nombre"];
$Texto	= $_POST["Texto"];

$query = new Proyectos();
$query->ValidarAct($Id,$Nombre,$Texto,$_FILES["Foto"]["tmp_name"],$_FILES["Foto"]["name"]);

?>