<!DOCTYPE html>
<html>
<title>RAILWAY DATABASE</title>
<meta charset="UTF-8">


<body>

<p>Bonjour !</p>


<p>Bienvenue  <?php echo $_POST['pnom']; ?> .</p>

<?php
/** Connexion **/

$connexion = new PDO('pgsql:host=tuxa.sme.utc;port=5432;dbname=dbnf17p052', 'nf17p052', 'CEhheaS4');

/** Préparation et exécution de la requête **/

$type=$_POST['type'];
$placesmax1=$_POST['placesmax1'];
$placesmax2=$_POST['placesmax2'];
$vmax=$_POST['vmax'];
$classe1=$_POST['classe1'];
$classe2=$_POST['classe2'];

$sql = "INSERT INTO TYPE_DE_TRAIN VALUES ( $type,$placesmax1,$placesmax2,$vmax,$classe1,$classe2);";

$resultset = $connexion->prepare($sql);
$resultset->execute();

?>
<p>Pour revenir à la page d'accueil, <a href="inscription.html">clique ici</a>.</p>
</body>
</html>
