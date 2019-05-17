<?
include ("verifica.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
         if($_GET['funcao'] != "alterar"){
		 ?>
         
          <form id="form1" name="form1" method="post" action="funcao_portfolio.php?funcao=gravar" enctype="multipart/form-data">
      		  <label></label>
                    <table width="100%" border="0" cellpadding="3" cellspacing="3">
                      <tr>
                        <td width="24%"><strong>Cadastrar Imagem:</strong></td>
                        <td width="76%">
                        <input type="radio" name="enviar_imagem" id="enviar_imagem" onclick="document.form1.arquivo.disabled=false" value="sim" />
                          <strong>SIM &nbsp;&nbsp;&nbsp;</strong>
                        <input type="radio" name="enviar_imagem" id="enviar_imagem"  onclick="document.form1.arquivo.disabled=true"  value="nao" checked="checked" />
                          <strong>NÃO</strong>                        </td>
                      </tr>
                      <tr>
                        <td><strong>Imagem:</strong></td>
                        <td><label>
                          <input name="arquivo" type="file" id="arquivo" size="40" disabled="disabled" />
                        </label></td>
                      </tr>
                      <tr>
                        <td><strong>Texto:</strong></td>
                        <td><label>
                        <textarea name="texto" id="texto" cols="50" rows="5"></textarea>
                        </label></td>
                      </tr>
                       <tr>
                        <td><strong>Link:</strong></td>
                        <td><label>
                        <input name="link" type="text" id="link" size="40" />
                        </label></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="button" id="button" value="Cadastrar" /></td>
                      </tr>
                    </table>
   		  </form>
       <hr />
       
       <h2>Alterar / Excluir</h2>
       
       <?
       $sql = mysql_query("SELECT * FROM portfolio");
	   while($linha = mysql_fetch_array($sql)){
	   	$foto = $linha['foto'];
		$id = $linha['id'];
	   ?>
       <div style="margin-bottom:30px;">
       <img src="../fotos/<? echo $foto ?>" />
       <a href="index.php?pg=portfolio&funcao=alterar&id=<? echo $id ?>" style="color:#FFFFFF"><strong>Alterar</strong></a> | 
       <a href="funcao_portfolio.php?funcao=excluir&id=<? echo $id ?>" style="color:#FFFFFF"><strong>Excluir</strong></a>
       </div>
       <?
       }
	   }else{
	   ?>
       <?
       $id = $_GET['id'];
	
       $sql = mysql_query("SELECT * FROM portfolio where id = '$id'");
	   while($linha = mysql_fetch_array($sql)){
	   	$texto = $linha['texto'];
		$link = $linha['link'];
		$id = $linha['id'];
		}
	   ?>
       <form id="form1" name="form1" method="post" action="funcao_portfolio.php?funcao=alterar&id=<? echo $id ?>" enctype="multipart/form-data">
      		  <label></label>
                    <table width="100%" border="0" cellpadding="3" cellspacing="3">
                      <tr>
                        <td width="24%"><strong>Cadastrar Imagem:</strong></td>
                        <td width="76%">
                        <input type="radio" name="enviar_imagem" id="enviar_imagem" onclick="document.form1.arquivo.disabled=false" value="sim" />
                          <strong>SIM &nbsp;&nbsp;&nbsp;</strong>
                        <input type="radio" name="enviar_imagem" id="enviar_imagem"  onclick="document.form1.arquivo.disabled=true"  value="nao" checked="checked" />
                          <strong>NÃO</strong>                        </td>
                      </tr>
                      <tr>
                        <td><strong>Imagem:</strong></td>
                        <td><label>
                          <input name="arquivo" type="file" id="arquivo" size="40" disabled="disabled" />
                        </label></td>
                      </tr>
                      <tr>
                        <td><strong>Texto:</strong></td>
                        <td><label>
                        <textarea name="texto" id="texto" cols="50" rows="5"><? echo $texto ?></textarea>
                        </label></td>
                      </tr>
                       <tr>
                        <td><strong>Link:</strong></td>
                        <td><label>
                        <input name="link" type="text" id="link" size="40" value="<? echo $link ?>" />
                        </label></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="button" id="button" value="Alterar" /></td>
                      </tr>
                    </table>
   		  </form>
       <br />
		<br />
					<a href="javascript:history.back();" style="color:#FFFFFF"><strong>VOLTAR</strong></a>
<br />
		<br />

       <?
       }
	   ?>
        </div><!-- conteudo -->
    <div style="clear:both"></div>     
    </div><!-- geral_paginas -->
   
</div><!-- fundo_paginas -- >
</body>
</html>
