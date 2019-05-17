<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?
include "config.php";
$texto = $_POST['texto'];
$video = $_POST['video'];

if($_GET['funcao'] == "gravar"){
	
	$sql = mysql_query("INSERT INTO videos (texto, video) value ('$texto','$video')");
	header('Location: index.php?pg=videos');
	
}

//*******************************************************

if($_GET['funcao'] == "alterar"){
	
	$id = $_GET['id'];
	
	$sql = mysql_query("UPDATE videos SET texto='$texto', video='$video' where id = '$id' ");
	header('Location: index.php?pg=videos');
	
}

//*******************************************************

if($_GET['funcao'] == "excluir"){

	$id = $_GET['id'];

	$sql = mysql_query("DELETE FROM videos WHERE id = '$id'");
	header('Location: index.php?pg=videos');
	

}

?>