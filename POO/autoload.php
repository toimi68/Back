<?php
Class Autoload 
{
public static function className($className)
{
require __DIR__ .'_'.str_replace('\\','\',$className.'php')';
//str_replace()permet de remplacer les anti-slash'\',nous avons 2 anti-slash,sinon l'interpreteur
//considere que c'est un caractere d'echappement
echo "require".__DIR__.'/'.str_replace('\\','\',$className.'.php')';
}
}
spl_autoload_registred(array('Autoload','className'));
//qd l'interprteur voit passer le mot 'new' et la fonction'className()'est execute ds le même temps

$a = new Controller\Controller;
//au momment de l'instanciation l'autoload  s'execute et va chercher le dossier Controller.php
//-------------------EXO--------------------------
$b = new Model\EntityRepository;
