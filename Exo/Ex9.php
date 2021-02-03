<html>
    <head>
        <?php
            require " Objet/Ex9";
        ?>
    </head>
    <body>
        <?php
            //Formulaire avec le Pseudo de tout les perso en base piur en choisir un et le delete :
        $BDD = new PDO("mysql:host=192.168.64.116; dbname=Maxence_Objet_Ex; charset=utf8", "root", "root");
        $Perso = $BDD->query("SELECT * FROM Personnage")
        ?>
        <form action="" method="POST">
            <label>
                Choisissez le Personnage à DELETE
            </label>
            <select name="Pseudo">
                <?php foreach ($Perso as $Perso) {
                //récuperer la liste des Personnage depuis la base : 
                echo "<option value='".$Perso["ID"]."'>".$Perso["Pseudo"]."</option>";
                } ?>
            </select>
            <input type=submit ID=Envoyer name=Envoyer> Supprimer le Personnage choisi <strong> ! irreversible ! </strong> </input> 
        </form>
        <?php
                if(ISSET($_POST['Envoyer']))
                {
                    require("Objet/Ex9.php");
                    $Suppr = new Personnage($BDD);
                    $Suppr->SupprimerPerso();
                }
        ?>
    </body>
<html>