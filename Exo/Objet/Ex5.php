<?php
    class Personnage
    {
        private $_ID;
        private $_BDD;
        private $_Pseudo;
        private $_Vie;
        private $_Attaque;
        private $_Defense;
        private $_Soin;

        

        //METHODE
        //Constructeur
        public function __construct($ID)
        {
        //Ex5
            //Objet PDO
            $this->_BDD = new PDO("mysql:host=192.168.64.116; dbname=Maxence_Objet_Ex; charset=utf8", "root", "root");

            $req = "SELECT * FROM Personnage WHERE ID = $ID"; //
            $reponse = $this->_BDD->query($req);

            //recupere les valeur selon les donné en base :
            $Tab = $reponse->fetch(); //
            $this->_ID = $Tab['ID'];
            $this->_Pseudo = $Tab['Pseudo'];
            $this->_Vie = $Tab['Vie'];
            $this->_Attaque = $Tab['Attaque'];
            $this->_Defense = $Tab['Defense'];
            $this->_Soin = $Tab['Soin'];
        }





        //Fonction
        public function PresenteToi ()
        {
            if($this->_Vie == 0){
                echo "<p>";
                echo "Les PV de <strong>".$this->_Pseudo."</strong> sont tombé à <strong>".$this->_Vie."</strong>, il est mort, CHEH.";
                echo "</p>";
            }else{
                echo "<p>";
                echo "Je suis <strong>".$this->_Pseudo."</strong>, je possède l'ID <strong>".$this->_ID."</strong>. J'ai <strong>".$this->_Vie." PV</strong>, <strong>".$this->_Attaque." dégats d'attaque</strong>, <strong>".$this->_Defense." points de défense</strong> et <strong>".$this->_Soin." de puissance de soin</strong>.";
                echo "</p>";
            }
        }
        //Fin Ex5
    }

?>