<?php

include('configuracionCliente.php');
include("conexionCliente.php");

$accion = (isset($_GET['accion']))?$_GET['accion']:null;
			
include(HEADERCLIENTE);

switch($accion)
{
	
    case 'about':
		include("about.php");
		break;
    
    case 'services':
		include("services.php");
		break;

    case 'blog':
		include("blog.php");
		break;

    case 'contact':
        include("contact.php");
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