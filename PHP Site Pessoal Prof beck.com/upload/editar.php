<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?
$id = $_GET['id'];
?>
<form id="form1" name="form1" method="post" action="funcao.php?funcao=editar&id=<? echo $id ?>" enctype="multipart/form-data">
  <h1>Editar Foto</h1>
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
</body>
</html>
