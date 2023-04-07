<?php 
@include("connexion.php");
session_start();

echo " La session  est encore ouverte ! L'utilisateur est encore connecté <br>";
echo $_SESSION["nom"];
echo $_SESSION["prenom"];


echo '<h3><a href="logue.php">Deconnexion</a></h3>';





$c = $_POST['Num'];
    $requete="delete from eleves where num_eleve=$c";
    echo $requete;
    $resultat= mysql_query($requete);
    if ( ! $resultat)
    {       echo "<h>Suppression effectuée $requete</h1>";
            echo mysql_error($connexion);
    }
    else
        if (mysql_affected_rows ( ) )
            echo "<h1>Suppression effectuée</h1>";
            echo '<h3><a href="projet1.html">RETOUR au menu</a></h3>';
            mysql_close();
?>