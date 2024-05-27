<!----------------------------------------------------------------------PREGUNTAS-TRIVIA------------------------------------------------------------------------>
<?php

	function obtenerListaPreguntasTrivia()
	{
		include("conexionCliente.php");
		$query = "SELECT ID_PreguntaTrivia, IDTema, Pregunta, RespuestaCorrecta, RespuestaFalsa1, RespuestaFalsa2, RespuestaFalsa3, Imagen FROM preguntastrivia";

		if(!$resultado = mysqli_query($miConexion,$query))
		{
			exit(mysqli_error($miConexion));
		}   
			$lista = array();
			
			if(mysqli_num_rows($resultado) > 0 )
			{
				while($renglon = mysqli_fetch_assoc($resultado))
				{
					$lista[] = array(
								'ID_PreguntaTrivia'=>$renglon['ID_PreguntaTrivia'],
								'IDTema'=>$renglon['IDTema'],
								'Pregunta'=>$renglon['Pregunta'],
								'RespuestaCorrecta'=>$renglon['RespuestaCorrecta'],
								'RespuestaFalsa1'=>$renglon['RespuestaFalsa1'],
								'RespuestaFalsa2'=>$renglon['RespuestaFalsa2'],
								'RespuestaFalsa3'=>$renglon['RespuestaFalsa3'],
								'Imagen'=>$renglon['Imagen']
								);					
				}
			}	
		return $lista;
	}
	

//---------------------------------------------------------------------------------------------------------------------------------------------------//
	
	function obtenerListaDePreguntasTrivia($IDTemaTrivia)
	{
		include("conexionCliente.php");
		$query = "SELECT ID_PreguntaTrivia, IDTema, Pregunta, RespuestaCorrecta, RespuestaFalsa1, RespuestaFalsa2, RespuestaFalsa3, Imagen FROM preguntastrivia WHERE IDTema=$IDTemaTrivia";

		if(!$resultado = mysqli_query($miConexion,$query))
		{
			exit(mysqli_error($miConexion));
		}   
			$lista = array();
			
			if(mysqli_num_rows($resultado) > 0 )
			{
				while($renglon = mysqli_fetch_assoc($resultado))
				{
					$lista[] = array(
								'ID_PreguntaTrivia'=>$renglon['ID_PreguntaTrivia'],
								'IDTema'=>$renglon['IDTema'],
								'Pregunta'=>$renglon['Pregunta'],
								'RespuestaCorrecta'=>$renglon['RespuestaCorrecta'],
								'RespuestaFalsa1'=>$renglon['RespuestaFalsa1'],
								'RespuestaFalsa2'=>$renglon['RespuestaFalsa2'],
								'RespuestaFalsa3'=>$renglon['RespuestaFalsa3'],
								'Imagen'=>$renglon['Imagen']
								);					
				}
			}	
		return $lista;
	}

//---------------------------------------------------------------------------------------------------------------------------------------------------//
	
	function obtenerDatosPreguntaTrivia($ID_PreguntaTrivia)
	{
		include("conexionCliente.php");
		$query = "SELECT ID_PreguntaTrivia, IDTema, Pregunta, RespuestaCorrecta, RespuestaFalsa1, RespuestaFalsa2, RespuestaFalsa3, Imagen FROM preguntastrivia WHERE ID_PreguntaTrivia=$ID_PreguntaTrivia";
		
		if(!$resultado = mysqli_query($miConexion,$query))
		{
			exit(mysqli_error($miConexion));
		}   
			$lista = array();
			
			if(mysqli_num_rows($resultado) > 0 )
			{
				while($renglon = mysqli_fetch_assoc($resultado))
				{
					$lista = array(
								'ID_PreguntaTrivia'=>$renglon['ID_PreguntaTrivia'],
								'IDTema'=>$renglon['IDTema'],
								'Pregunta'=>$renglon['Pregunta'],
								'RespuestaCorrecta'=>$renglon['RespuestaCorrecta'],
								'RespuestaFalsa1'=>$renglon['RespuestaFalsa1'],
								'RespuestaFalsa2'=>$renglon['RespuestaFalsa2'],
								'RespuestaFalsa3'=>$renglon['RespuestaFalsa3'],
								'Imagen'=>$renglon['Imagen']
								);					
				}
			}	
		return $lista;
	}
