<body>
    <html>
        <?php
        @include("connexion.php");
        $a=$_POST["login"];
        $b=$_POST["motdepasse"];

        $requete= "SELECT * from user where  login= '$a'and motdepasse= '$b'";
        $resultat=mysql_query($requete);
        $ligne=mysql_num_rows($resultat);
        if ($ligne==1)
            header("location:projet1.html");
        else
            header("location:userfail.html");
?>
</body>
<html>
