<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UPLOAD DE IMAGEM</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="funcao.php?funcao=gravar" enctype="multipart/form-data">
  <h1>Cadastrar Foto</h1>
  <p>
    <label>
    <input type="radio" name="enviar_arquivo" onclick="document.form1.arquivo.disabled=false" id="enviar_arquivo" value="sim" />
    </label>
    <strong>SIM</strong> &nbsp;&nbsp;&nbsp;
    <label>
    <input type="radio" name="enviar_arquivo"  onclick="document.form1.arquivo.disabled=true" id="enviar_arquivo" value="nao" checked="checked" />
    </label>
    <strong>NÃO</strong></p>
  <label>
  <input name="arquivo" type="file" id="arquivo" size="50" disabled="disabled" />
  </label>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" />
  </p>
</form>
<hr />
<?
include "config.php";
$sql = mysql_query("SELECT * FROM upload");
while($linha = mysql_fetch_array($sql)){
	$id = $linha['id'];
	$foto = $linha['foto'];
?>
	<div style="width:80px; float:left; margin:20px;">
    <img src="fotos/<? echo $foto ?>" width="80" height="80" />
    <a href="editar.php?id=<? echo $id ?>">Alterar</a><br />
    <a href="funcao.php?funcao=excluir&id=<? echo $id ?>">Excluir</a>
    </div>
<?
}
?>
</body>
</html>
