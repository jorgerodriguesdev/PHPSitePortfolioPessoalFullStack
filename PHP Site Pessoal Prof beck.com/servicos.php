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
        
         <?
        $sql = mysql_query("SELECT * FROM servicos where id = '1'");
		while($linha = mysql_fetch_array($sql)){
			$texto = $linha['texto'];
		}
		?>
        
		<div id="conteudo">
        <div id="titulo_pg">Servi&ccedil;os</div> 
        <? echo $texto ?>
        
        </div>
	  <!-- conteudo -->
    <div style="clear:both"></div>     
    </div><!-- geral_paginas -->
   
</div><!-- fundo_paginas -- >
</body>
</html>
