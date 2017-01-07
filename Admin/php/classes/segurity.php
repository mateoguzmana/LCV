<?php 

session_start();

class Segurity{

	private $response;

	function __construct(){

		$this->response = true;

		if(empty($_SESSION["user"])){

		$this->response = false;

		}else{

		$this->response = true;

		}

		return $this->response;

	}

	function Retornar(){

		if ($this->response===false) {
		?>
		<script type="text/javascript">
			alert("Tu sesión ha caducado, por favor inicia sesión");
			window.location.href="login/";
		</script>
		<?php
		}

	}

}


?>