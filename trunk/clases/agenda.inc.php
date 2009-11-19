<?php
	require ("conecta_bd.inc.php");

	class agenda{

		function conectar(){
			$conn = new DB_mysql;
			$conn->conectar("mydb", "localhost", "nobody", "");
		}

		function consulta(){
			$this->conectar();
			$conn->consulta("SELECT * FROM agenda");
			$conn->verconsulta();
		}
	 }
?>

