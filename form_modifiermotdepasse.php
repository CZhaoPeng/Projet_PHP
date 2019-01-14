<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Form_Modifier_Motdepasse</title>
	<script type="text/javascript">
	function modifier(){
	var nom = document.getElementById("nom").value;
	var oldmotdepasse = document.getElementById("oldmotdepasse").value;
	var newmotdepasse = document.getElementById("newmotdepasse").value;
	var confirmation = document.getElementById("confirmation").value;
	var regex=/^[/s]+$/;
	if(regex.text(nom)||nom.length==0){
	alert("le format nom de redacteur est pas correct");
	return false;
	}
	if(regex.text(oldmotdepasse)||oldmotdepasse.lenght==0){
	alert("le format est pas correct");
	return false;
	}
	if(regex.text(newmotdepasse||newmotdepasse.lenght==0){
	alert("le format est pas correct");
	return false;
	}
	if(comfirmation!=newmotdepasse||confirmation==0){
	alert("vouliez vous resaisir le mot de passe");
	return false;
	}
	return true;
	}
	</script>
	</head>
	<body>
	<?php 
    session_start(); 
  ?> 
  <form action="modifier_motdepasse.php" method="post" onsubmit="return modifier()"> 
   Nom<input type="text" name="nom" id="nom"</br>
   Mot de passe<input type="password" name="oldmotdepasse" id="oldmotdepasse"></br>
   Nouveau motdepasse<input type="password" name ="newmotdepasse" id="newmotdepasse"></br>
   Confirmation<input type="password" name="confirmation" id="confirmation"></br>
   <input type "sumbit" value="modifier" onclick = "return modifer()">
   </form>