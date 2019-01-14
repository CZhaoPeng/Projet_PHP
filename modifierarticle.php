<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Modifeir de article</title>
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
    	$idnews=$_GET['idnews'];
    	$idn=$_SESSION['idnnews']=$_GET['idnews'];
		$req = $objPdo->prepare("select * from NEWS where idnews =$idnews");
		$req->execute();
			if($objligne=$req->fetch(PDO::FETCH_OBJ))
			{
			$idn=$objligne->idnews;
			$theme=$objligne->idtheme;
			$titre=$objligne->titrenews;
			$textenews=$objligne->textenews;
			}
	
	
	else{
		?>
		
		<script type ="text/javascript">
			alert("l'article existe pas!");
			window.location.href="articleListe.php";
		</script>
		<?php
		}
		
	?>
	<div class="header" id="head">
  <div class="title">Systeme de News</div>
  </div>
  <form action="articlemodifier.php"method="post" onsubmit="return publier()"> 
 <div class="cnetre" id="centre">
		<div class="panel">
			<div class="panelinput paneltitle">
				<p class="p1">Modifier un article</p>
			</div>
		
		<div class="panelinput"> 
   			<input  type="hidden" class="textfield"  placeholder="idnews" name="idnews" id="idnews" value ="<?php echo $idn;?>"/>
   		</div>
   		<div class="panelinput">
  			<select type="text" class="easyui-combobox"  name="idtheme" id="idtheme" style="width:200px;height:30px;" 
  			value="<?php echo $theme;?>"/>
  			<?php 
  			include("connexion.php");
					session_start();
					$req = $objPdo->prepare("select * from THEME");
					$req->execute();
		
			while($row=$req->fetch()){	
  			echo "<option value=".$row['idtheme']." selected>".$row['description'];
  			
  			}
  			?>
  			</select> 
  		</div>
  		<div class="panelinput">
  			<i class="icon ion-document-text"></i> 
   			<input  type="text" class="textfield"  placeholder="titre de news" name="titre" id="titre" value ="<?php echo $titre?>"/>
   		</div>
	<div class="panel2">
		<div class="paneltext">
   			<textarea  type="text" placeholder="texte de news" name="text" id="text" style="width:520px;height:200px;"/><?php echo $textenews;?></textarea>
   		</div>
  		<div class="panelbutton">
  			 <input type="submit" value="modifier"  class="button" onclick = "return publier()">
   		</div>
  		 <div class="panelsite">
			<a class="reme2" href="articleListe.php">Annuler</a> 
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
