<html>
    <head>
        <?php
            //Objet Ex2/3/4/5/6/7
            require("Objet/Ex6.php");
        ?>
    </head>
    <body>
        <?php
            $ID=1;
            $Personnage1 = New Personnage($ID);
            $ID=4;
            $Personnage3 = New Personnage($ID);
            
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