<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Form_Modifier_Motdepasse</title>
		<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.staticfile.org/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="css/rediger.css">
	<script type="text/javascript">
	function publier(){
	var id = document.getElementById("idtheme").value;
	var titre = document.getElementById("titre").value;
	var text = document.getElementById("text").value;
	
	if(id.length==0||id.trim()==""){
	alert("le champ d'id theme est vide");
	return false;
	}
	if(titre.length==0||titre.trim()==""){
	alert("le champ de titre de news est vide");
	return false;
	}
	if(text.length==0||text.trim()==""){
	alert("le champ de texte de news est vide");
	return false;
	}
	
	return true;
	}
</script>
	</head>
	<body>
	<?php 
    include('connexion.php');
    session_start();
    if(isset($_SESSION['id']))
    	$id=(isset($_SESSION['id']))?(int)$_SESSION['id']:0;
	if (!isset($_SESSION['id'])){
		 //header('Location: accueil.php');
		?> 
		 <script type ="text/javascript">
			alert("Il faut connecter");
			window.location.href="accueil.php";
		</script>
		 
		<?php
		}
	?>
	<div class="header" id="head">
  <div class="title">Systeme de News</div>
  </div>
  <form action="articlepublier.php"method="post" onsubmit="return publier()"> 
 <div class="cnetre" id="centre">
		<div class="panel">
			<div class="panelinput paneltitle">
				<p class="p1">Écrire un article</p>
			</div>
		<div class="panelinput">
  			<select type="text" class="easyui-combobox" placeholder="idtheme" name="idtheme" id="idtheme" style="width:200px;height:30px;">
  			<?php 
					$req = $objPdo->prepare("select * from THEME");
					$req->execute();
		
			while($row=$req->fetch()){
				
  			echo "<option value=".$row['idtheme'].">".$row['description'];
  			}
  			?>
  			</select> 
  		</div>
  		<div class="panelinput">
  			<i class="icon ion-document-text"></i> 
   			<input  type="text" class="textfield"  placeholder="titre de news" name="titre" id="titre"></textarea>
   		</div>
	<div class="panel2">
		<div class="paneltext">
   			<textarea  placeholder="texte de news" name="text" id="text" style="width:520px;height:200px;"></textarea>
   		</div>
  		<div class="panelbutton">
  			 <input type="submit" value="publier"  class="button" onclick = "return publier()">
   		</div>
  		 <div class="panelsite">
			<a class="reme2" href="accueil.php">Annuler</a> 
		</div> 
   	</div>
   	</div>	
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