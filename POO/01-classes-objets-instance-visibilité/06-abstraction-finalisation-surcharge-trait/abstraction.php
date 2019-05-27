<?php
abstract class Joueur
{
public function seConnecter();
{
    return $this->EtreMajeur();
}
abstract public function EtreMajeur();
abstract public function Devise();
}
//---------------------------------------
//$test=new Joueur;Ds ce cas on aura une erreur parce qu'il n'est instancier,une classe abstrait n'est pas instanciable
class JoueurFr extends Joueur
{
public function EtreMajeur()
{
    return 18;
}
public function Devise()
{
    return'€';
    
}
}

//----------------------------------------------------------------------
    //exo : creer un objet JoueurFr et afficher les methodes contenus ds la classe
    $joueurFr=new JoueurFr;
    echo "l'age pour avoir acces au site est :<strong>".$joueurFr->EtreMajeur() ."</strong>ans<hr>";
    echo "la devise est :<strong>".$joueurFr->Devise()."</strong><hr>";
    //creer une classe  joueurUs et realiser le traitement permettant d'afficher'21' pour la methode'EtreMajeur()' et afficher
    echo "l'age pour avoir acces au site est :<strong>".$joueurusr->EtreMajeur() ."</strong>ans<hr>";
    echo "la devise est :<strong>".$joueurFr->Devise()."</strong><hr>";
    //'$'pour la devise
    //une classe abstraite n'est pas instanciable/les methodes abstraites n'ont pas de contenu/qd on herite des methodes abstraites on doit les redefinir/il faut que la classe qui les contiennent soit abstraite ns devons les definir
    //le developpeur qui ecrit la classe joueurest au coeur de l'application(noyau)et va obliger les autres developpeurs à les redefinir les methodes EtreMajeur et Devise