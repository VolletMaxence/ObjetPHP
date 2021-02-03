<html>
    <head>
        <?php
            //Objet Ex1
            require("Objet/User.php");

            //Objet Ex2/3/4/5/6/7
            require("Objet/Personnage.php");
        ?>
    </head>
    <body>
        <?php
            $ID = 1;
            $Personnage1 = New Personnage($ID);
            $Personnage1->PresenteToi();
            echo "</p>";


            //Ex4
            $ID = 2;
            $Personnage3 = new Personnage ($ID);
            //Ex 5
            $Personnage3->PresenteToi ();
            //Attaque
            //La methode "Attaquer" utilise la methode "Défense" dans son code, pas besoin de l'appeler
            $Personnage1->Attaquer($Personnage3);

            /*$Personnage1->Attaquer($Personnage3);
            $Personnage1->Attaquer($Personnage3);
            $Personnage1->Attaquer($Personnage3);
            */
            
            //soin
            $Personnage3->SeSoigne();
            //$Personnage3->SeSoigne();

            $Personnage1->PresenteToi();
            $Personnage3->PresenteToi ();

        ?>
    </body>
<html>