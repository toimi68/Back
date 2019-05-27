<?php
class Electricien
{
    public function getSpecialiste()
    {
        return "pose des cables,tableaux ou armoires electriques....<hr>" 
    }
    public function getHoraire()
    {
        return "8h/19h <hr>";
    }
}
//-------------------------------------------
class Entreprise
{
    public $numero=0;
    public function appelUnEmploye($employe)
    {
        $this->numero++;
        $this->{"monEmploye" . $this->numero}=new $employe;
//ici on creer un nouveau objet        
            return $this->{"monEmploye".$this->numero};
    //on retourne l'objet genere return $entreprise->monEmploye1;
    //                           return $entreprise->monEmploye1;

        }

    }
//---------------------
$entreprise = new Entreprise;
//------------------------
$entreprise->appelUnEmploye('Plombier');
//Afficher les methodes de la classe 'plombier' via l'objet issu de la classe entreprise'$entreprise'
echo $entreprise->monemploye1->getSpecialiste();
echo $entreprise->monemploye1->getHoraires();
//------------------
$entreprise->appelUnEmploye('Electricien');
echo $entreprise->monEmploye2->getSpecialiste().'<hr>';
echo $entreprise->monEmploye2->getHoraire().'<hr>';
