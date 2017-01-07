<?php 

include "classes/proyectos.class.php";

$Nombre = $_POST["Nombre"];
$Texto  = $_POST["Texto"];

$query = new Proyectos();
$query->ValidarIng($Nombre,$Texto,$_FILES["Foto"]["tmp_name"],$_FILES["Foto"]["name"]);

?>