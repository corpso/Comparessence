<?php
/*
Thomas Rempenault
Créé le : 24/04/2012
Modifié le : 24/04/2012 (Thomas Rempenault)
Page permettant à l'utilisateur de se désinscrire du site et donc de le supprimer de la base de données
*/
	session_start();
	$BDD = mysql_connect("localhost","root","");
	mysql_select_db("comparessence");
	include("boutonDeco.php");
?>
<!DOCTYPE html>
<html lang="fr"><head>
<link rel="stylesheet" type="text/css" href="design.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<title>Ajouter une station - Comparessence</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head><body>

<?php include("logo.php"); ?>
<?php include("menu.php"); ?>

<div class='form'>
<div align="center" style="font-weight: bold; font-size: 1.2em;">
Cette action va effacer toutes vos données et ne pourront être récupérées.<br/>
Voulez-vous vraiment supprimer votre compte?<br/></strong>
<form method="POST" action="deleteConfirmed.php">
<div class='input' style="display: inline; margin-left: 120px;">
<p><input type='submit' name='submit' value='OUI' style="margin-left:0px;"></p>
</div>
</form>
<form method="POST" action="monCompte.php">
<div class='input' style="margin-left: -200px;">
<p><input type='submit' name='submit' value='NON' style="margin-left:0px;"></p>
</div>
</form>









</div>
<?php
	mysql_close($BDD);
?>

</body></html>