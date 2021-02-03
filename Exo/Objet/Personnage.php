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
            



            
            /*incrementation sans BDD
            //Ex2
            $this->_Vie = 100;
            echo "J'ai ".$this->_Vie." PV. ";

            //Ex3
            $this->_Pseudo = $Pseudo;
            */
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



        //Ex6
        // Permet d'attaquer un autre personnage, $PersoAttaquer est un autre objet de type Personnage
        public function Attaquer ($PersoAttaquer)
        {
            echo "<p>";
            echo "<strong>".$this->_Pseudo." attaque ".$PersoAttaquer->_Pseudo.". </strong> avec un coup d'une puissance de <strong>".$this->_Attaque."</strong> dégats.";
            echo "</p>";
            //appelle méthode "défense" de l'objet
            //On met l'attaque de la cible dans la varable

            $PersoAttaquer->Défense ($this->_Attaque);
        }

        // Le personnage prend le coup d'un autre personnage ($ValeurAttaque est un int : ce sont les dégats d'un autre personnage)
        public function Défense ($ValeurAttaque)
        {
            //
            if ($this->_Vie>0)
            {
                echo "<p>";
                echo "Grace à sa défense, <strong>".$this->_Pseudo."</strong> à arreter <strong>".$this->_Defense."</strong> points de dégats.";
                echo "</p>";

                echo "<p>";
                $this->_Vie = $this->_Vie-($ValeurAttaque - $this->_Defense);

                echo "</p>";

                //au cas ou les pv = 0 :
                if ($this->_Vie <= 0)
                    {
                        echo "Les PV de <strong>".$this->_Pseudo."</strong> sont tombé a 0, il est <strong>mort</strong>.";
                        if($this->_Vie < 0)
                        {
                            $this->_Vie = 0;
                        }
                    }elseif($this->_Vie > 0)
                {
                    echo "<strong>".$this->_Pseudo."</strong> à désormais <strong>".$this->_Vie." PV</strong>.";
                }
            }else
            {
                echo "<strong>".$this->_Pseudo."</strong> n'a pas put etre attaqué, il est déjà <strong>mort</strong>, pas la peine de s'acharner";
            }

            //requete SQL pour update en base :
            $req = "UPDATE `Personnage` SET `Vie`= $this->_Vie WHERE `ID`= $this->_ID";

            $reponse = $this->_BDD->query($req);
        }

        //
        public function SeSoigne ()
        {
            if($this->_Vie<100)
            {
                echo "<p>";
                echo "<strong> Soin ! </strong>";
                echo "</p>";

                echo "<p>";
                //Update en base :
                $req = "UPDATE `Personnage` SET `Vie`= ? WHERE `ID`= $this->_ID";
                $reponse = $this->_BDD->prepare($req);
                //Update sur le perso :
                //Ajout des PV :
                $this->_Vie = $this->_Vie + $this->_Soin;
                //Recupere mes PV apres soin

                //si le soin sup a difference
                if($this->_Vie > 100)
                    {
                        //On met la vie a 100 dans tout les cas
                        $this->_Vie = 100;
                    }else{ //Sinon :
                    //On ne fait rien de particulier, juste soigné du montant donné
                    echo "Grace au soin, <strong>".$this->_Pseudo."</strong> a désormais <strong>".$this->_Vie." PV</strong>.";
                }
                echo "</p>";
            }else //Si les PV sont déja au max, le soin échou
            {
                echo "Les PV de <strong>".$this->_Pseudo."</strong> sont déjà au maximum, le soin a échoué";
            }
            $reponse->execute(array(
                $this->_Vie
            ));
        }
        //fin Ex6




        //------------------------------------------

        //Fonction Get
        //Get _Vie
        public function get_Vie()
        {
            return $this->_Vie;
        }
        //Get _Attaque
        public function get_Attaque()
        {
            return $this->Attaque;
        }

        //-----------------------------------------

        //Fonction Set
        //Set _Vie
        public function set_Vie($Changement)
        {
            $this->_Vie = $this->_Vie;
        }
        //Set _Attaque
        public function set_Attaque()
        {
            $this->_Attaque = $this->_Attaque;
        }
    }

?>