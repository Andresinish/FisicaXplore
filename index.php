<?php

include('configuracionCliente.php');
include("conexionCliente.php");

$accion = (isset($_GET['accion']))?$_GET['accion']:null;
			
include(HEADERCLIENTE);

switch($accion)
{
	
	/*TEMAS -----------------------------*/
	
    case 'Temas':
		include("Temas.php");
		break;
		
		case 'LeyCoulomb':
			include("LeyCoulomb.php");
			break;
			
			case 'CampoElectrico':
				include("CampoElectrico.php");
				break;
				
			case 'IntensidadCampo':
				include("IntensidadCampo.php");
				break;
			
			
		case 'CorrienteElectrica':
			include("CorrienteElectrica.php");
			break;
			
			case 'IntensidadCorriente':
				include("IntensidadCorriente.php");
				break;
				
			case 'LeyesCircuitos':
				include("LeyesCircuitos.php");
				break;
				
			
		case 'Optica':
			include("Temas.php");
			break;
			
			case 'CaracteristicasLuz':
				include("CaracteristicasLuz.php");
				break;
		
    /*EJERCICIOS -----------------------------*/
    case 'Ejercicios':
		include("Ejercicios.php");
		break;
		
		/*Ley de Coulomb*/
		case 'LCEjercicio1':
			include("LCEjercicio1.php");
			break;
			
		case 'LCEjercicio2':
			include("LCEjercicio2.php");
			break;
			
		case 'LCEjercicio3':
			include("LCEjercicio3.php");
			break;
			
		case 'LCEjercicio4':
			include("LCEjercicio4.php");
			break;
			
		case 'LCEjercicio5':
			include("LCEjercicio5.php");
			break;
			
		case 'LCMas':
			include("LCMas.php");
			break;
			
		/*Corriente eléctrica*/
		case 'CEEjercicio1':
			include("CEEjercicio1.php");
			break;
			
		case 'CEEjercicio2':
			include("CEEjercicio2.php");
			break;
			
		case 'LCEjercicio3':
			include("LCEjercicio3.php");
			break;
			
		case 'CEEjercicio4':
			include("CEEjercicio4.php");
			break;
			
		case 'CEEjercicio5':
			include("CEEjercicio5.php");
			break;
			
		case 'CEMas':
			include("CEMas.php");
			break;
		
		/*Optica*/
		case 'OPEjercicio1':
			include("CEEjercicio1.php");
			break;
			
		case 'OPEjercicio2':
			include("CEEjercicio2.php");
			break;
			
		case 'OPEjercicio3':
			include("LCEjercicio3.php");
			break;
			
		case 'OPEjercicio4':
			include("CEEjercicio4.php");
			break;
			
		case 'OPEjercicio5':
			include("CEEjercicio5.php");
			break;
			
		case 'OPMas':
			include("CEMas.php");
			break;
			
	/*JUEGOS -----------------------------*/
    case 'Juegos':
		include("Juegos.php");
		break;
		
		/*Ley de Coulomb*/
		case 'LCAhorcado':
			include("ahorcado.php");
			break;
			
		case 'LCTrivia':
			include("LCTrivia.php");
			break;
			
		case 'Memorama':
			include("Memorama/memorama.php");
			break;
		
		/*Corriente Electrica*/
		case 'CEAhorcado':
			include("CEAhorcado.php");
			break;
			
		case 'CETrivia':
			include("CETrivia.php");
			break;
			
		/*Optica*/
		case 'OPAhorcado':
			include("OPAhorcado.php");
			break;
			
		case 'OPTrivia':
			include("OPTrivia.php");
			break;
			
		
			
			

	case 'ejemplo':
		include("ejemplo.php");
		break;
	
	default:
		include("homeCliente.php");
	break;
}
include(FOOTERCLIENTE);
?>