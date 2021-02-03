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
        
        public function __construct($Pseudo,$Attaque,$Defense,$Soin)
        {
            //commenxion a la base de donné
            $this->_BDD = new PDO("mysql:host=192.168.64.116; dbname=Maxence_Objet_Ex; charset=utf8", "root", "root");

            $this->_Pseudo=$Pseudo;
            $this->_Attaque=$Attaque;
            $this->_Defense=$Defense;
            $this->_Soin=$Soin;
        }



        //Ex 7
        public function AfficherPersonnage()
        {
            echo "<p>";
            echo "Je suis <strong>".$this->_Pseudo."</strong>, je possède l'ID <strong>".$this->_ID."</strong>. J'ai <strong>".$this->_Vie." PV</strong>, <strong>".$this->_Attaque." dégats d'attaque</strong>, <strong>".$this->_Defense." points de défense</strong> et <strong>".$this->_Soin." de puissance de soin</strong>.";
            echo "</p>";
        }

        public function NouveauPerso()
        {
            $req="INSERT INTO `Personnage`(`Pseudo`, `Vie`, `Attaque`, `Defense`, `Soin`) VALUES (?,'100',?,?,?)";
            $reponse = $this->_BDD->prepare($req);


            $reponse->execute(array($this->_Pseudo,$this->_Attaque,$this->_Defense,$this->_Soin));

            echo "Le personnage ".$this->_Pseudo." à été ajouté"; 
        }
    }
?>