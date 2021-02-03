<html>
    <head>
        <?php
            require("Objet/Ex8.php");
        ?>
    </head>
    <body>
        <?php
            //Entrer perso en base avec un formulaire tout en limitant.
            ?>
                <form action="" method="post" name="Ajout">
                    <div>
                        <label for="Pseudo"> Pseudo : </label>
                        <input type=Text id=Pseudo name=Pseudo required>
                    </div>
                    <p>
                        Vos PV vont automatiquement être mis à la valeur maximal, c'est a dire 100 PV
                    </p>
                    <div>
                        <label for="Attaque"> Dégats d'attaque : </label>
                        <input type=number id=Degat name=Degat min=1 max=50 required>
                    </div>
                    <div>
                        <label for="Defense"> Points de défense : </label>
                        <input type=number id=Defense name=Defense min=0 max=40 required>
                    </div>
                    <div>
                        <label for="Soin"> Puissance de soin : </label>
                        <input type=number id=Soin name=Soin min=1 max=50 required>
                    </div>
                    <button type=submit id=Envoyer name=Envoyer>Ajouter un nouveau personnage</button>
                </form>
            <?php
                if(ISSET($_POST['Envoyer']))
                {
                    $Perso = new Personnage($_POST['Pseudo'],$_POST['Degat'],$_POST['Defense'],$_POST['Soin']);
                    $Perso->NouveauPerso();
                }
        ?>
    </body>
<html>