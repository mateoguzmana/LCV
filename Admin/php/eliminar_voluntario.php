<?php 

include "classes/voluntarios.class.php";

$Id  	= $_GET["Id"];


$query = new Voluntarios();
$query->Delete($Id);


?>
<script type="text/javascript">
	alert("Voluntario eliminado correctamente.");
	window.location.href="../#voluntarios";
</script>