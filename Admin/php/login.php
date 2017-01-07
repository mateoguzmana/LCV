<?php 

include "classes/login.php";

$User = $_POST["Usuario"];
$Pass = $_POST["Password"];

$Login = new Login($User,$Pass);


?>