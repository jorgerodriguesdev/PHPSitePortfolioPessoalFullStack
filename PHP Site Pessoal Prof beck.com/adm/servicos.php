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
include "config.php";
include "css.php";
?>
<body>
<div id="fundo_paginas">
	<div id="geral_paginas">
    	
<?
include "menu.php";
?>
        
		<div id="conteudo">
        <div id="titulo_pg">Servi&ccedil;os</div> 
        
        <?
        $sql = mysql_query("SELECT * FROM servicos where id = '1'");
		while($linha = mysql_fetch_array($sql)){
			$texto = $linha['texto'];
		}
		?>
        
            <form id="form1" name="form1" method="post" action="funcao_servicos.php">
              <table width="200" border="0" cellpadding="3" cellspacing="3">
                <tr>
                  <td width="59"><strong>Texto:</strong></td>
                  <td width="120"><label>
                    <textarea name="texto" id="texto" cols="50" rows="10"><? echo $texto ?></textarea>
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input type="submit" name="button" id="button" value="Enviar" /></td>
                </tr>
              </table>
          </form>
            </div><!-- conteudo -->
    <div style="clear:both"></div>     
    </div><!-- geral_paginas -->
   
</div><!-- fundo_paginas -- >
</body>
</html>