?>

<!----------------------------------------------------------------------TEMAS-TRIVIA---------------------------------------------------------------------->
<?php

	function obtenerListaTemasTrivia()
	{
		include("conexionCliente.php");
		$query = "SELECT ID_Tema, Tema FROM temas";
		


		if(!$resultado = mysqli_query($miConexion,$query))
		{
			exit(mysqli_error($miConexion));
		} 
			$lista = array();
			
			if(mysqli_num_rows($resultado) > 0 )
			{	
				while($renglon = mysqli_fetch_assoc($resultado))
				{
					$lista[] = array(
								'ID_Tema'=>$renglon['ID_Tema'],
								'Tema'=>$renglon['Tema']
								);					
				}
			}	
		return $lista;
	}
	

//---------------------------------------------------------------------------------------------------------------------------------------------------//
	
	function obtenerDatosTemasTrivia($IDTemaTrivia)
	{
		include("conexionCliente.php");
		$query = "SELECT ID_Tema, Tema FROM temas WHERE ID_Tema=$IDTemaTrivia";

		if(!$resultado = mysqli_query($miConexion,$query))
		{
			exit(mysqli_error($miConexion));
		}   
			$lista = array();
			
			if(mysqli_num_rows($resultado) > 0 )
			{
				while($renglon = mysqli_fetch_assoc($resultado))
				{
					$lista = array(
								'ID_Tema'=>$renglon['ID_Tema'],
								'Tema'=>$renglon['Tema']
								);					
				}
			}	
		return $lista;
	}

//---------------------------------------------------------------------------------------------------------------------------------------------------//
	
    function obtenerDatosTemas($ID_Tema)
    {
        include("conexionCliente.php");
        $query = "SELECT ID_Tema, Tema FROM temas WHERE ID_Tema=$ID_Tema";

        if(!$resultado = mysqli_query($miConexion,$query))
        {
            exit(mysqli_error($miConexion));
        }   
            $lista = array();
            
            if(mysqli_num_rows($resultado) > 0 )
            {
                while($renglon = mysqli_fetch_assoc($resultado))
                {
                    $lista = array(
                                'ID_Tema'=>$renglon['ID_Tema'],
                                'Tema'=>$renglon['Tema']
                                );					
                }
            }	
        return $lista;
    }



?>

<!----------------------------------------------------------------------Resultados------------------------------------------------------------------------>
<?php

	function obtenerListaResultados()
	{
		include("conexionCliente.php");
		$query = "SELECT ID_Resultado, IDEjercicio, Inciso, DatoABuscar, Resultado FROM resultados";

		if(!$resultado = mysqli_query($miConexion,$query))
		{
			exit(mysqli_error($miConexion));
		}   
			$lista = array();
			
			if(mysqli_num_rows($resultado) > 0 )
			{
				while($renglon = mysqli_fetch_assoc($resultado))
				{
					$lista[] = array(
								'ID_Resultado'=>$renglon['ID_Resultado'],
								'IDEjercicio'=>$renglon['IDEjercicio'],
								'Inciso'=>$renglon['Inciso'],
								'DatoABuscar'=>$renglon['DatoABuscar'],
								'Resultado'=>$renglon['Resultado']
								);					
				}
			}	
		return $lista;
	}
	

