<?
$nome = $_POST['nome'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$mensagem = $_POST['mensagem'];

$destinatario = "fernando@becck.com";
$formato = "\nContent-type: text/html\n";

$msg .= "Nome: $nome<br>";
$msg .= "Email: $email<br>";
$msg .= "Cidade: $cidade<br>";
$msg .= "Mensagem: $mensagem<br>";

mail("$destinatario","Formulario de Contato - Portfolio","$msg","from: ".$email.$formato);

echo "
<script language='javascript'>
window.alert('Mensagem enviada com sucesso.');
window.location = 'index.php?pg=contato';
</script>
";

?>
