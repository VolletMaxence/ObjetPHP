<html>
    <head>
        <?php
            require("Objet/Ex7.php");
        ?>
    </head>
    <body>
        <?php
            //Exo7
            //afficher tout les perso present dans la base avec un SELECT
            //cree tableau
            //faire tourner la boucle le temps qu'il y a quelque chose
            //appeler fonction affichant une ligne de texte avec toutes les infos du perso
            //

            $Tableau=Array();
            $BDD = new PDO("mysql:host=192.168.64.116; dbname=Maxence_Objet_Ex; charset=utf8", "root", "root");
            $req = "SELECT * FROM Personnage WHERE 1"; 
            $reponse = $BDD->query($req);

            while($Perso = $reponse->fetch()) 
            {
                //Création des cases de tableau :
                //array_push pour crée les cases
                array_push($Tableau, new Personnage($Perso));
            }
            foreach($Tableau as $Aff)
            {
                //Pour chaque $Perso existant
                //Affichage des infos avec la method
                $Aff->AfficherPersonnage();
            }


        ?>
    </body>
<html>