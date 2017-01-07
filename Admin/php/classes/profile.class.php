<?php 

session_start();

include "conexion.php";

class Profile extends Conexion{

	public $con;
	public $R;

	function __construct(){

	$this->con = $this->Conectar();

	}

	public function Listar(){

	$query = $this->con->prepare("SELECT * FROM usuarios WHERE Usuario='".$_SESSION["user"]."'");
	$query->execute();

	return $query;

	}

	public function Validate($Nombre,$Email,$Usuario,$Password){

		if(is_string($Nombre) && $Nombre!=""){
			if(filter_var($Email, FILTER_VALIDATE_EMAIL)==true && $Email!=""){
				if (is_string($Usuario)  && $Usuario!="") {
					if(is_string($Password) && $Password!=""){
						$this->R = true;
					}else{
						$this->R = false;
					}
				}else{
					$this->R = false;
				}
			}else{
				$this->R = false;
			}
		}else{
			$this->R = false;
		}

		if($this->R==true){
		$query=$this->Update($Nombre,$Email,$Usuario,$Password);
		}else{
		?>
		<script type="text/javascript">
			alert("Tienes un error en los datos");
			window.location.href="../#profile";
		</script>
		<?php	
		}

	}


	public function Update($Nombre,$Email,$Usuario,$Password){

	$Nombre = filter_var($Nombre,FILTER_SANITIZE_STRING);
	$Email  = filter_var($Email,FILTER_SANITIZE_EMAIL);
	$Usuario= filter_var($Usuario,FILTER_SANITIZE_STRING);
	$Password=filter_var($Password,FILTER_SANITIZE_STRING);

	$query = $this->con->prepare("UPDATE usuarios SET Nombre='$Nombre',Email='$Email',Usuario='$Usuario',Password='$Password' WHERE Usuario='".$_SESSION["user"]."'");
	

		if($query->execute()){
		?>
		<script type="text/javascript">
			alert("Actualizado correctamente");
			window.location.href="../#profile";
		</script>
		<?php
		}

	}


}

?>