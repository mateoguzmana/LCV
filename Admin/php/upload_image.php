<?php 
include "classes/upload.class.php";

$Nombre		= $_POST["Nombre"];
$Email 		= $_POST["Email"];
$Personaje  = $_POST["Personaje"];

$Upload 	= new Upload();

$Upload->Carga($Nombre,$Email,$Personaje,$_FILES["files"]["tmp_name"],$_FILES["files"]["name"]);


?>
<script type="text/javascript">
		
	alert("La imagen se ha subido correctamente.");
	window.location.href="../../C.php";

</script>