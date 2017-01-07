<?php 
include "classes/fondos.class.php";

$query = new Fondos();

$Id = $_REQUEST["Id"];

switch ($Id) {
    case "Inicio":
        $query->Inicio($_FILES["Fondo1"]["name"],$_FILES["Fondo1"]["tmp_name"],$_FILES["Boton"]["name"],$_FILES["Boton"]["tmp_name"]);
        break;
    case "Galeria":
        $query->Galeria($_FILES["Fondo2"]["name"],$_FILES["Fondo2"]["tmp_name"]);
        break;
    case "Voluntarios":
        $query->Voluntarios($_FILES["Fondo3"]["name"],$_FILES["Fondo3"]["tmp_name"]);
        break;
}
?>
<script type="text/javascript">
	alert("Operación realizada con éxito.");
	window.location.href="../#fondos";
</script>