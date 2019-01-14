<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Modifier_Motdepasse</title>
	</head>
	<?php
		
	include("connexion.php");
		session_start();
    if(isset($_SESSION['id']))
    	$id=$_SESSION['id'];
		$oldmotdepasse = $_POST["oldmotdepasse"];
		$newmotdepasse = $_POST["newmotdepasse"];
		$req = $objPdo->prepare("select * from REDACTEUR where motdepasse = :oldmotdepasse");	
		//$req->bindValue(':nom',$nom,PDO::PARAM_STR);
		$req->bindValue(':oldmotdepasse',$oldmotdepasse,PDO::PARAM_STR);
		$req->execute();
		if($row=$req->fetch()){

			try{
				$update_stmt = $objPdo->prepare("UPDATE REDACTEUR SET motdepasse ={$newmotdepasse} where idredacteur = {$id}"); 
				//$update_stmt = $objPdo->prepare("update REDACTEUR set nom =:nom, prenom =:prenom, adressemail =:adressemail,motdepasse =:newmotdepasse where idredateur = $id"); 
				$update_stmt-> execute();
				
				}catch(Exception $e)
			{
				die($e->getMessage());
			}
			?>
			<script type ="text/javascript">
			alert("vous avez reussi a modifier, vous devez reconneter");
			//window.location.href="login.php";
		</script>
		<?php	
			}
		
		else{
		?>
			<script type ="text/javascript">
			alert("le mot de passe est pas corret");
			//header('location: index.php');
			window.location.href="modifier.php";
		</script>
		<?php
		}
		?>
	</body>
</html>