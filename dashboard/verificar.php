<?php
//verificacion del ADMIN a la DB

require_once("conexion.php");

$usuario=$_POST['user'];
$clave=$_POST['clave'];
$bandera=0;

//echo "valores: ".$usuario." ".$clave;

//Tecnica para validacion de pocos usuarios

$sql="SELECT *FROM usuarios";

$resultado=$conexion->query($sql);
//bucle de busqueda de usuarios en la tabla
while ($fila=$resultado->fetch_array(MYSQLI_ASSOC)){
//validadcion de user y password
	if($fila['usuario']==$usuario){
		echo 'user exist';
			if($fila['clave']==$clave){
				echo 'User and password correct';
				$bandera=1;
				//iniciar sesion valida
				
				session_start();
				$_SESSION['usuarioValido']=$fila; //guardar todo el registro correcto
				break;

			}else{
				echo 'Error password';
				$bandera=2;
				break;
			}
	}else{
		echo 'not user exist';
		$bandera=3;
		//break;
	}
	
}

//analizar el comportamiento de los estados
$ruta="";

switch ($bandera) {
	case 1://todo correcto
		$ruta="Location: inicio.php";
		break;
	
	case 2://error en la clave
		$ruta="Location: login.php?v=2";
		break;

	case 3://error en el usuario
		$ruta="Location: login.php?v=3";
		break;
}

header($ruta);//redireccion segun ruta

?>