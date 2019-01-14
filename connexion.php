<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>PDO</title>
	</head>
    <body>
	<?php
	try{
		$objPdo = new PDO('mysql:hoste=localhost;port=3306;dbname=zhao37u_ProjetWeb','zhao37u_appli','31722553');
	}
	catch(Exception $e)
	{
		die($e->getMessage());
	}
	?>
	</body>
</html>