<?php
function inclusionAutomatique($nomDeLaClasse)

{
    //require_once('A.classe.php');
    echo $nomDeLaClasse.'<hr>';
    require_once($nomDeLaClasse.'.class.php');
    echo "on passe dans une inclusionAutomatique()<hr>";
    echo "require_once($nomDeLaClasse.'class.php')<hr>";
    }
    spl_autoload_register('inclusionAutomatique');
//spl_autoload_register()est une fonction predefiniqui s'execute automatiquement qd l'interpreteur 
//voit passé le mot clé'new' donc qd on instancie une classe
//En plus nous demandons à spl_autoload_register()d'executer notre fonction inclusionAutomatique()
//spl_autoload_register()recupére tout ce qu'il y a aprés le "new"et l'envoit en argument de la fonction inclusionAutomatique
//c'est ce qui permet de faire appel au bon fichierds lequel la classe est declarée
    //$a = new A;