<?php 

include "classes/proyectos.class.php";

$Id 	= $_GET["Id"];

$query = new Proyectos();
$query->Delete($Id);

?>
<script type="text/javascript">
	alert("Proyecto eliminado correctamente.");
	window.location.href="../#proyectos";
</script>