<?php
    class Personnage
    {
        private $_ID;
        private $_BDD;
        
        public function __construct($BDD)
        {
            //commenxion a la base de donné
            $this->_BDD = new PDO("mysql:host=192.168.64.116; dbname=Maxence_Objet_Ex; charset=utf8", "root", "root");
            //$La variable $Donne possède TOUT le tableau, il faut donc tout initaliser dans chaque donné correspondante

        }



        //Ex 7
        public function AfficherPersonnage()
        {
            echo "<p>";
            echo "Je suis <strong>".$this->_Pseudo."</strong>, je possède l'ID <strong>".$this->_ID."</strong>. J'ai <strong>".$this->_Vie." PV</strong>, <strong>".$this->_Attaque." dégats d'attaque</strong>, <strong>".$this->_Defense." points de défense</strong> et <strong>".$this->_Soin." de puissance de soin</strong>.";
            echo "</p>";
        }

        //Ex 9
        public function SupprimerPerso()
        {
            $req="DELETE FROM `Personnage` WHERE ID='".$_POST["Pseudo"]."'";
            $reponse = $this->_BDD->query($req);

            echo "Le personnage à été supprimer de la base";
        }
    }
?>