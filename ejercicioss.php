
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejemplo - FisicaXplora</title>

    <link rel="stylesheet" type="text/css" href="<?=CSS?>ejercicios.css">
	<link rel="stylesheet" href="<?=CSS?>victoriaYderrota.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>

	<style>
    .borde-rojo {
        border: 2px solid red;
    }
    .borde-verde {
        border: 2px solid green;
    }
	</style>

</head>

    <section class="s-pageheader pageheader">
        <div class="row">
            <div class="column xl-12">
                <h1 class="page-title">
                    <span class="page-title__small-type text-pretitle">Actividad</span>
                    EJECICIOS
                </h1>                            
            </div>
        </div>
    </section>
    
    <?php
	

	$ID_Tema = $_GET['ID_Tema'];
	$datosTema = obtenerDatosTemas($ID_Tema);
	
	$ID_Ejercicio = $_GET['ID_Ejercicio'];
	$datosEjercicio = obtenerDatosEjercicios($ID_Ejercicio);
	
	$obtenerListaResultados	= obtenerListaDeResultados($ID_Ejercicio);
	
	$resultados = array();
	$operaciones = array();
	$ResultadoOperacion = array();
	$contador = 0;
	
	for($contador = 0; $contador < $datosEjercicio['CantidadDeIncisos']; $contador ++)
	{
		$resultados[$contador] = $obtenerListaResultados[$contador]['Resultado'];
	}	
	
	for($contador = 0; $contador < $datosEjercicio['CantidadDeIncisos']; $contador ++)
	{
		$operaciones[$contador] = $obtenerListaResultados[$contador]['Operacion'];
	}

	for($contador = 0; $contador < $datosEjercicio['CantidadDeIncisos']; $contador ++)
	{
		$ResultadoOperacion[$contador] = eval("return $operaciones[$contador];");
	}
?>

	<div class="conti">     

		<h3 class="tema"><?=$datosTema['Tema']?></h3>       
			
		<div class="informacion-pregunta">
			<div class = "Ejercicio">
				<h2 style="margin-top: 0px;">Ejercicio #<?=$datosEjercicio['Problemaa']?></h2>
			</div>
			<div class="pregunta">
				<p id="texto-pregunta"><?=$datosEjercicio['Problema']?></p>
			</div>
			
			<div class = "imagen">
			<?php 
				
				if($datosEjercicio['Imagen'] <> "no hay")
				{ ?>
					<img class = "img" src="<?=IMAGES?><?=$datosEjercicio['Imagen']?>">
			<?php
				}
			?>
			</div>
			
			<div class = "resultados">
				<?php
					if($datosEjercicio['CantidadDeIncisos'] == 1)
					{
				?>
						<h3 style="margin-top: 0px;">Tu respuesta:</h3>
				<?php
					}
					else
					{
				?>
						<h3 style="margin-top: 0px;">Tus respuestas:</h3>
				<?php
					}
				?>
					<div class = "incisos">
					<?php
						for ($contador = 0; $contador < $datosEjercicio['CantidadDeIncisos']; $contador++)
						{
					 ?>
							<b><?=$obtenerListaResultados[$contador]['Inciso']?> &nbsp&nbsp</b>
							<b><?=$obtenerListaResultados[$contador]['DatoABuscar']?> = &nbsp</b>
							<input class = "caja" id="<?=$obtenerListaResultados[$contador]['Inciso']?>" type = "text">
							<b>&nbsp <?=$obtenerListaResultados[$contador]['Unidades']?></b>
							<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
					<?php
						}
					?>

					</div>
					<?php
					
					?>
			</div>

			<div class="boton">
				<button class="siguiente" id="comprobar" onclick="Comprobar()">Comprobar mi resultado</button>
				<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
				<button class="siguiente" id="solucionBtn" onclick="Versolucion()" style="display: block;">Ver solución</button>
			</div>
			
			<div class="informacion-pregunta" id ="segundoCuadro" style="display: none;">

				<div class = "solucion">
					<h3 style="margin-top: 0px;">Solución:</h3>
					<img style="height: 50vh;" class = "img" src="<?=IMAGES?><?=$datosEjercicio['ImagenSolucion']?>">

					<?php
						if($datosEjercicio['CantidadImgSolucion'] == 2)
						{
					?>
							<img style="height: 50vh;" class = "img" src="<?=IMAGES?>A<?=$datosEjercicio['ImagenSolucion']?>">
					<?php
						}
					?>

					<?php
						if($datosEjercicio['CantidadImgSolucion'] == 3)
						{
					?>
							<img style="height: 50vh;" class = "img" src="<?=IMAGES?>B<?=$datosEjercicio['ImagenSolucion']?>">
					<?php
						}
					?>
				</div>
			</div>

		</div>
	</div>

	<script>
		function Comprobar() {

            var resultadoA = parseFloat(<?=$ResultadoOperacion[0]?>)
			var valorCajaA = document.getElementById("a)").value

			if (valorCajaA.includes("x10^")) 
			{
				var elementosA = valorCajaA.split("x10^")
				var numeroA = elementosA[0]
				var potenciaA = elementosA[1]

				var resultadoUA = numeroA * (Math.pow(10, potenciaA))
				
				if(resultadoUA == resultadoA)
				{

					document.getElementById("a)").style.borderColor = "green"
				}
				else
				{
					document.getElementById("a)").style.borderColor = "red"

				}
			} 
			else
			{
				if(valorCajaA == resultadoA)
				{

					document.getElementById("a)").style.borderColor = "green"
				}
				else
				{
					document.getElementById("a)").style.borderColor = "red"

				}
			}

            var resultadoB = parseFloat(<?=$ResultadoOperacion[1]?>)
            var valorCajaB = document.getElementById("b)").value

            if (valorCajaB.includes("x10^")) 
            {
                var elementosB = valorCajaB.split("x10^")
                var numeroB = elementosB[0]
                var potenciaB= elementosB[1]

                var resultadoUB = numeroB * (Math.pow(10, potenciaB))
                
                if(resultadoUB == resultadoB)
                {

                    document.getElementById("b)").style.borderColor = "green"
                }
                else
                {
                    document.getElementById("b)").style.borderColor = "red"

                }
            } 
            else
            {
                if(valorCajaB == resultadoB)
                {

                    document.getElementById("b)").style.borderColor = "green"
                }
                else
                {
                    document.getElementById("b)").style.borderColor = "red"

                }
            }
		}
			


		function Versolucion() 
		{
			var div = document.getElementById('segundoCuadro')
			var btn = document.getElementById('solucionBtn');

			if (div.style.display === 'none') 
			{
				div.style.display = 'block'
				btn.textContent = 'Ocultar solución'
			} else {
				div.style.display = 'none'
				btn.textContent = 'Ver solución'
			}
		}
</script>
