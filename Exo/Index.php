<html>
    <head>
        <?php
            //Objet Ex1
            require("Objet/User.php");

            //Objet Ex2
            require("Objet/Personnage.php");
        ?>
    </head>
    <body>
        <?php
            

            echo "EX AVEC CLASSE USER";
            echo "<p>";
            //Ex1
            $NewUser = New User();        

            $NewUser->afficheUser();
            echo "</p>";

            echo "EX AVEC CLASSE PERSONNAGE";
            //Ex2 + Ex3
            echo "<p>";
            $Pseudo = "Julien";
            $NewPerso = New Personnage($Pseudo);
            $NewPerso->PresenteToi();
            echo "</p>";


            //Ex4
            $Pseudo = "Gros Chien";
            $Chien = new Personnage ($Pseudo);
            $Chien->PresenteToi ();
            //Attaque
            //La methode "Attaquer" utilise la methode "Défense" dans son code, pas besoin de l'appeler
            $Chien->Attaquer($NewPerso);

            
            $ID = "1";
            $NewPerso = New Personnage($ID);
            $NewPerso->PresenteToi();
            echo "</p>";


            //Ex4
            $ID = "3";
            $Chien = new Personnage ($ID);
            $Chien->PresenteToi ();
            //Attaque
            //La methode "Attaquer" utilise la methode "Défense" dans son code, pas besoin de l'appeler
            $Chien->Attaquer($NewPerso);
        ?>
    </body>
<html>