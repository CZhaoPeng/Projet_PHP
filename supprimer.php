<!doctype html> 
<html> 
<head> 
<meta charset="UTF-8"> 
<title></title>
</head> 
<body> 
	<?php
	include("connexion.php");
	session_start();
 
	if (!isset($_SESSION['id'])){
		 header('Location: accueil.php');
		}
    if(isset($_SESSION['idnews']))
    	$idnews=(isset($_SESSION['idnews']))?(int)$_SESSION['idnews']:0;
    ?>
	 <?php
	if(isset($_SESSION['idnews'])){
		try{
				$insert_stmt = $objPdo->prepare("DELETE FROM NEWS WHERE idnews = $idnews");
				$insert_stmt -> execute();
			}catch(Exception $e)
			{
				die($e->getMessage());
			}
		}
	?>
<script type ="text/javascript">
			alert("Succéss de la Modification");
			window.location.href="articleListe.php";
		</script>
</body>
</html>