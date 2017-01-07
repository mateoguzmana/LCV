<?php 

include "classes/comparte.class.php";

$T1		= $_POST["T1"];
$T2		= $_POST["T2"];
$S2		= $_POST["S2"];
$T3		= $_POST["T3"];
$S3		= $_POST["S3"];

$query = new Comparte();
$query->Validar($T1,$T2,$S2,$T3,$S3);

?>