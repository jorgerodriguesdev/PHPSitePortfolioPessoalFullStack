<?
include "config.php";
$nome = $_POST['nome'];
$mensagem = $_POST['mensagem'];
$id_projeto = $_GET['id_projeto'];

	$sql = mysql_query("INSERT INTO comentarios (id_projeto, nome, mensagem) value ('$id_projeto', '$nome', '$mensagem')");
	header('Location: index.php?pg=portfolio');

?>