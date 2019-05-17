<?
session_start();

include "config.php";

$login_usuario = $_SESSION["login_usuario"];

$sql = mysql_query("SELECT * FROM adm WHERE login = '$login_usuario'");
while($linha = mysql_fetch_array($sql)){
	$nome = $linha['nome'];
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Portfolio - Curso PHP Jorge Rodrigues - Aluno Prof: Fernando Noronha - beck.com </title>
</head>
<?
include "css.php";
?>
<body>

<div id="fundo_topo">
	<div id="topo">
    	
        <div id="titulo_topo">Portfolio</div><!-- titulo_topo -->
        
        <div id="busca">
          <? echo $nome ?> | <a href="logout.php" style="color:#FFFFFF">Sair</a>
        </div>
        <!-- busca -->
        
    </div><!-- topo -->
</div><!-- fundo_topo -->

</body>
</html>
