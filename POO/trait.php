<?php
trait TPanier
{
    public $nbProduit=1;
    public function affichageProduits()
    {
        return "affichage des produits!!"
    }
}
//-----------------------------------------
trait TMembre
{
    public function affichageMembres()
    {
        return "affichage des membres!!<hr>"
    }
}
//-------------------------------------
class Site
{
    USE TPanier,TMembre;
}
//-----------------------------------------------
//Exo creer un objet issue de la cklass Site et afficheer les methodes issue de cette class
//et faire les differents affichagedes methodes declarées
$site=new Site;
echo '<pre>';print_r(get_class_methods($site));echo'</pre>';
echo '<pre>';print_r($site);echo'</pre>';
echo $site->affichageproduits();
echo $site->affichageMembres();
echo "nombrede produit ds le panier:".$site->nbProduit;
//les traits ont ete inventés pour repousser les limites de l'heritage.il est possible pour une class d'heriter de plusieur trait en même temps 
//un trait est un regroupementde methode et de propriete pouvant être importé dans une classe */
