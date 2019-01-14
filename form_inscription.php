<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title> Form_inscription</title>
	<script type="text/javascript">	
	function check(){
	var nom = document.getElementById("nom").value;
	var prenom = document.getElementById("prenom").value;
	var mail = document.getElementById("mail").value;
	var motdepasse = document.getElementById("motdepasse").value;
	var confirmation = document.getElementById("confirmation").value;
	var regex = /^[/s]+$/;
	if(regex.text(nom)||nom.length==0){
	alert("La format nom d'utilisateur n'est pas correct");
	return false;
	}
	if(regex.text(prenom)||prenom.length==0){
	alert("La format nom d'utilisateur n'est pas correct");
	return false;
	}
	if(regex.text(mail)||mail.length==0){
	alert("La format mail n'est pas correct");
	return false;
	}
	if(regex.text(motdepasse)||motdepasse.length==0)
	{
	alert("La format motdepasse n'est pas correct");
	return false;
	}
	if(regex.text(confirmation)||confirmation.length==0)
	{
	alert("Vouliez vous resaisir le mot de passe");
	return false;
	}
	return true;
	}
	</script>
	</head>
    <body>
	<form action= "inscription.php" method="post" name = "inscription" onsubmit="return check()">
	Nom <input type="text" name = "nom" id="nom"></br>
	Prenom<input type="text" name="prenom" id="prenom"></br>
	Adressemail<input type="text" name = "mail" id="mail"></br>
	Mot de passe<input type="password" name="motdepasse" id="motdepasse"></br>
	Confirmation<input type="password" name="confirmation" id="confirmation"></br>
	<input type ="sumbit" value = "Inscription">
	</form>
	</body>
</html>