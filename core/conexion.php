<?php
	$conexion=new mysqli("localhost","root","","salsi");
	if ($conexion->connect_errno) 
	{
		echo "Error al conectar con la base de datos";
		exit();
	}
	$conexion->set_charset("utf8");
	//else
	//	echo "si se pudo";
	

?>