<?php 


echo "Cerrando sesión...";

session_start();
session_destroy();




?>

<script type="text/javascript">
	window.location.href="../../login";
</script>