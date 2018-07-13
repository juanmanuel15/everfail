<?php
		
		class Conexion{

		public function conectar(){
			include "datos_base.php";
			
			$conexion = new mysqli($this->host,$this->user, $this->pass, $this->base);

		if($conexion->connect_error){
			die('Error de Conexión ('. $conexion->connect_errno. ')' . $conexion->connect_error);

		}

		echo "Éxito..." .$conexion->host_info . "\n";
		$conexion->close();
			}
		}

		

?>