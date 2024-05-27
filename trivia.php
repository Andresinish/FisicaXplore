
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejemplo - FisicaXplora</title>

    <link rel="stylesheet" type="text/css" href="<?=CSS?>trivia.css">
	<link rel="stylesheet" href="<?=CSS?>victoriaYderrota.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>

</head>

    <section class="s-pageheader pageheader">
        <div class="row">
            <div class="column xl-12">
                <h1 class="page-title">
                    <span class="page-title__small-type text-pretitle">Minijuego</span>
                    TRIVIA
                </h1>                            
            </div>
        </div>
    </section>
    
    <?php
	
	//----TemasTrivia-----//
	$listTemas = obtenerListaTemasTrivia();
	$idsTemas = array();
	$puntaje = 0;
	$temas = array();
	
	foreach($listTemas AS $renglon=>$campo)
	{
		$idsTemas[]=$campo['ID_Tema'];
		$temas[]=$campo['Tema'];
	}
	$numTemas = count($temas)-2;
	$temaRand = rand(0,$numTemas);
	$IDTemaTrivia = $idsTemas[$temaRand];
	
	//----Preguntas-----//
	$listPreguntas = obtenerListaDePreguntasTrivia($IDTemaTrivia);
	$idsPreguntas = array();
	$preguntas = array();
	
	foreach($listPreguntas AS $renglon=>$campo)
	{
		$idsPreguntas[]=$campo['ID_PreguntaTrivia'];
		$preguntas[]=$campo['Pregunta'];
	}
	$numPreguntas = count($preguntas)-1;
	$preguntaRand = rand(0,$numPreguntas);
	$ID_PreguntaTrivia = $idsPreguntas[$preguntaRand];
	
	//----Respuestas-----//
	$datosPregunta = obtenerDatosPreguntaTrivia($ID_PreguntaTrivia);
	$respuestas = array($datosPregunta['RespuestaCorrecta'],
					$datosPregunta['RespuestaFalsa1'],
					$datosPregunta['RespuestaFalsa2'],
					$datosPregunta['RespuestaFalsa3']
					);
					
	$contador = 0;
	$opcion = array("","", "", "");

	while ($contador < 4) 
	{
		$numRand = rand(0, 3);
		$opcionActual = $respuestas[$numRand];

		if ($opcionActual != $opcion[0] && $opcionActual != $opcion[1] && $opcionActual != $opcion[2] && $opcionActual != $opcion[3])
		{
			$opcion[$contador] = $opcionActual;
			$contador++;
		}
	}
?>

    <div class="conti">     

		<h3 class="tema"><?=$temas[$temaRand]?></h3>

		<div class="contador">
			Tiempo restante: <span id="contador">20</span> s
		</div>        
			
		<div class="informacion-pregunta">
			<div class="pregunta">
				<p id="texto-pregunta"><?=$preguntas[$preguntaRand]?></p>
			</div>

			<div class="opciones">
				<?php 
					$contador = 0;
					while($contador < 4)
					{ 
				?>
						 <button class="opcion" id="respuesta<?=$contador?>" onclick="ComprobarRespuesta(this.id)"><?=$opcion[$contador]?></button>
				<?php 
						$contador++;
					} 
				?>
			</div>
			
			<div class="boton">
				<button class="siguiente" id="siguiente" onclick="ActualizarPregunta()" style="display: none;">Siguiente</button>
			</div>
			 <div class="background-blur" id="backgroundBlur"></div>
		</div>
	</div>
	
	<script>
		function ActualizarPregunta()
		{
			location.reload()
			document.getElementById("siguiente").style.display = "none"
		}

		function MostrarCuentaRegresiva()
		{
			let tiempoRestante = 20
			let contador = document.getElementById('contador')

			function ActualizarContador()
			{
				contador.innerText = tiempoRestante
				
				if (tiempoRestante < -1) 
				{
					ActualizarPregunta()
					tiempoRestante = 20
				}
				else
				{
					tiempoRestante--
				}
			}

			setInterval(ActualizarContador, 1000)
		}

		window.onload = function ()
						{
							 MostrarCuentaRegresiva()
							 setInterval(ActualizarPregunta, 22000)
						 }
				
		function ComprobarRespuesta(IdOpcion) 
		{
			let contador=0
			let respuestaSeleccionada = document.getElementById(IdOpcion).textContent
			let respuestaCorrecta = "<?=$datosPregunta['RespuestaCorrecta']?>"
			let puntajeElement = document.getElementById('puntaje')

			const section = document.querySelector("section");
			const overlay = document.querySelector(".overlay");
			const showBtn = document.querySelector(".show-modal");
			const closeBtn = document.querySelector(".close-btn");
			const opcion = document.getElementById("opcion");
			
			if (respuestaSeleccionada == respuestaCorrecta)
			{
				document.getElementById(IdOpcion).style.backgroundColor = "green"
				document.getElementById('siguiente').style.display = 'block'
				
				section.classList.add("active")
				section.style.display = "block"
				
				const section = document.querySelector("section");
				const backgroundBlur = document.getElementById("backgroundBlur");
				
			}
			else
			{
				document.getElementById(IdOpcion).style.backgroundColor = "red"
				document.getElementById('siguiente').style.display = 'block'
				document.getElementById('siguiente').style.backgroundColor = 'red'
				for (contador= 0; contador < 4; contador++)
				{
					if (document.getElementById("respuesta" + contador).textContent == respuestaCorrecta)
					{
						document.getElementById("respuesta" + contador).style.backgroundColor = "green"
					}
				}
			}

			for (contador = 0; contador < 4; contador++)
			{
				document.getElementById("respuesta" + contador).disabled = true
			}
		}
    </script>