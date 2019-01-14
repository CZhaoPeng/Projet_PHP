<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login</title>
<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.staticfile.org/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="css/login.css">
</head>
<body>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login</title>
 <script type ="text/javascript">
function entree(){
	var mail = document.getElementById("mail").value;
	var motdepasse = document.getElementById("motdepasse").value;
	if(mail.length==0||mail.trim()==""){
	alert("le champ de mail est vide");
	return false;
	}
	if(mail.indexOf('@')==-1){
	alert("le format mail n'est pas correct");
	return false;
	}
	if(motdepasse.length==0||mail.trim()=="")
	{
	alert("le champ de motdepasse est vide");
	return false;
	}
	return true;
}
</script>
</head>
<body>
<div class="header" id="head">
  <div class="title">System de News</div>
	
</div>
<form action ="entree.php" method="post" onsubmit="return entree()">
<div class="wrap" id="wrap">
	<div class="logGet">
			<div class="logD logDtip">
				<p class="p1">Connexion</p>
			</div>
			<div class="lgD">
				<i class="icon ion-ios-email-outline"></i>
				<input type="text"
					name= "mail" id="mail" class="textfield" placeholder="adressemail" >
			</div>
			<div class="lgD">
				<i class="icon ion-ios-locked-outline"></i>
				<input type="password"
					name="motdepasse" id="motdepasse" class="textfield" placeholder="mot de passe" >
			</div>
			<div class="logC">
				<input type="submit" class="button" name ="valider" value="valider" onclick="return entree()">
			</div>
			<div class="logE"><a class="reme1" href="inscriptionform.php">inscription</a>
			<a class="reme2" href="guest.php">guest</a> </div> 
		</div>
</div>
</form>	
<div class="footer" id="foot">
  <div class="copyright">
    <p>Copyright © 2018 </p>
	<div>
		<i></i><span>Université de Lorraine</span>
	</div>
	  
  </div>
	
</div>
	
	
</body>
</html>