//---------------------------------------------------------------------------------------------------------------------------------------------------//
	
	function obtenerListaDeResultados($ID_Ejercicio)
	{
		include("conexionCliente.php");
		$query = "SELECT ID_Resultado, IDEjercicio, Inciso, DatoABuscar, Resultado, Unidades, Operacion FROM resultados  WHERE IDEjercicio=$ID_Ejercicio";

		if(!$resultado = mysqli_query($miConexion,$query))
		{
			exit(mysqli_error($miConexion));
		}   
			$lista = array();
			
			if(mysqli_num_rows($resultado) > 0 )
			{
				while($renglon = mysqli_fetch_assoc($resultado))
				{
					$lista[] = array(
								'ID_Resultado'=>$renglon['ID_Resultado'],
								'IDEjercicio'=>$renglon['IDEjercicio'],
								'Inciso'=>$renglon['Inciso'],
								'DatoABuscar'=>$renglon['DatoABuscar'],
								'Resultado'=>$renglon['Resultado'],
								'Unidades'=>$renglon['Unidades'],
								'Operacion'=>$renglon['Operacion']
								);					
				}
			}	
		return $lista;
	}

	function obtenerDatosResultados($ID_Ejercicio)
	{
		include("conexionCliente.php");
		$query = "SELECT ID_Resultado, IDEjercicio, Inciso, Resultado, Unidades, Operacion FROM resultados WHERE IDEjercicio=$ID_Ejercicio";
		
		if(!$resultado = mysqli_query($miConexion,$query))
		{
			exit(mysqli_error($miConexion));
		}   
			$lista = array();
			
			if(mysqli_num_rows($resultado) > 0 )
			{
				while($renglon = mysqli_fetch_assoc($resultado))
				{
					$lista = array(
								'ID_Resultado'=>$renglon['ID_Resultado'],
								'IDEjercicio'=>$renglon['IDEjercicio'],
								'Inciso'=>$renglon['Inciso'],
								'Resultado'=>$renglon['Resultado'],
								'Unidades'=>$renglon['Unidades'],
								'Operacion'=>$renglon['Operacion']
								);					
				}
			}	
		return $lista;
	}

?>


<!----------------------------------------------------------------------Ejercicios------------------------------------------------------------------------>
<?php

	function obtenerListaEjercicios()
	{
		include("conexionCliente.php");
		$query = "SELECT ID_Ejercicio, IDTema, Problema, CantidadDeIncisos, Imagen, ImagenSolucion, CantidadImgSolucion, Problemaa FROM ejercicios";

		if(!$resultado = mysqli_query($miConexion,$query))
		{
			exit(mysqli_error($miConexion));
		}   
			$lista = array();
			
			if(mysqli_num_rows($resultado) > 0 )
			{
				while($renglon = mysqli_fetch_assoc($resultado))
				{
					$lista[] = array(
								'ID_Ejercicio'=>$renglon['ID_Ejercicio'],
								'IDTema'=>$renglon['IDTema'],
								'Problema'=>$renglon['Problema'],
								'CantidadDeIncisos'=>$renglon['CantidadDeIncisos'],
								'Imagen'=>$renglon['Imagen'],
								'ImagenSolucion'=>$renglon['ImagenSolucion'],
								'CantidadImgSolucion'=>$renglon['CantidadImgSolucion'],		
								'Problemaa'=>$renglon['Problemaa']
								);					
				}
			}	
		return $lista;
	}
	

//---------------------------------------------------------------------------------------------------------------------------------------------------//
	
	function obtenerDatosEjercicios($ID_Ejercicio)
	{
		include("conexionCliente.php");
		$query = "SELECT ID_Ejercicio, IDTema, Problema, CantidadDeIncisos, Imagen, ImagenSolucion, CantidadImgSolucion, Problemaa  FROM ejercicios  WHERE ID_Ejercicio=$ID_Ejercicio";

		if(!$resultado = mysqli_query($miConexion,$query))
		{
			exit(mysqli_error($miConexion));
		}   
			$lista = array();
			
			if(mysqli_num_rows($resultado) > 0 )
			{
				while($renglon = mysqli_fetch_assoc($resultado))
				{
					$lista = array(
							'ID_Ejercicio'=>$renglon['ID_Ejercicio'],
							'IDTema'=>$renglon['IDTema'],
							'Problema'=>$renglon['Problema'],
							'CantidadDeIncisos'=>$renglon['CantidadDeIncisos'],
							'Imagen'=>$renglon['Imagen'],
							'ImagenSolucion'=>$renglon['ImagenSolucion'],
							'CantidadImgSolucion'=>$renglon['CantidadImgSolucion'],		
							'Problemaa'=>$renglon['Problemaa']
							);		
				}
			}	
		return $lista;
	}
?>