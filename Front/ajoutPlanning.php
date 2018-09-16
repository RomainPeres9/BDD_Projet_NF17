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

$dateDep=$_POST['dateDep'];
$dateFin=$_POST['dateFin'];
$id = $_POST['trajet'];

if(isset($_POST['lundi'])) $lundi = 1; 
else $lundi = 0;
if(isset($_POST['mardi'])) $mardi = 1; 
else $mardi = 0;
if(isset($_POST['mercredi'])) $mercredi = 1; 
else $mercredi = 0;
if(isset($_POST['jeudi'])) $jeudi = 1; 
else $jeudi = 0;
if(isset($_POST['vendredi'])) $vendredi = 1; 
else $vendredi = 0;
if(isset($_POST['samedi'])) $samedi = 1; 
else $samedi = 0;
if(isset($_POST['dimanche'])) $dimanche = 1; 
else $dimanche = 0;

if($dateDep>$dateFin) echo 'Erreur date';
else {
$sql = "INSERT INTO PLANNING VALUES(DEFAULT, $lundi, $mardi, $mercredi, $jeudi, $vendredi, $samedi, $dimanche , $dateDep, $dateFin, $id;"; 
}

/** Exécution **/

$resultset = $connexion->prepare($sql);
$resultset->execute();



?>
<p>Pour revenir à la page d'accueil, <a href="inscription.html">clique ici</a>.</p>
</body>
</html>

