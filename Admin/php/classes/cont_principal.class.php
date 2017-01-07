<?php 

include "conexion.php";

class ContenidoP extends Conexion{

	public $con;

	function __construct(){

	$this->con = $this->Conectar();

	}

	public function Listar(){

	$query = $this->con->prepare("SELECT * FROM contenidoprincipal");
	$query->execute();

	return $query;

	}

	public function Update($Titulo,$Frase,$T1,$S1,$T2,$S2,$Video,$Twitter,$Facebook,$Instagram,$Youtube){

	$query = $this->con->prepare("UPDATE contenidoprincipal SET Titulo='$Titulo', Frase='$Frase', T1='$T1', S1='$S1', T2='$T2', S2='$S2', Video='$Video', Twitter='$Twitter', Facebook='$Facebook', Instagram='$Instagram', Youtube='$Youtube'");

		if ($query->execute()) {
		?>
		<script type="text/javascript">
			alert("Actualizado correctamente.");
			window.location.href="../#cont_principal";
		</script>
		<?php
		}

	}



}





?>