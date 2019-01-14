<!doctype html> 
<html> 
<head> 
<meta charset="UTF-8"> 
<title>Article</title>
</head> 
<body> 
	<?php
	include("connexion.php");
	session_start();	
		$idtheme = $_POST["idtheme"];
		$titre = $_POST["titre"];
		$text = $_POST["text"];
		$idnews=$_POST['idnews'];
		//$idnews=$_GET['idnews'];
		try{

				$update= $objPdo->prepare("UPDATE NEWS SET idtheme='{$idtheme}',titrenews = '{$titre}',textenews = '{$text}' where idnews = '{$idnews}'"); 
				$update-> execute();
			
				}catch(Exception $e)
			{
				die($e->getMessage());
    	
		}
		
	?>
<script type ="text/javascript">
			alert("Succéss de la Modification");
			window.location.href="articleListe.php";
</script>
</body>
</html>