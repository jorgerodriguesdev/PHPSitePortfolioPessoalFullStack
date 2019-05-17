<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?
include "config.php";

$texto = $_POST['texto'];

$sql = mysql_query("UPDATE servicos SET texto='$texto' where id = '1'");
header("Location: index.php?pg=servicos");


?>