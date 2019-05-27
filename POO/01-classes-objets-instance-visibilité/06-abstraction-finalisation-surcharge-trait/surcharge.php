<?php
class A
{
    public function calcul()
    {
        return 10;
    }
}
//
class B extends A//class dont on herite
{
    public function calcul()//redefinition
    {
        $nb =parent::calcul();//parent fonctionne pr appeler une methode d'uine class
        //parente lors de la surcharge(override)
        //une surcharge permet de prendre en compte le comportement de ma fonctiond'origine et d'y ajouter un traitement complementaire
        if($nb<=100) return"$nb est inferieur ou egal à 100";
        else  return"$nb est superieur à 100";       
    }
}
//pour la surcharge si ça n'etait pas ds wordpresson ne pourrais mettre à jour le CMSon modifierais directement les fonction du coeur
//exo instancier la class B et afficher le resultatde la condition
if($nb<=100)return "$nb est inferieur ou egal à 100";
else        return "$nb est superieur à 100";