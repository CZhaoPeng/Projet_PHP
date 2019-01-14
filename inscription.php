<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title> Inscription</title>
	</head>
	<body>
	<?php
		
		include("connexion.php");
		session_start();
		$nom =$_POST['nom'];
		//$prenom = $_POST['prenom'];
		$mail = $_POST['mail'];	
		$req = $objPdo->prepare("select * from REDACTEUR where adressemail = ?");	
		//while($row = $select_stmt->fetch(PDO::FETCH_OBJ))
		//$req->bindValue('',$nom,PDO::PARAM_STR);
		//$req->bindValue(':prenom',$prenom,PDO::PARAM_STR);
		$req->bindValue(1,$mail,PDO::PARAM_STR);
		$req->execute();
		
		if($row=$req->fetch()){
		?>
			<script type ="text/javascript">
			alert("le mail a déjé été utilisé");
			window.location.href="inscriptionform.php";
			</script>
		<?php
		
		}
		
		else {
			try{
				$insert_stmt = $objPdo->prepare("insert into REDACTEUR (nom,prenom,adressemail,motdepasse) values(?,?,?,?)");
				$insert_stmt ->bindValue(1,strip_tags($_POST['nom']),PDO::PARAM_STR);
				$insert_stmt ->bindValue(2,strip_tags($_POST['prenom']),PDO::PARAM_STR);
				$insert_stmt ->bindValue(3,strip_tags($_POST['mail']),PDO::PARAM_STR);
				$insert_stmt ->bindValue(4,strip_tags($_POST['motdepasse']),PDO::PARAM_STR);
				$insert_stmt -> execute();
			}catch(Exception $e)
			{
				die($e->getMessage());
			}
			}	
		?>
		
		<script type ="text/javascript">
			alert("vous avez reussi l'inscription");
			//header('location: index.php');
			window.location.href="login.php";
		</script>
		
	</body>
</html>