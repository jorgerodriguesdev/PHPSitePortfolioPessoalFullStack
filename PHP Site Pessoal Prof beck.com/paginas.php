<?
switch ($_GET['pg']){

	case 'sobre':
	include "sobre.php";
	break;
	
	case 'busca':
	include "busca.php";
	break;

	case 'contato':
	include "contato.php";
	break;
	
	case 'servicos':
	include "servicos.php";
	break;
	
	case 'portfolio':
	include "portfolio.php";
	break;
	
	case 'videos':
	include "videos.php";
	break;
	
	case 'contato':
	include "contato.php";
	break;
	
	default:
	include ("home.php");
	break;

}
?>