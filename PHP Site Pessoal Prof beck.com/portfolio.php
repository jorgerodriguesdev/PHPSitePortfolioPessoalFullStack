<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

<link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>
<?
include "css.php";
include "config.php";
?>
<body>
<div id="fundo_paginas">
	<div id="geral_paginas">
    	
<?
include "menu.php";
?>
        
		<div id="conteudo">
         <div id="titulo_pg">Portfolio</div> 
         
         <?
         if($_GET['funcao'] != "detalhes"){
		 
		 $sql = mysql_query("SELECT * FROM portfolio");
		 while($linha = mysql_fetch_array($sql)){
		 $foto = $linha['foto'];
		 $id = $linha['id'];
		 ?>
         
         <div id="img_port">
         <img src="fotos/<? echo $foto ?>" /><br />
         <a href="?pg=portfolio&funcao=detalhes&id=<? echo $id ?>" style="color:#FFFFFF">[+ Detalhes]</a>
         </div>
         
       <?
       }
	   ?>
         <br /><br />
         <?
         }
		 ?>

<?
if($_GET['funcao'] == "detalhes"){
$id = $_GET['id'];
$sql = mysql_query("SELECT * FROM portfolio where id = '$id'");
		 while($linha = mysql_fetch_array($sql)){
		 $texto = $linha['texto'];
		 $foto = $linha['foto'];
		 $link = $linha['link'];
}
?>
<strong>Descri&ccedil;&atilde;o:</strong><br />
<? echo $texto ?>
<br />
<br />
<img src="fotos/<? echo $foto ?>" />
<br />
<br />
<a href="<? echo $link ?>" target="_blank" style="color:#FFFFFF"><strong><? echo $link ?></strong></a>
<br />
<br />

<span style="font-size:18px; font-weight:bold">Coment&aacute;rios</span>
<br />
<br />
<?
$sql_coment = mysql_query("SELECT * FROM comentarios where id_projeto = '$id'");
while($linha = mysql_fetch_array($sql_coment)){
	$nome = $linha['nome'];
	$mensagem = $linha['mensagem'];

?>

<div id="comentarios">
<?
echo "<strong>$nome</strong><br>";
echo $mensagem
?>
</div>

<?
}
?>

<br />
<br />
<span style="font-size:18px; font-weight:bold">
Deixe sua mensagem
</span><br />
<br />
<form id="form1" name="form1" method="post" action="funcao_comentarios.php?id_projeto=<? echo $id ?>">
  <table width="200" border="0" cellpadding="3" cellspacing="3">
    <tr>
      <td width="99"><strong>Nome:</strong></td>
      <td width="91"><span id="sprytextfield1">
        <label>
        <input name="nome" type="text" id="nome" size="40" />
        </label>
        <span class="textfieldRequiredMsg">Campo Obrigatório.</span></span></td>
    </tr>
    <tr>
      <td><strong>Mensagem:</strong></td>
      <td><span id="sprytextarea2">
      <label><span id="sprytextarea1">
      <textarea name="mensagem" id="mensagem" cols="45" rows="5"></textarea>
      <span id="countsprytextarea1">&nbsp;</span> <span class="textareaRequiredMsg">Campo Obrigatório.</span><span class="textareaMaxCharsMsg">Máximo de caracteres 255.</span></span></label>
      </span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Enviar" /></td>
    </tr>
  </table>
</form>
<br />
<br />
<center><a href="javascript:history.back();" style="color:#FFFFFF"><strong>VOLTAR</strong></a></center>
<br />
<br />


<?	
}
?>
        </div>
		<!-- conteudo -->
    <div style="clear:both"></div>     
    </div><!-- geral_paginas -->
   
</div><!-- fundo_paginas -->
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {counterId:"countsprytextarea1", maxChars:255, counterType:"chars_count"});
//-->
</script>
</body>
</html>
