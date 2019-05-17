<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?
include "config.php";
$nome = $_POST['nome'];
$mensagem = $_POST['mensagem'];
$id_comentario = $_GET['id_comentario'];


if($_GET['funcao'] == "alterar"){
	
	$sql = mysql_query("UPDATE comentarios SET nome = '$nome', mensagem = '$mensagem' where id_comentario = '$id_comentario'");
	header("Location: index.php?pg=comentarios");
	
}

if($_GET['funcao'] == "excluir"){

		$sql = mysql_query("DELETE FROM comentarios where id_comentario = '$id_comentario'");
		header("Location: index.php?pg=comentarios");

}
?>