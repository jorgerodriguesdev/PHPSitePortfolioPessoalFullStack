<?
session_start();

unset($_SESSION["login_usuario"]);
unset($_SESSION["senha_usuario"]);

header("Location: login.php");


?>