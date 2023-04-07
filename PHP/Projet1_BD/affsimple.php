<HTML>
    <head>
        <title> La gestion d'une base de données Mysql en Php </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
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
        
        
        $requete="select * from eleves";   
        $resultat=mysql_query($requete);
    ?>
   
    <?php while($enreg=mysql_fetch_array($resultat))
    { echo $enreg["num_eleve"];
        echo (", ");
        echo $enreg["nom_eleve"];
        echo (", ");
        echo $enreg["numtel_eleve"];
        echo (", ");
        echo $enreg["adesse_eleve"];
        echo ("<br>");
    }
        ?>

    </center>
    </body>
</html> 
