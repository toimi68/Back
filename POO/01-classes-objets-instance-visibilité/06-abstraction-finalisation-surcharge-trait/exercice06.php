<?php
class Vehicule
{
    public function demarrer()
    {
        return"je demarre";
    }
    public function carburant()
    {
        return;
    }
    public function nombreDeTestObligatoire()
    {
        return 100;
    } 
}
//----------------------
class Peugeot{}
    //--------------------
    class Renault{}
        //----------------------------------------
        /*------faite en sorte de ne pas avoir de objetb vehicule*/
        $v=new Vehicule;/* au dessus on met abstract class Vehicule et comme ça marche pas =>msg d'erreur
        //------obligation pour renault et peugeot d'avoir la même methode demarrer():-----
        on emploit la methode final public function demarrer()
        //------obligation pour la renault de declarer carburant 'diesel'et pour peugeot carburant essence: 
        class Peugeot extend Vehicule
        {
            public function carburant(){
                return "essence";
            }
        }

        ____la renault doit faire 30 test de plus que la base------
        :class Peugeot extend Vehicule
        {
            public function carburant(){
                return "essence";
            }
            public function nombreDeTestObligatoire()
            {
                $resultat=parent::nombreDeTestObligatoire();return $return $resultat +70;
            }
        }

        la peugeot doit faire 70 test de plus que la base
        effectuer les affichages necessaires : 
          $renault =new renault;
          echo $renault->demarrer();
          echo "la peugeot consomme du carburant :".$renault->carburant() .
        echo "nombre de test pour la renault:".$peugeot-> nombre de test obligatoire()
        $renault=new renault ;
        echo $renault ->demarrer();
         echo "la peugeot consomme du carburant :".$renault->carburant() .
        echo "nombre de test pour la renault:".$renault-> nombreDeTestObligatoire()
        */
        
        class