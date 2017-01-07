<?php 
include "classes/upload.class.php";

$Upload = new Upload();

$Status = $_GET["S"];
$Id 	= $_GET["Id"];

switch ($Status) {
	case 0:
		$Upload->ChangeStatus($Id,0);
		break;
	case 1:
		$Upload->ChangeStatus($Id,1);
		break;
	case 2:	
		$Upload->ChangeStatus($Id,2);
		break;

	default:
		# code...
		break;
}

?>
<script type="text/javascript">
	alert("Estado de la imagen modificada con éxito.");
	window.location.href="../#aprobar";
</script>