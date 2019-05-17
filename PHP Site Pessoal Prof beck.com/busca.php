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
        <div id="titulo_pg">Busca</div> 
        
        <?
		$pesquisar = $_REQUEST['pesquisar'];
        $sql_sobre = mysql_query("SELECT * FROM sobre where texto like'%$pesquisar%'");
		while($linha = mysql_fetch_array($sql_sobre)){
			$texto = $linha['texto'];
			$texto2 = substr("$texto",0,200);
		?>
        <a href="?pg=sobre" style="color:#FFFFFF; text-decoration:none">
        <div style="padding-top:10px; margin-bottom:10px; padding-bottom:10px; border-bottom:1px dashed #CCCCCC">
        <span style="color:#CCCCCC"><strong>Sobre</strong></span><br />
        <? echo $texto2 ?>
        </div>        
        </a>
		<?
		}
		?>
        
        
         <?
		$pesquisar = $_REQUEST['pesquisar'];
        $sql_sobre = mysql_query("SELECT * FROM servicos where texto like'%$pesquisar%'");
		while($linha = mysql_fetch_array($sql_sobre)){
			$texto = $linha['texto'];
			$texto2 = substr("$texto",0,200);
		?>
        <a href="?pg=servicos" style="color:#FFFFFF; text-decoration:none">
        <div style="padding-top:10px; margin-bottom:10px; padding-bottom:10px; border-bottom:1px dashed #CCCCCC">
        <span style="color:#CCCCCC"><strong>Servi&ccedil;os</strong></span><br />
        <? echo $texto2 ?>
        </div>        
        </a>
		<?
		}
		?>
        
        
           <?
		$pesquisar = $_REQUEST['pesquisar'];
        $sql_sobre = mysql_query("SELECT * FROM portfolio where texto like'%$pesquisar%'");
		while($linha = mysql_fetch_array($sql_sobre)){
			$texto = $linha['texto'];
			$texto2 = substr("$texto",0,200);
		?>
        <a href="?pg=portfolio" style="color:#FFFFFF; text-decoration:none">
        <div style="padding-top:10px; margin-bottom:10px; padding-bottom:10px; border-bottom:1px dashed #CCCCCC">
        <span style="color:#CCCCCC"><strong>Portfolio</strong></span><br />
        <? echo $texto2 ?>
        </div>        
        </a>
		<?
		}
		?>
        
        
        
              <?
		$pesquisar = $_REQUEST['pesquisar'];
        $sql_sobre = mysql_query("SELECT * FROM videos where texto like'%$pesquisar%'");
		while($linha = mysql_fetch_array($sql_sobre)){
			$texto = $linha['texto'];
			$texto2 = substr("$texto",0,200);
		?>
        <a href="?pg=videos" style="color:#FFFFFF; text-decoration:none">
        <div style="padding-top:10px; margin-bottom:10px; padding-bottom:10px; border-bottom:1px dashed #CCCCCC">
        <span style="color:#CCCCCC"><strong>V&iacute;deos</strong></span><br />
        <? echo $texto2 ?>
        </div>        
        </a>
		<?
		}
		?>
        
        
        
        
    
        </div><!-- conteudo -->
    <div style="clear:both"></div>     
    </div><!-- geral_paginas -->
   
</div><!-- fundo_paginas -- >
</body>
</html>
