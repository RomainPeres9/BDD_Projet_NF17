<!DOCTYPE html>
<html>
<title>RAILWAY DATABASE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<style>
input[type=text] {
    background-color: white;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding-left: 10px;
    border-radius: 4px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.html" class="w3-bar-item w3-button w3-padding-large w3-hover-white ">Accueil</a>
    <a href="reserver.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Réserver</a>
    <a href="trains.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Consulter les trains</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">S'inscrire</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="reserver.html" class="w3-bar-item w3-button w3-padding-large">Réserver</a>
    <a href="trains.html" class="w3-bar-item w3-button w3-padding-large">Consulter les trains</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">S'inscrire</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">AJOUT PLANNING</h1>


  <form action="ajoutPlanning.php" method="POST">

  Lundi :
  <input type="checkbox" name="lundi"><br>
  
  Mardi :
  <input type="checkbox" name="mardi"><br>

  Mercredi :
  <input type="checkbox" name="mercredi"><br>

  Jeudi :
  <input type="checkbox" name="jeudi"><br>

  Vendredi :
  <input type="checkbox" name="vendredi"><br>

  Samedi :
  <input type="checkbox" name="samedi"><br>

  Dimanche :
  <input type="checkbox" name="dimanche"><br>

  Date de début : <br>
  <input type="text" name="dateDep"><br>

  Date de fin : <br>
  <input type="text" name="dateFin"><br>

  Trajet associé : <br>
  <?php
  $connexion = new PDO('pgsql:host=tuxa.sme.utc;port=5432;dbname=dbnf17p052', 'nf17p052', 'CZhheaS4');	
  $sql = "SELECT * FROM TRAJET;";
  $resultset = $connexion->prepare($sql);
  $resultset->execute();


  while ($row = $resultset->fetch(PDO::FETCH_ASSOC)) {
	$value = $row['idtrajet'];
	echo $value;
	echo "<input type=\"radio\" id=\"contactChoice1\" name=\"trajet\" value=\"$value\">";	
	echo "<br>";
}

  ?>

  <input type="submit" value="Valider" />

  </form>
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">VALIDER AJOUT</button>


</header>



<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>NF17 Project</p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
