<?php
class Vehicule
{
    private static $marque ='BMW';
    private $couleur='noir';
    /*-------------------------------------------------*/
    public static function setMarque($mark)
    {
         self::$marque=$mark;
            }
            public static function getMarque()
            {
                 self::$marque;
            }

            public function setCouleur($couleur)
            {
                $this->couleur=$couleur;
            }
             public function getCouleur()
             {
                 return $this->couleur;
             }
}
//EXO :creer un objet issu de la classe vehicule et faite une phrase en affichant la couleur et la marque
$vehicule1 = new Vehicule;
echo "le vehicule 1 de marque <strong>".vehicule::getMarque()."</strong> et de couleur <strong>".$vehicule1->getCouleur()."</strong>.<hr>";
//EXO:creer un autre vehicule et changer la couleur par violet et faites une phrase en affichant la couleur et la marque.
$vehicule2=new Vehicule;
$vehicule2->setCouleur('violet')
echo "le vehicule 2 de couleur <strong>".vehicule::getMarque()."<strong>et de couleur</strong>".$vehicule2->getCouleur()."</strong>.<hr>";
//EXO:modifier la marque par mercedes et creer un vehicule 4 et faite une phrase en affichant la couleur et la marque du vehicule
Vehicule::setMarque('mercedes');
$vehicule4=new vehicule;
echo "le vehicule4 est de marque <strong>".vehicule::getMarque()."</strong>et de couleur <strong>".$vehicule4->getcouleur()."</strong>.<hr>";
$vehicule5->getCouleur()."<strong></strong>"