<?php 

include "classes/voluntarios.class.php";

$Id  	= $_POST["Id"];
$Nombre = $_POST["Nombre"];
$Frase  = $_POST["Frase"];


$query = new Voluntarios();
$query->ValidarAct($Id,$Nombre,$Frase,$_FILES["Foto"]["tmp_name"],$_FILES["Foto"]["name"],$_FILES["Foto2"]["tmp_name"],$_FILES["Foto2"]["name"]);


?>