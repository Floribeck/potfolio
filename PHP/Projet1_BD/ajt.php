<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<center>
<?php
@include("connexion.php");
session_start();
echo " La session  est encore ouverte ! L'utilisateur est encore connecté <br>";
echo $_SESSION["nom"],"  ";
echo $_SESSION["prenom"];

$a = $_POST["Num"];
$b = $_POST["Nom"];
$c = $_POST["Numtel"];
$d = $_POST["adesse"];

$req1 = "INSERT INTO eleves VALUES ('$a','$b','$c','$d')";
$r1= mysql_query($req1);

echo "<p>L'enregristrement a effectué avec succées</p>";

echo '<h3><a href="logue.php">Deconnexion</a></h3>';

echo "<br><a href='login.html'>Se connecter</a>";

echo "<br><a href='recherche2.html'>Rechercher eleve</a>";

mysql_close()
?>
</center>





