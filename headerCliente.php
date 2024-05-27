<!DOCTYPE html>
<html lang="en">

    <head>
        <!--- basic page needs
        ================================================== -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FisicaXplora</title>

        <script>
            document.documentElement.classList.remove('no-js');
            document.documentElement.classList.add('js');
        </script>

        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="css/vendor.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/memorama.css">
		
		<!-- awesome icons
        ================================================== -->
		<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>

        <!-- favicons
        ================================================== -->
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">
    </head>


<body id="top">

    <!-- # site header ================================================== -->
    <header class="s-header">
        <div class="row s-header__inner width-sixteen-col">
            <div class="s-header__block">
                <div class="s-header__logo">
                    <a class="logo" href="?accion=">
                        <img src="images/Logo.png" alt="Homepage">
                    </a>
                </div>

                <a class="s-header__menu-toggle" href=""><span>Menu</span></a>
            </div> <!-- end s-header__block -->

            <nav class="s-header__nav">
                <ul class="s-header__menu-links">
				
				<!-- TEMAS ------------------------------------------------- -->
                    <li class="has-submenu">
                        <a href="?accion=Temas">Temas</a>
                        <ul class="submenu">
						
                            <li class="has-submenu">
                                <a href="?accion=LeyCoulomb">Ley de Coulomb</a>
                                <ul class="submenu">
                                    <li><a href="?accion=CampoElectrico">Campo Electrico</a></li>
                                    <li><a href="?accion=IntensidadCampo">Intensidad de Campo</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="?accion=CorrienteElectrica">Corriente Electrica</a>
                                <ul class="submenu">
                                    <li><a href="?accion=IntensidadCorriente">Intensidad de Corriente</a></li>
                                    <li><a href="?accion=LeyesCircuitos">Leyes y Circuitos</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="?accion=Optica">Optica</a>
                                <ul class="submenu">
                                    <li><a href="?accion=CaracteristicasLuz">Caracteristicas de la luz</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
					
					<!-- EJERCICIOS ------------------------------------------------- -->
					<li class="has-submenu">
                        <a href="?accion=Ejercicios">Ejercicios</a>
                        <ul class="submenu">
						
                            <li class="has-submenu">
                                <a href="?accion=LeyCoulomb">Ley de Coulomb</a>
                                <ul class="submenu">
                                    <li><a href="?accion=LCEjercicio1">Ejercicio 1</a></li>
									<li><a href="?accion=LCEjercicio2">Ejercicio 2</a></li>
									<li><a href="?accion=LCEjercicio3">Ejercicio 3</a></li>
									<li><a href="?accion=LCEjercicio4">Ejercicio 4</a></li>
									<li><a href="?accion=LCMas">Y más <i class="fa-solid fa-angle-right"></i> </i> </a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="?accion=CorrienteElectrica">Corriente Electrica</a>
                                <ul class="submenu">
                                    <li><a href="?accion=CEEjercicio1">Ejercicio 1</a></li>
									<li><a href="?accion=CEEjercicio2">Ejercicio 2</a></li>
									<li><a href="?accion=CEEjercicio3">Ejercicio 3</a></li>
									<li><a href="?accion=CEEjercicio4">Ejercicio 4</a></li>
									<li><a href="?accion=CEMas">Y más <i class="fa-solid fa-angle-right"></i> </i> </a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="?accion=Optica">Optica</a>
                                <ul class="submenu">
                                    <li><a href="?accion=OPEjercicio1">Ejercicio 1</a></li>
									<li><a href="?accion=OPEjercicio2">Ejercicio 2</a></li>
									<li><a href="?accion=OPEjercicio3">Ejercicio 3</a></li>
									<li><a href="?accion=OPEjercicio4">Ejercicio 4</a></li>
									<li><a href="?accion=OPMas">Y más <i class="fa-solid fa-angle-right"></i> </i> </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
					
					<!-- EJERCICIOS ------------------------------------------------- -->
					<li class="has-submenu">
                        <a href="?accion=Juegos">Juegos</a>
                        <ul class="submenu">
						
                            <li class="has-submenu">
                                <a href="?accion=LeyCoulomb">Ley de Coulomb</a>
                                <ul class="submenu">
										<li><a href="?accion=LCAhorcado">Ahorcado</a></li>
										<li><a href="?accion=LCTrivia">Trivia</a></li>
										<li><a href="?accion=Memorama&IDTema=1">Memorama</a></li>

									</ul>
                            </li>
                            <li class="has-submenu">
                                <a href="?accion=CorrienteElectrica">Corriente Electrica</a>
                                <ul class="submenu">
										<li><a href="?accion=CEAhorcado">Ahorcado</a></li>
										<li><a href="?accion=CETrivia">Trivia</a></li>
										<li><a href="?accion=Memorama&IDTema=2">Memorama</a></li>
									</ul>
                            </li>
                            <li class="has-submenu">
                                <a href="?accion=Optica">Optica</a>
                                <ul class="submenu">
										<li><a href="?accion=OPAhorcado">Ahorcado</a></li>
										<li><a href="?accion=OPTrivia">Trivia</a></li>
										<li><a href="?accion=Memorama&IDTema=3">Memorama</a></li>
									</ul>
                            </li>
                        </ul>
                    </li>
					
					
					
					
                    <li><a href="?accion=Nosotros">Nosotros</a></li>
                    <li><a href="?accion=ejemplo">Ejemplo</a></li>
                </ul> <!-- s-header__menu-links -->

                <div class="s-header__contact">
                    <a href="mailto:fisicaxplore@gmail.com" class="btn btn--primary s-header__contact-btn">Trabajemos juntos</a>                        
                </div> <!-- s-header__contact -->
            </nav> <!-- end s-header__nav -->
        </div> <!-- end s-header__inner -->
    </header> <!-- end s-header -->

    <div id="page" class="s-pagewrap ss-home">
</body>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		var menuItems = document.querySelectorAll('.s-header__menu-links > li.has-submenu');

		menuItems.forEach(function(menuItem) {
			var link = menuItem.querySelector('a');

			menuItem.addEventListener('mouseover', function() {
				link.style.color = 'var(--color-3)';
			});

			menuItem.addEventListener('mouseout', function() {
				link.style.color = '';
			});

			var submenus = menuItem.querySelectorAll('.submenu');

			submenus.forEach(function(submenu) {
				submenu.addEventListener('mouseover', function() {
					link.style.color = 'var(--color-3)';
				});

				submenu.addEventListener('mouseout', function() {
					link.style.color = '';
				});
			});
		});
	});

</script>
            