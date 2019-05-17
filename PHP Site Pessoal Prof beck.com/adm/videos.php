<?
include ("verifica.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="../../Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
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
        <div id="titulo_pg">V&iacute;deos</div> 
       	
     <?
     if($_GET['funcao'] != "alterar"){
	 ?>
        <form id="form1" name="form1" method="post" action="funcao_videos.php?funcao=gravar">
          <table width="200" border="0" cellpadding="3" cellspacing="3">
            <tr>
              <td><strong>Texto:</strong></td>
              <td><label>
                <textarea name="texto" id="texto" cols="45" rows="5"></textarea>
              </label></td>
            </tr>
            <tr>
              <td><strong>Vídeos:</strong></td>
              <td><label>
                <input name="video" type="text" id="video" size="60" />
              </label></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><label>
                <input type="submit" name="button" id="button" value="Cadastrar" />
              </label></td>
            </tr>
          </table>
          </form>
          <hr />
          
          <h2>Alterar / Excluir</h2>
          
          <?
          $sql = mysql_query("SELECT * FROM videos");
		  while($linha = mysql_fetch_array($sql)){
		  	$texto = $linha['texto'];
			$video = $linha['video'];
			$id = $linha['id'];
		  ?>
          <div style="width:200px; float:left; padding:30px; text-align:center">
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="200" height="200">
            <param name="movie" value="<? echo $video ?>" />
            <param name="quality" value="high" />
            <embed src="<? echo $video ?>" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="200" height="200"></embed>
          </object>
		</noscript>
        <a href="index.php?pg=videos&funcao=alterar&id=<? echo $id ?>" style="color:#FFFFFF"><strong>Alterar</strong></a><br />
        <a href="funcao_videos.php?funcao=excluir&id=<? echo $id ?>" style="color:#FFFFFF"><strong>Excluir</strong></a>
        </div>
        <?
        }
		?>
      <?
      }//fim - if($_GET['funcao'] != "alterar"){
	  ?>
      
      <?
      if($_GET['funcao'] == "alterar"){
	   
	   $id = $_GET['id'];
	   
          $sql = mysql_query("SELECT * FROM videos where id = '$id'");
		  while($linha = mysql_fetch_array($sql)){
		  	$texto = $linha['texto'];
			$video = $linha['video'];
		}
	  
	  ?>
       <form id="form1" name="form1" method="post" action="funcao_videos.php?funcao=alterar&id=<? echo $id ?>">
          <table width="200" border="0" cellpadding="3" cellspacing="3">
            <tr>
              <td><strong>Texto:</strong></td>
              <td><label>
                <textarea name="texto" id="texto" cols="45" rows="5"><? echo $texto ?></textarea>
              </label></td>
            </tr>
            <tr>
              <td><strong>Vídeos:</strong></td>
              <td><label>
                <input name="video" type="text" id="video" size="60" value="<? echo $video ?>" />
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
          <br />
<br />
<center>		<a href="javascript:history.back();" style="color:#FFFFFF"><strong>VOLTAR</strong></a></center>
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
