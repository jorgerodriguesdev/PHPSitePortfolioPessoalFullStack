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
        <div id="titulo_pg">V&iacute;deos</div> 
        
        <?
        if($_GET['funcao'] != "detalhes"){
		
		$sql = mysql_query("SELECT * FROM videos");
		while($linha = mysql_fetch_array($sql)){
			$video = $linha['video'];
			$id = $linha['id'];
		?>
        <div id="videos">
        <object width="200" height="150"><param name="movie" value="<? echo $video ?>"></param><param name="allowFullScreen" value="true"></param><embed src="<? echo $video ?>" type="application/x-shockwave-flash" allowfullscreen="true" width="200" height="150"></embed></object>
      
      <a href="?pg=videos&funcao=detalhes&id=<? echo $id ?>" style="color:#FFFFFF"><strong>ampliar</strong></a>
      
       </div>
       <?
       }
	   ?>
       
        <?
        }
		?>
      
      <?
      if($_GET['funcao'] == "detalhes"){
	  
	  $id = $_GET['id'];
	  
	 $sql = mysql_query("SELECT * FROM videos where id = '$id'");
		while($linha = mysql_fetch_array($sql)){
			$texto = $linha['texto'];
			$video = $linha['video'];
			$id = $linha['id'];
			}
	 
	  ?>
     <? echo $texto ?>
      
      <br />
<br />
<center>
 <object width="425" height="344"><param name="movie" value="<? echo $video ?>"></param><param name="allowFullScreen" value="true"></param><embed src="<? echo $video ?>" type="application/x-shockwave-flash" allowfullscreen="true" width="425" height="344"></embed></object>
 </center>
 <br />
<br />

<center><a href="javascript:history.back();" style=" color:#FFFFFF"><strong>VOLTAR</strong></a></center>
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
