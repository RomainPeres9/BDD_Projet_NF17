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

$nom=$_POST['nom'];
$ville=$_POST['ville'];
$adresse=$_POST['adresse'];
$zHoraire=$_POST['zHoraire'];

$sql2 = "SELECT * FROM GARE WHERE nom = '$nom' AND ville = '$ville';";
$resultTest2 = $connexion->prepare($sql2);
$resultTest2->execute();


if($resultTest2->rowCount()==1) {
	echo 'Cette gare existe déjà, modification en ouverte';
	 $sql = "UPDATE GARE SET ouverte = TRUE WHERE nom ='$nom' AND ville = '$ville';";}
else { $sql = "INSERT INTO GARE VALUES ($nom, $ville,$adresse, $zHoraire);"; }


$resultset = $connexion->prepare($sql);
$resultset->execute();



?>
<p>Pour revenir à la page d'accueil, <a href="inscription.html">clique ici</a>.</p>
</body>
</html>

