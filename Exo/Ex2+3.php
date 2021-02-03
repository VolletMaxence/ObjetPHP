<html>
    <head>
        <?php
            //Objet Ex2
            require("Objet/Ex2+3.php");
        ?>
    </head>
    <body>
        <?php
            echo "EX AVEC CLASSE PERSONNAGE";
            //Ex2 + Ex3
            echo "<p>";
            $Pseudo = "Julien";
            $NewPerso = New Personnage($Pseudo);
            $NewPerso->PresenteToi();
            echo "</p>";
        ?>
    </body>
<html>