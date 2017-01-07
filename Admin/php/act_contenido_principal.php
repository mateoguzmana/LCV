<?php 

include "classes/cont_principal.class.php";

$Titulo 	= $_POST["Titulo"];
$Frase  	= $_POST["Frase"];
$T1     	= $_POST["T1"];
$S1			= $_POST["S1"];
$T2     	= $_POST["T2"];
$S2			= $_POST["S2"];
$Video 		= $_POST["Video"];
$Twitter	= $_POST["Twitter"];
$Facebook	= $_POST["Facebook"];
$Instagram	= $_POST["Instagram"];
$Youtube	= $_POST["Youtube"];

$query = new ContenidoP();
$query->Update($Titulo,$Frase,$T1,$S1,$T2,$S2,$Video,$Twitter,$Facebook,$Instagram,$Youtube);

?>