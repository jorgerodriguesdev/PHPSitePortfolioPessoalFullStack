<?
$nome = $_POST['nome'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$mensagem = $_POST['mensagem'];

$destinatario = "fernando@becck.com";

$msg .= "Nome: $nome<br>";
$msg .= "Email: $email<br>";
$msg .= "Cidade: $cidade<br>";
$msg .= "Mensagem: $mensagem<br>";

mail("$destinatario","Formulario de Contato - Portfolio","$msg","from: $email");
header('Location: index.php?pg=contato');

?>
