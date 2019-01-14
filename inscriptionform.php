<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title> Form_inscription</title>
		<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.staticfile.org/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="css/inscription.css">
<script type="text/javascript">
	function check(){
	var nom = document.getElementById("nom").value;
	var prenom = document.getElementById("prenom").value;
	var mail = document.getElementById("mail").value;
	var motdepasse = document.getElementById("motdepasse").value;
	var confirmation = document.getElementById("confirmation").value;
	if(nom.length==0){
	alert("le champ de nom est vide");
	return false;
	}
	if(prenom.length==0){
	alert("le champ de prenom est vide");
	return false;
	}
	if(mail.length==0){
	alert("le champ de mail est vide");
	return false;
	}
	if(mail.indexOf('@')==-1){
	alert("le format mail n'est pas correct");
	return false;
	}
	if(motdepasse.length==0)
	{
	alert("le champ de  motdepasse est vide");
	return false;
	}
	if(confirmation.length==0)
	{
	alert("le champ de confirmation est vide");
	return false;
	}
	if(motdepasse!=confirmation){
		alert("le mot de passe et la confirmation de  mot de passe ne sont pas le même");
		return false;
		}
	return true;
	}
	</script>
	</head>
    <body>
    <body>
	<div class="header" id="head">
  <div class="title">System de News</div>
  </div>
	<form action= "inscription.php" method="post" name = "inscription" onsubmit="return check()">
	<div class="wrap" id="wrap">
		<div class="logGet">
			<div class="logD logDtip">
				<p class="p1">Inscription</p>
			</div>
		<div class="lgD">
		<i class="icon ion-ios-person-outline"></i> 
  			<input type="text" class="textfield" placeholder="nom" name = "nom" id="nom"/> 
  		</div>
  		<div class="lgD">
		<i class="icon ion-ios-person-outline"></i> 
  			<input type="text" class="textfield" placeholder="prenom" name="prenom" id="prenom"/> 
  		</div>
  		<div class="lgD">
				<i class="icon ion-ios-email-outline"></i>
				<input type="text"
					name= "mail" id="mail" class="textfield" placeholder="adressemail" >
			</div>
  		<div class="lgD">
				<i class="icon ion-ios-locked-outline"></i>
				<input type="password"
					class="textfield" placeholder="mot de passe" name="motdepasse" id="motdepasse"/>
			</div>
  
   		<div class="lgD">
  			<i class="icon ion-ios-locked-outline"></i>
  			<input type="password" class="textfield" placeholder="confirmation" name="confirmation" id="confirmation"/>
  		</div>
  		<div class="logC">
  			 <input type="submit" value="inscription" class="button" onclick="return check()">
   		</div>
  		 <div class="logE">
			<a class="reme2" href="accueil.php">Annuler</a> 
		</div>
		</div> 
	</form>
	<div class="footer" id="foot">
  <div class="copyright">
    <p>Copyright © 2018 </p>
	<div class="img">
		<i class="icon1"></i><span>Université de Lorraine</span>
	</div>
	  
  </div>
	
</div>
	
	
</body>
</html>
	</body>
</html>
	</body>
</html>