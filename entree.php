<!doctype html> 
<html> 
<head> 
<meta charset="UTF-8"> 
<title>Entree</title>
</head> 
<body> 
<?php
		session_start();

		
			$mail =$_POST['mail'];
			$motdepasse=$_POST['motdepasse'];
		
		
		include("connexion.php");

		$req = $objPdo->prepare("select * from REDACTEUR where adressemail = :mail and motdepasse = :motdepasse");	
		$req->bindValue(':mail',$mail,PDO::PARAM_STR);
		$req->bindValue(':motdepasse',$motdepasse,PDO::PARAM_STR);
		$req->execute();
		if($row=$req->fetch())
		{
		
		//echo $row['nom']."Authentifié!";
		//$_SESSION["nom"] = $row['nom'];
		//$_SESSION["prenom"] = $row['prenom'];
		
		$_SESSION['id']=$row['idredacteur'];
		$_SESSION['nom'] = $row['nom'];
		$_SESSION['prenom'] = $row['prenom'];
		header('location: accueil.php');
			
		}
		else{
		?>
		
		<script type ="text/javascript">
			alert("Echec de l'authentification!");
			window.location.href="login.php";
		</script>
		<?php
		}
		
	?>
		
</body>
</html>