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
        <div id="titulo_pg">Home</div> 
        
        <?
        $sql_sobre = mysql_query("SELECT * FROM sobre where id = '1'");
		while($linha = mysql_fetch_array($sql_sobre)){
			$texto = $linha['texto'];
			$foto = $linha['foto'];
		}
		?>
        <img src="fotos/<? echo $foto ?>" style="float:left; padding-right:5px;" width="120" />
        <?
        $texto2 = substr("$texto",0,900);
		?>
        <? echo $texto2 ?>
        <br />
        <p align="right" style="padding-right:40px;"><a href="?pg=sobre" style="color:#FFFFFF">>> saiba mais</a></p>
       
		<h2>&Uacute;ltimo projeto realizado</h2><br />

<?
$sql_proj = mysql_query("SELECT * FROM portfolio order by id");
while($linha2 = mysql_fetch_array($sql_proj)){
	$foto = $linha2['foto'];
	$texto = $linha2['texto'];
}
?>
 		<?
        $texto2 = substr("$texto",0,300);
		?>
<? echo $texto2 ?>
<br />
<br />
<img src="fotos/<? echo $foto ?>" />
<br />
<br />
<p align="right" style="padding-right:40px;"><a href="?pg=portfolio" style="color:#FFFFFF">>> saiba mais</a></p>
<br />

        </div><!-- conteudo -->
    <div style="clear:both"></div>     
    </div><!-- geral_paginas -->
   
</div><!-- fundo_paginas -- >
</body>
</html>
