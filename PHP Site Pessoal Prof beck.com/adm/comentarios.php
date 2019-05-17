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
        <div id="titulo_pg">Coment&aacute;rios</div> 
        <?
        if($_GET['funcao'] == "alterar"){
		 $id_comentario = $_GET['id_comentario'];
          $sql = mysql_query("SELECT * FROM comentarios where id_comentario = '$id_comentario'");
		  while($linha = mysql_fetch_array($sql)){
		  	$nome = $linha['nome'];
			$mensagem = $linha['mensagem'];
			$id_comentario = $linha['id_comentario'];
		  }
		  
		?>
        <form id="form1" name="form1" method="post" action="funcao_comentarios.php?funcao=alterar&id_comentario=<? echo $id_comentario ?>">
          <table width="200" border="0" cellpadding="3" cellspacing="3">
            <tr>
              <td width="91">Nome:</td>
              <td width="88"><label>
                <input name="nome" type="text" id="nome" size="40" value="<? echo $nome ?>" />
              </label></td>
            </tr>
            <tr>
              <td>Mensagem:</td>
              <td><label>
                <textarea name="mensagem" id="mensagem" cols="45" rows="5"><? echo $mensagem ?></textarea>
              </label></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><label>
                <input type="submit" name="button" id="button" value="Alterar" />
              </label></td>
            </tr>
          </table>
          </form>
          <?
          }
		  ?>
          <hr />
          
          <h2>Coment&aacute;rios</h2>
          <br />
          <?
          $sql = mysql_query("SELECT * FROM comentarios order by nome");
		  while($linha = mysql_fetch_array($sql)){
		  	$nome = $linha['nome'];
			$id_comentario = $linha['id_comentario'];
		  ?>

			<a href="index.php?pg=comentarios&funcao=alterar&id_comentario=<? echo $id_comentario ?>" style="color:#FFFFFF"><strong>Alterar</strong></a> | 
            <a href="funcao_comentarios.php?funcao=excluir&id_comentario=<? echo $id_comentario ?>" style="color:#FFFFFF"><strong>Excluir</strong></a> - <? echo $nome ?>
          <br /><br />
          <?
          }
		  ?>
        </div><!-- conteudo -->
    <div style="clear:both"></div>     
    </div><!-- geral_paginas -->
   
</div><!-- fundo_paginas -- >
</body>
</html>
