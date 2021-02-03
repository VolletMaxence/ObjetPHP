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
        
        public function __construct($Donne)
        {
            //$La variable $Donne possède TOUT le tableau, il faut donc tout initaliser dans chaque donné correspondante
            $this->_ID = $Donne["ID"];
            $this->_Pseudo = $Donne["Pseudo"];
            $this->_Vie = $Donne["Vie"];
            $this->_Attaque = $Donne["Attaque"];
            $this->_Defense = $Donne["Defense"];
            $this->_Soin = $Donne["Soin"];

        }



        //Ex 7
        public function AfficherPersonnage()
        {
            echo "<p>";
            echo "Je suis <strong>".$this->_Pseudo."</strong>, je possède l'ID <strong>".$this->_ID."</strong>. J'ai <strong>".$this->_Vie." PV</strong>, <strong>".$this->_Attaque." dégats d'attaque</strong>, <strong>".$this->_Defense." points de défense</strong> et <strong>".$this->_Soin." de puissance de soin</strong>.";
            echo "</p>";
        }


    }

?>