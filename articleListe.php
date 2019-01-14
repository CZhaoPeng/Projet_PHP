<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Liste d'article</title>
		<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.staticfile.org/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="css/liste.css">
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
  <div class="title">System de News</div>
  </div>
	<div class="centre" id="centre">
		<div class="panel">
			<div class="panelinput paneltitle"">
				<p class="p1">Liste d'article</p>
			</div>
		
	<?php 
		$pageSize = 3; 
		$result = $objPdo->query("select * from NEWS");
		$totalNum = $result->rowCount(); 
		$totalPageCount = ceil($totalNum/$pageSize); 
		$nowPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
		$prev = ($nowPage-1 <= 0) ? 1 : $nowPage-1;
		$next = ($nowPage+1 >= $totalPageCount) ? $totalPageCount : $nowPage+1;
		$offset = ($nowPage-1)*$pageSize;
		$sql = "SELECT `idnews`,`idtheme`,`titrenews`,`datenews`,`textenews`,`idredacteur` FROM `NEWS` LIMIT :offset, :pageSize";
		$stmt = $objPdo->prepare($sql);
		$stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
		$stmt->bindParam(':pageSize', $pageSize, PDO::PARAM_INT);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$res = $stmt->fetchAll();

			echo '<table border="1" cellspacing="0" cellpadding="5">';
			echo '<tr bgcolor="lightgreen"><th>Id news</th><th>Id theme</th><th>Titrenews</th><th>Datenews</th><th>Textenews</th><th>Id redacteur</th><th></th><th></th></tr>';
			foreach ($res as $row){
   				 echo '<tr align="center">';
    			echo '<td>'.$row['idnews'].'</td>';
    			echo '<td>'.$row['idtheme'].'</td>';
    			echo '<td>'.$row['titrenews'].'</td>';
   				 echo '<td>'.$row['datenews'].'</td>';
    			echo '<td>'.$row['textenews'].'</td>';
    			echo '<td>'.$row['idredacteur'].'</td>';
   				echo '<td><a href="modifierarticle.php?idnews=' .$row['idnews'].'">Modifier</a></td>';
   				echo '<td><a href="supprimer.php?idnews=' .$row['idnews'].'">Supprimer</a></td>';
    			echo '</tr>';
    			$_SESSION['idnews']=$row['idnews'];
				//$_SESSION['nom'] = $row['nom'];
				//$_SESSION['prenom'] = $row['prenom'];
				}
			echo '</table>';

				echo '<style>a {margin-left: 10px;text-decoration: none; bgcolor="lightblue;"}a:hover{color:lightgreen;}</style>';
				echo '<h3 align="center">';
				echo "<a href=\"".$_SERVER['PHP_SELF']."?page=1\">Accueil</a>";
				echo "<a href=\"".$_SERVER['PHP_SELF']."?page=".$prev."\">Précédent</a>";
				echo "<a href=\"".$_SERVER['PHP_SELF']."?page=".$next."\">Suivant</a>";
				echo "<a href=\"".$_SERVER['PHP_SELF']."?page=".$totalPageCount."\">Fin</a>";
				echo '</h3>';
			?>

	
	<div class="panelbutton">
		<form action= "rediger.php" method="post" name = "ajouter">
  			 <input type="submit" value="ajouter"  class="button">
  		</form>
   		</div>
  		 <div class="panelsite">
			<a class="reme2" href="accueil.php">Anuller</a> 
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