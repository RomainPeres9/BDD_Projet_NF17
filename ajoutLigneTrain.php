<!DOCTYPE html>
<html>
<title>RAILWAY DATABASE</title>
<meta charset="UTF-8">


<body>

<p>Bonjour !</p>


<?php
/** Connexion **/

$connexion = new PDO('pgsql:host=tuxa.sme.utc;port=5432;dbname=dbnf17p052', 'nf17p052', 'CZhheaS4');	


/** Préparation et exécution de la requête **/

$gareDep=$_POST['gareDep'];
$gareArr=$_POST['gareArr'];
$villeDep=$_POST['villeDep'];
$villeArr=$_POST['villeArr'];
$typeTrain=$_POST['typeTrain'];

$sql2 = "SELECT * FROM LIGNE_DE_TRAIN WHERE nomDep = '$gareDep' AND nomArr = '$gareArr' AND villeDep = '$villeDep' AND villeArr = '$villeArr';";
$resultTest2 = $connexion->prepare($sql2);
$resultTest2->execute();


if($resultTest2->rowCount()==1) {
	echo 'Cette ligne existe déjà, modification en ouverte';
	 $sql = "UPDATE LIGNE_DE_TRAIN SET supprime = FALSE WHERE nomDep = '$gareDep' AND nomArr = '$gareArr' AND villeDep = '$villeDep' AND villeArr = '$villeArr';";}
else { $sql = "INSERT INTO LIGNE_DE_TRAIN VALUES(DEFAULT, $gareDep, $gareArr, $villeDep, $villeArr, $typeTrain, FALSE"; }


$resultset = $connexion->prepare($sql);
$resultset->execute();



?>
<p>Pour revenir à la page d'accueil, <a href="inscription.html">clique ici</a>.</p>
</body>
</html>

