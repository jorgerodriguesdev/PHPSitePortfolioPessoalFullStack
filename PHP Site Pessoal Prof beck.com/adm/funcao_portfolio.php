<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?
include "config.php";
$texto = $_POST['texto'];
$link = $_POST['link'];
$enviar_imagem = $_POST['enviar_imagem'];

if($_GET['funcao'] == "gravar" && $enviar_imagem == "sim" && is_file($_FILES['arquivo']['tmp_name'])){
	
	$foto = $_FILES['arquivo']['name'];
	
	$foto = str_replace(" ", "_", $foto);
	$foto = str_replace("ã", "a", $foto);
	$foto = str_replace("á", "a", $foto);
	$foto = str_replace("à", "a", $foto);
	$foto = str_replace("é", "e", $foto);
	$foto = str_replace("ê", "e", $foto);
	$foto = str_replace("è", "e", $foto);
	$foto = str_replace("í", "i", $foto);
	$foto = str_replace("ì", "i", $foto);
	$foto = str_replace("ó", "o", $foto);
	$foto = str_replace("õ", "o", $foto);
	$foto = str_replace("ç", "c", $foto);

	$foto = strtolower($foto);
	
	if(!eregi("^image\/(jpeg|png|gif|pjpeg|jpg)$", $_FILES['arquivo']['type'])){
		
		echo "
		<META HTTP-EQUIV=REFRESH CONTENT='0; URL=index.php?pg=portfolio'>
		<script type=\"text/javascript\">
		alert(\"Formato inválido\");
		</script>
		";
		
	}else{
		
		if(file_exists("../fotos/$foto")){
			$a = 1;
			while(file_exists("../fotos/[$a]$foto")){
				$a++;
			}
			
			$foto = "[".$a."]".$foto;
			
		}
		
		if(!move_uploaded_file($_FILES['arquivo']['tmp_name'], "../fotos/".$foto)){
			
			echo "
		<META HTTP-EQUIV=REFRESH CONTENT='0; URL=index.php?pg=portfolio'>
		<script type=\"text/javascript\">
		alert(\"Erro ao enviar o arquivo.\");
		</script>
		";
			
		}
	
	}
	
		$sql = mysql_query("INSERT INTO portfolio (texto,foto,link) value ('$texto','$foto','$link')");
		header("Location: index.php?pg=portfolio");
	
}

if($_GET['funcao'] == "gravar" && $enviar_imagem != "sim" && !is_file($_FILES['arquivo']['tmp_name'])){
	
	$sql = mysql_query("INSERT INTO portfolio (texto, link) value ('$texto','$link')");
		header("Location: index.php?pg=portfolio");
	
}

//*********************************************************************

if($_GET['funcao'] == "alterar" && $enviar_imagem == "sim" && is_file($_FILES['arquivo']['tmp_name'])){

	$id = $_GET['id'];
	$sql_alt = mysql_query("SELECT * FROM portfolio WHERE id = '$id'");
	while($linha = mysql_fetch_array($sql_alt)){
		$foto_db = $linha['foto'];
	}
	
		unlink("../fotos/$foto_db");
	

	
	$foto = $_FILES['arquivo']['name'];
	
	$foto = str_replace(" ", "_", $foto);
	$foto = str_replace("ã", "a", $foto);
	$foto = str_replace("á", "a", $foto);
	$foto = str_replace("à", "a", $foto);
	$foto = str_replace("é", "e", $foto);
	$foto = str_replace("ê", "e", $foto);
	$foto = str_replace("è", "e", $foto);
	$foto = str_replace("í", "i", $foto);
	$foto = str_replace("ì", "i", $foto);
	$foto = str_replace("ó", "o", $foto);
	$foto = str_replace("õ", "o", $foto);
	$foto = str_replace("ç", "c", $foto);

	$foto = strtolower($foto);
	
	if(!eregi("^image\/(jpeg|png|gif|pjpeg|jpg)$", $_FILES['arquivo']['type'])){
		
		echo "
		<META HTTP-EQUIV=REFRESH CONTENT='0; URL=index.php?pg=portfolio'>
		<script type=\"text/javascript\">
		alert(\"Formato inválido\");
		</script>
		";
		
	}else{
		
		if(file_exists("../fotos/$foto")){
			$a = 1;
			while(file_exists("../fotos/[$a]$foto")){
				$a++;
			}
			
			$foto = "[".$a."]".$foto;
			
		}
		
		if(!move_uploaded_file($_FILES['arquivo']['tmp_name'], "../fotos/".$foto)){
			
			echo "
		<META HTTP-EQUIV=REFRESH CONTENT='0; URL=index.php?pg=portfolio'>
		<script type=\"text/javascript\">
		alert(\"Erro ao enviar o arquivo.\");
		</script>
		";
			
		}
	
	}
	
		$sql = mysql_query("UPDATE portfolio SET texto = '$texto', foto='$foto', link='$link' where id = '$id'");
		header("Location: index.php?pg=portfolio");
	
}

if($_GET['funcao'] == "alterar" && $enviar_imagem != "sim" && !is_file($_FILES['arquivo']['tmp_name'])){
	$id = $_GET['id'];
$sql = mysql_query("UPDATE portfolio SET texto = '$texto', link='$link' where id = '$id'");
		header("Location: index.php?pg=portfolio");
	
}

//***************************************

if($_GET['funcao'] == "excluir"){
	$id = $_GET['id'];
	$sql = mysql_query("DELETE FROM portfolio WHERE id = '$id'");
	header("Location: index.php?pg=portfolio");
}

?>