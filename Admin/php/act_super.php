<?php 

include "classes/super.class.php";

$T1		= $_POST["T1"];
$T2		= $_POST["T2"];
$S1 	= $_POST["S1"];

$query = new Super();
$query->Validar($T1,$T2,$S1,$_FILES['Foto']['tmp_name']);

?>