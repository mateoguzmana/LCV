<?php 

include "php/classes/segurity.php";

$Comprobar = new Segurity();
$Comprobar->Retornar();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include("_includes/meta.php"); ?>

    <title>LCV - Admin</title>

    <?php include ("_includes/style.php");?>

</head>

<body>

    <div id="wrapper">

        <?php include("_includes/nav.php");?>

        <div id="page-wrapper">
        
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include("_includes/scripts.php");?>

</body>

</html>
