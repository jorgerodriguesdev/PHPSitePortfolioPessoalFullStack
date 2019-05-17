<?
session_start();

include "config.php";

if(isset($_SESSION["login_usuario"]) AND isset($_SESSION['senha_usuario'])){

	$login_usuario = $_SESSION["login_usuario"];
	$senha_usuario = $_SESSION["senha_usuario"];
	
$sql = mysql_query("SELECT * FROM adm WHERE login = '$login_usuario'");
$cont = mysql_num_rows($sql);
while($linha = mysql_fetch_array($sql)){
	$senha_db = $linha['senha'];
}

if($cont == 0){

	unset($_SESSION["login_usuario"]);
	unset($_SESSION["senha_usuario"]);

	echo "
	<META HTTP-EQUIV=REFRESH CONTENT='0; URL=login.php'>
	<script type=\"text/javascript\">
	alert(\"O nome de usuario não corresponde.\");
	</script>";
	
}

if($senha_db != $senha_usuario){//confere senha
	
	unset($_SESSION["login_usuario"]);
	unset($_SESSION["senha_usuario"]);
	
	echo "
	<META HTTP-EQUIV=REFRESH CONTENT='0; URL=login.php'>
	<script type=\"text/javascript\">
	alert(\"A senha não corresponde.\");
	</script>";
	
}
	
}else{
	
	echo "
	<META HTTP-EQUIV=REFRESH CONTENT='0; URL=login.php'>
	<script type=\"text/javascript\">
	alert(\"O usuario e senha não correspondem.\");
	</script>";
	
}

?>