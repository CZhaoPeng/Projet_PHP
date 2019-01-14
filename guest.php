<!doctype html> 
<html> 
<head> 
<meta charset="UTF-8"> 
<title>Entree</title>
</head> 
<body> 
<?php
		session_start();
		$_SESSION['id'] = null;
		$_SESSION['nom'] = null;
		$_SESSION['prenom'] = null;
		
		header('location: accueil.php');
?>  

</body>
</html>