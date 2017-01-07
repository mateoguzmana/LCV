<?php  

session_start();

include "conexion.php";

class Login extends Conexion{

	private $Usuario;
	private $Password;

	function __construct($User,$Pass){

	//Sanar las variables
	$this->Usuario  = filter_var($User, FILTER_SANITIZE_STRING);
	$this->Password = filter_var($Pass, FILTER_SANITIZE_STRING);

	$con = $this->Conectar();
	$con2 = $con->prepare("SELECT * FROM usuarios WHERE Usuario='$this->Usuario' AND Password='$this->Password'");
	$con2->execute();

		if ($con2->rowCount()>0) {
			$_SESSION["user"] = $this->Usuario;
			?>
			<script type="text/javascript">
			window.location.href="../";
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
			window.location.href="../login/index.php?R=1";
			</script>
			<?php
		}

	}

}

?>