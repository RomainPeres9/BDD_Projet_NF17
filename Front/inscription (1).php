<!DOCTYPE html>
<html>
<title>RAILWAY DATABASE</title>
<meta charset="UTF-8">


<body>

<p>Bonjour !</p>


<p>Bienvenue  <?php echo $_POST['prenom']; ?> .</p>

<?php
/** Connexion **/

$connexion = new PDO('pgsql:host=tuxa.sme.utc;port=5432;dbname=dbnf17p052', 'nf17p052', 'CZhheaS4');	

/** Préparation et exécution de la requête **/

$pnom=$_POST['prenom'];
$nom=$_POST['nom'];
$numtel=$_POST['numtel'];
$adresse=$_POST['adresse'];
$mail=$_POST['mail'];

$sql = "INSERT INTO VOYAGEURS VALUES ( DEFAULT, $nom,$pnom, $numtel, $adresse,DEFAULT, $mail, ‘AUCUN’);";

$resultset = $connexion->prepare($sql);
$resultset->execute();

?>
<p>Pour revenir à la page d'accueil, <a href="inscription.html">clique ici</a>.</p>
</body>
</html>

