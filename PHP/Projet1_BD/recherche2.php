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
        
        $enreg=mysql_fetch_array($resultat);

        echo'<input type="text" value="', $enreg["num_eleve"].'">';
        echo'<input type="text" value="', $enreg["nom_eleve"].'">';
        echo'<input type="text" value="', $enreg["numtel_eleve"].'">';
        echo'<input type="text" value="', $enreg["adesse_eleve"].'">';


        mysql_close($idc);
        ?>
    </body>
</html> 
