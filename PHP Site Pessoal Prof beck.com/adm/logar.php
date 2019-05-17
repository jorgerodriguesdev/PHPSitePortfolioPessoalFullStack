<?
$login = $_POST['login'];
$senha = $_POST['senha'];

include "config.php";

$sql = mysql_query("SELECT * FROM adm WHERE login = '$login'");
$cont = mysql_num_rows($sql);
while($linha = mysql_fetch_array($sql)){
	$senha_db = $linha['senha'];
}

if($cont == 0){

	echo "
	<META HTTP-EQUIV=REFRESH CONTENT='0; URL=login.php'>
	<script type=\"text/javascript\">
	alert(\"O nome de usuario não corresponde.\");
	</script>";
	
}else{

	if($senha_db != $senha){//confere senha
	
	echo "
	<META HTTP-EQUIV=REFRESH CONTENT='0; URL=login.php'>
	<script type=\"text/javascript\">
	alert(\"A senha não corresponde.\");
	</script>";
	
}else{
	session_start();
	$_SESSION['login_usuario'] = $login;
	$_SESSION['senha_usuario'] = $senha;
	
	header('Location: index.php');
	}
}
mysql_close($db);
?>