<?php
$miConexion = new mysqli(DBHOST,DBUSER,DBPASSWD,DBNAME);
	
	if($miConexion->connect_error)
	{
		die("La conexión con la base de datos ha fallado : ".$miConexion->connect_error);
	}


?>