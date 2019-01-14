<!doctype html> 
<html> 
<head> 
<meta charset="UTF-8"> 
</head> 
<body> 
<?php
	session_start ();
		$_SESSION['id'] = null;
		$_SESSION['nom'] = null;
		$_SESSION['prenom'] = null;
	session_destroy (); 
?> 
<script type="text/javascript"> 
alert("vous avez déja deconnecté");
 window.location.href="accueil.php"; 
</script> 
</body> 
</html> 