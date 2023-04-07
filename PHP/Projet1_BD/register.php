<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">   
<body>
    <center>
    <html>
        <?php
        @include("connexion.php");
        session_start();
        $a=$_POST["login"];
        $b=$_POST["motdepasse"];

        
        $req1 = "INSERT INTO user VALUES ('$a','$b')";
        $r1 = mysql_query($req1);

        echo "<p>L'enregistrement a effectué avec succes";

        echo " La session est ouverte : <br>";
        echo $_SESSION["nom"],"  ";
        echo $_SESSION["prenom"];

        echo "<br><a href='login.html'>Se connecter</a>";
?>
    </center>
</body>
<html>
