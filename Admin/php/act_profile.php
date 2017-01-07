<?php 

include "classes/profile.class.php";

$Nombre   = $_POST["Nombre"];
$Email    = $_POST["Email"];
$Usuario  = $_POST["Usuario"];
$Password = $_POST["Password"];

$query = new Profile();
$R = $query->Validate($Nombre,$Email,$Usuario,$Password);

?>