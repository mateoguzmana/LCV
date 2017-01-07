<?php 

include "classes/contacto.class.php";

$T1		= $_POST["T1"];
$T2		= $_POST["T2"];
$S1 	= $_POST["S1"];
$Email 	= $_POST["Email"];

$query = new Contacto();
$query->Validar($T1,$T2,$S1,$Email);

?>