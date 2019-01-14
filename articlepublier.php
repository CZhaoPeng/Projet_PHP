<!doctype html> 
<html> 
<head> 
<meta charset="UTF-8"> 
<title>Guest</title>
</head> 
<body> 
	<?php
	include("connexion.php");
	session_start();
 
	if (!isset($_SESSION['id'])){
		 header('Location: accueil.php');
		}
		
		try{
				$insert_stmt = $objPdo->prepare("insert into NEWS(idtheme,titrenews,datenews,textenews,idredacteur) values(?,?,now(),?,?)");
				$insert_stmt ->bindValue(1,strip_tags($_POST['idtheme']),PDO::PARAM_STR);
				$insert_stmt ->bindValue(2,strip_tags($_POST['titre']),PDO::PARAM_STR);
				$insert_stmt ->bindValue(3,strip_tags($_POST['text']),PDO::PARAM_STR);
				$insert_stmt ->bindValue(4,$_SESSION['id'],PDO::PARAM_STR);
				$insert_stmt -> execute();
			}catch(Exception $e)
			{
				die($e->getMessage());
			}
	?>
<script type ="text/javascript">
			alert("Succéss de la publication");
			window.location.href="articleListe.php";
		</script>
</body>
</html>
