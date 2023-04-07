<HTML>
    <head>
    <meta charset="utf-8">
</head>
<body>
    <center>
    <?php
        @include("connexion.php");
        session_start();

    echo " La session  est encore ouverte ! L'utilisateur est encore connecté <br>";
    echo $_SESSION["nom"];
    echo $_SESSION["prenom"];

    
    echo '<h3><a href="logue.php">Deconnexion</a></h3>';
       
       
       
        $a= $_POST['Num'];
        $requete="select * from eleves where num_eleve='$a'";
        $resultat=mysql_query($requete);
        ?>
         <table border=1>
        <tr>
            <td>code_eleve</td>
            <td>nom_eleve</td>
        </tr>
        <?php while($enreg=mysql_fetch_array($resultat))
    {
        ?>
    <tr>
        <td><?php echo $enreg["num_eleve"];?></td>
        <td><?php echo $enreg["nom_eleve"];?></td>
    </tr>
    <?php } ?>
    </center>
    </table>
    </center>
    </body>
</html> 
