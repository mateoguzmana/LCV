<?php 

class Conexion{

	protected $con;

	public function Conectar(){

		$this->con = new PDO("mysql:host=mysql.hostinger.co;dbname=u781448169_db","u781448169_db","12345678");

		return $this->con;

	}



}




?>