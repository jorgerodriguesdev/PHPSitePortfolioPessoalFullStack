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
?>
<body>
<div id="fundo_paginas">
	<div id="geral_paginas">
    	
<?
include "menu.php";
?>
        
		<div id="conteudo">
         <div id="titulo_pg">Contato</div> 
    
		<form id="form1" name="form1" method="post" action="">
		  <table width="200" border="0" cellpadding="3" cellspacing="3">
            <tr>
              <td width="87"><strong>Nome:</strong></td>
    <td width="92"><span id="sprytextfield1">
                <label>
                <input name="nome" type="text" id="nome" size="40" />
                </label>
              <span class="textfieldRequiredMsg">Campo obrigatório</span></span></td>
            </tr>
            <tr>
              <td><strong>E-mail:</strong></td>
        <td><span id="sprytextfield2">
        <label>
        <input name="email" type="text" id="email" size="40" />
        </label>
        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
            </tr>
            <tr>
              <td><strong>Cidade:</strong></td>
          <td><span id="sprytextfield3">
                <label>
                <input name="cidade" type="text" id="cidade" size="40" />
                </label>
              <span class="textfieldRequiredMsg">A value is required.</span></span></td>
            </tr>
            <tr>
              <td><strong>Mensagem:</strong></td>
              <td><span id="sprytextarea1">
                <label>
                <textarea name="mensagem" id="mensagem" cols="45" rows="5"></textarea>
                </label>
              <span class="textareaRequiredMsg">A value is required.</span></span></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="submit" name="button" id="button" value="Enviar" /></td>
            </tr>
          </table>
          </form>
        
        </div>
		<!-- conteudo -->
    <div style="clear:both"></div>     
    </div><!-- geral_paginas -->
   
</div><!-- fundo_paginas -- >
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email", {useCharacterMasking:true});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
</body>
</html>
